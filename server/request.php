<?php
/*
 * Start the session
 *
 */
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

/*
 * Array for success and failure message
 */
$arr = array();
$action = '';
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

/*
 * Required library for mysqli operations
 */
include_once 'libs/mysqli/MysqliDb.php';

/*
 * Required library for data validation
 */
include_once 'libs/validation/gump.class.php';

/*
 * classes.php includes all the classes for the system
 */
include_once 'classes.php';

/*
 * Create global database object
 */
try{
    //Create the database object
    $db = new MysqliDb ('localhost', 'root', '', 'demo_nanalandia');

}catch (Exception $e){
    //If any exception occurs, print error message
    $arr['msg'] = $e->getMessage();
    $arr['status'] = 0;
    echo json_encode($arr);
}

/*
 * Check User Login
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && $action === 'login'){
    try{
        //Create user class object (Edit)
        $user = new Users($db);
		
		//Create request class object (Edit)
        $request = new Request($db);

        //Create Form object
        $form = new GUMP();

        //Sanitize the $_POST array
        $_POST = $form->sanitize($_POST);

        //Validation Rules (Edit)
        $form->validation_rules(array(
            'email'    => 'required|valid_email|max_len,50',
            'password' => 'required|max_len,50|min_len,8',
        ));

        //Filters for $_POST data (Edit)
        $form->filter_rules(array(
            'email' 	=> 'trim|sanitize_email',
            'password' 	=> 'trim|base64_encode'
        ));

        //Run the filters and validation on $_POST data
        $validated_data = $form->run($_POST);
        //Check the validated data
        if($validated_data === false){
            //If data validation fails, print error messages
            $arr['msg'] = $form->get_readable_errors(true);
            $arr['status'] = 0;
            echo json_encode($arr);
        }else {
            //Step 1: Check user exist or not
            if($user->checkUser($_POST['email'])){
                //Step 2: Check user status
                if($user->checkUserStatus($_POST['email'])){
                    //Step 3: Check user login
					$userData = $user->checkLogin($_POST['email'], md5($_POST['password']));
					if( !empty($userData) ){
                        $_SESSION['id'] 		= $userData['id'];
                        $_SESSION['email'] 		= $userData['email'];
                        $_SESSION['type'] 		= $userData['type'];
                        $_SESSION['fullName'] 	= trim(ucfirst($userData['firstname']).' '.ucfirst($userData['lastname']));
                        $_SESSION['valid'] = true;
                        //If login successful print success message
                        $arr['msg'] 	= 'Login Successful!';
                        $arr['status'] 	= 1;
                        $arr['type']    = 'dashboard.php';
						//$arr['request']  = $request->getAllRequest();
						//echo "<pre>";print_r($arr);
						//die('------------------');
                        echo json_encode($arr);
                    }else{
                        //If Step 3 fails, print error messages
                        $arr['msg'] = 'Invalid username or password. Please try again!';
                        $arr['status'] = 0;
                        echo json_encode($arr);
                    }
                }else{
                    //If Step 2 fails, print error messages
                    $arr['msg'] = 'You have not activated your account. Please click on the activation link sent to your email!';
                    $arr['status'] = 0;
                    echo json_encode($arr);
                }
            }else{
                //If Step 1 fails, print error messages
                $arr['msg'] = 'User does not exist. Please register first!';
                $arr['status'] = 0;
                echo json_encode($arr);
            }
        }
    }catch (Exception $e){
        //If any exception occurs, print error message
        $arr['msg'] = $e->getMessage();
        $arr['status'] = 0;
        echo json_encode($arr);
    }
}

/*
 * User Registration
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && $action === 'register'){
    try{
        //Create class object (Edit)
        $user = new Users($db);

        //Create Form object
        $form = new GUMP();

        //Sanitize the $_POST array
        $_POST = $form->sanitize($_POST);

        //Validation Rules (Edit)
        $form->validation_rules(array(
            'firstname'    => 'required|alpha|max_len,50',
            'lastname'    => 'required|alpha|max_len,50',
            'phone'    => 'required|phone_number|max_len,20',
            'cellphone'    => 'required|phone_number|max_len,20',
            'direction'    => 'required|street_address|max_len,100',
            'sector'    => 'required|max_len,50',
            'city'    => 'required|max_len,50',
            'email'    => 'required|valid_email|max_len,50',
            'password'    => 'required|max_len,50|min_len,8',
        ));

        //Filters for $_POST data (Edit)
        $form->filter_rules(array(
            'firstname' => 'trim|sanitize_string',
            'lastname' => 'trim|sanitize_string',
            'phone' => 'trim|sanitize_numbers',
            'cellphone' => 'trim|sanitize_numbers',
            'direction' => 'trim|sanitize_string',
            'sector' => 'trim|sanitize_string',
            'city' => 'trim|sanitize_string',
            'email' => 'trim|lower_case',
            'password' => 'trim|base64_encode'
        ));

        //Run the filters and validation on $_POST data
        $validated_data = $form->run($_POST);

        //Check the validated data
        if($validated_data === false){

            //If data validation fails, print error messages
            $arr['msg'] = $form->get_readable_errors(true);
            $arr['status'] = 0;
            echo json_encode($arr);

        }else {
            //If data validation succeed then perform necessary action (Edit)

            //Step 1: Check user exist or not
            if($user->checkUser($_POST['email'])){
                //If Step 1 succeed, print error messages
                $arr['msg'] = 'User account already exist. Please login to your account!';
                $arr['status'] = 0;
                echo json_encode($arr);
            }else{

                $data = Array(
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'phone' => $_POST['phone'],
                    'cellphone' => $_POST['cellphone'],
                    'direction' => $_POST['direction'],
                    'sector' => $_POST['sector'],
                    'city' => $_POST['city'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password'])
                );

                if($user->registerUser($data)){
                    $subject = 'Account Activation Link';
                    $message = 'Your Account Activation Link: '.$user->generateLink($_POST['email']);

                    if($user->sendEmail($_POST['email'], $subject, $message)){
                        $arr['msg'] = 'User Registered Successfully!';
                        $arr['status'] = 1;
                        echo json_encode($arr);
                    }
                    else{
                        $arr['msg'] = 'User registered but sending activation link fails!';
                        $arr['status'] = 1;
                        echo json_encode($arr);
                    }
                }else{
                    //If user registration fails, print error messages
                    $arr['msg'] = 'User account already exist. Please login to your account!';
                    $arr['status'] = 0;
                    echo json_encode($arr);
                }
            }
        }
    }catch (Exception $e){
        //If any exception occurs, print error message
        $arr['msg'] = $e->getMessage();
        $arr['status'] = 0;
        echo json_encode($arr);
    }
}


/*
 * User Request Form
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && $action === 'request'){
    try{
		
		//echo "<pre>"; print_r($_POST); die('lol');
		
        //Create class object (Edit)
        $request = new Request($db);

        //Create Form object
        $form = new GUMP();

        //Sanitize the $_POST array
        $_POST = $form->sanitize($_POST);

        //Validation Rules (Edit)
		$otherValidation = $no_of_pets = '';
        if( isset($_POST['pets']) && $_POST['pets'] == 'other' )
			$otherValidation = 'required';
		else if( isset($_POST['pets']) && $_POST['pets'] != '' && $_POST['pets'] != 'other' )
			$no_of_pets = 'required|numeric|max_len,3';
		
		$other_religion_text = $other_job = $other_listen_us_text = $children_number = '';
        if( isset($_POST['religious_affiliation']) && $_POST['religious_affiliation'] == 'other_religion' )
			$other_religion_text = 'required';
		if( isset($_POST['work_to_be_done']) && $_POST['work_to_be_done'] == 'other_job' )
			$other_job = 'required';
		if( isset($_POST['hear_about']) && $_POST['hear_about'] == 'other_listen_us' )
			$other_listen_us_text = 'required';
		if( isset($_POST['children']) && $_POST['children'] == 1 )
			$children_number = 'required|numeric|max_len,3';
		
		$form->validation_rules(array(
            'housing_type'    		=> 'required|max_len,10',
            'floor_number'    		=> 'required|numeric|max_len,3',
            'bedrooms_number'    	=> 'required|numeric|max_len,3',
            'square_meter'    		=> 'required',
            //'people_in_house'    	=> 'required|numeric|max_len,3',
            'children'    			=> 'required',
            'children_number'    	=> $children_number,
            //'age'    				=> 'required|numeric|max_len,3',
            //'pets'    				=> 'required',
            'other_pet'    			=> $otherValidation,
            //'no_of_pets'   			=> $no_of_pets,
            'employee_type'    		=> 'required',
            'job_type'    			=> 'required',
            'range_age_employee'	=> 'required',
            'employee_nationality'  => 'required',
            //'academic_level'    	=> 'required',
            //'work_experience'    	=> 'required',
            'other_religion_text'   => $other_religion_text,
            'hour_modal'    		=> 'required',
            'other_job'    			=> $other_job,
            'day_modal'    			=> 'required',
            'starting_hour'    		=> 'required',
            'end_hour'    			=> 'required',
            'payment'    			=> 'required',
            'transport_help'    	=> 'required',
            'hear_about'	    	=> 'required',
            'other_listen_us_text'  => $other_listen_us_text,
            //'comments'    			=> 'max_len,1000',
            'terms'    				=> 'required',
        ));
						
        //Filters for $_POST data (Edit)
        $form->filter_rules(array(
            'housing_type' 			=> 'trim|sanitize_numbers',
            'floor_number' 			=> 'trim|sanitize_numbers',
            'bedrooms_number' 		=> 'trim|sanitize_numbers',
            'square_meter' 			=> 'trim|sanitize_numbers',
            'children' 				=> 'trim|sanitize_string',
            'children_number' 		=> 'trim|sanitize_string',
            'other_pet' 			=> 'trim|sanitize_string',
            'employee_type' 		=> 'trim|sanitize_numbers',
            'job_type' 				=> 'trim|sanitize_string',
            'range_age_employee' 	=> 'trim|sanitize_string',
            'employee_nationality' 	=> 'trim|sanitize_string',
            'other_religion_text' 	=> 'trim|sanitize_string',
            'hour_modal' 			=> 'trim|sanitize_string',
            'other_job' 			=> 'trim|sanitize_string',
            'day_modal' 			=> 'trim|sanitize_string',
            'starting_hour' 		=> 'trim|sanitize_string',
            'end_hour' 				=> 'trim|sanitize_string',
            'payment' 				=> 'trim|sanitize_string',
            'transport_help' 		=> 'trim|sanitize_string',
            'hear_about' 			=> 'trim|sanitize_string',
            'other_listen_us_text' 	=> 'trim|sanitize_string',
            'terms' 				=> 'trim|sanitize_string'
        ));

        //Run the filters and validation on $_POST data
        $validated_data = $form->run($_POST);
		//Check the validated data
		if($validated_data === false){
			//If data validation fails, print error messages
            $arr['msg'] = $form->get_readable_errors(true);
            $arr['status'] = 0;
            echo json_encode($arr);
		}else {
            //If data validation succeed then perform necessary action (Edit)
			$_POST['user_id'] = $_SESSION['id'];
			//echo "<pre>"; print_r($_POST); die;
			if($request->newRequest($_POST)){
				$arr['msg'] 	= 'Request submitted Successfully!';
				$arr['status'] 	= 1;
				echo json_encode($arr);
			}else{
				//If request save fails, print error messages
				$arr['msg'] 	= 'Something went wrong. Please try again!';
				$arr['status'] 	= 0;
				echo json_encode($arr);
			}
        }
    }catch (Exception $e){
        //If any exception occurs, print error message
        $arr['msg'] 	= $e->getMessage();
        $arr['status'] 	= 0;
        echo json_encode($arr);
    }
}


/*
 * Employee Form
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && $action === 'employee'){
    try{		
		//echo "<pre>"; print_r($_POST); die('lol');
		//Create class object (Edit)
        $employee = new Employee($db);
        //Create Form object
        $form = new GUMP();
        //Sanitize the $_POST array
        $_POST = $form->sanitize($_POST);
        //Validation Rules (Edit)
		$form->validation_rules(array(
            'fullname'    		=> 'required|max_len,50|min_len,2',
            'age'    			=> 'required|numeric|max_len,3',
            'direction'    		=> 'required|min_len,3',
            'marital_status'    => 'required',
            'phone'    			=> 'required|numeric|min_len,10|max_len,16',
            'academic_level'    => 'required',
            'position'    		=> 'required',
            'employment_experience_time'  => 'required',
            'hour_to_job'    	=> 'required'
        ));
						
        //Filters for $_POST data (Edit)
        $form->filter_rules(array(
            'fullname' 							=> 'trim|sanitize_string',
            'age' 								=> 'trim|sanitize_numbers',
            'direction' 						=> 'trim|sanitize_string',
            'marital_status' 					=> 'trim|sanitize_string',
            'phone' 							=> 'trim|sanitize_string',
            'cellphone' 						=> 'trim|sanitize_string',
            'academic_level' 					=> 'trim|sanitize_string',
            'position'      					=> 'trim|sanitize_string',
            'any_desease' 						=> 'trim|sanitize_string',
            'employment_situation' 				=> 'trim|sanitize_string',
            'employment_experience' 			=> 'trim|sanitize_string',
            'how_often_do_you_drink_alcohole' 	=> 'trim|sanitize_string',
            'how_often_do_you_smoke' 			=> 'trim|sanitize_string',
            'comments' 							=> 'trim|sanitize_string',
            'employment_experience_time' 		=> 'trim|sanitize_string',
            'last_job' 							=> 'trim|sanitize_string',
            'hour_to_job' 						=> 'trim|sanitize_string',
            'night_or_day' 						=> 'trim|sanitize_string',
            'how_much_do_you_want_earn' 		=> 'trim|sanitize_string',
            'work_reference' 					=> 'trim|sanitize_string',
            'personal_references' 				=> 'trim|sanitize_string'
        ));
        //Run the filters and validation on $_POST data
        $validated_data = $form->run($_POST);
		//Check the validated data
		if($validated_data === false){
			//If data validation fails, print error messages
            $arr['msg'] = $form->get_readable_errors(true);
            $arr['status'] = 0;
            echo json_encode($arr);
		}else {
            //If data validation succeed then perform necessary action (Edit)
			$_POST['status'] 	= 1;
			$loggedUserId   	= isset($_SESSION['id']) ? $_SESSION['id'] : '';
			if($employee->newEmployee($_POST))
			{
				$arr['msg'] 	= 'Employee added Successfully!';
				$arr['status'] 	= 1;
				echo json_encode($arr);
			}else{
				//If request save fails, print error messages
				$arr['msg'] 	= 'Something went wrong. Please try again!';
				$arr['status'] 	= 0;
				echo json_encode($arr);
			}
        }
    }catch (Exception $e){
        //If any exception occurs, print error message
        $arr['msg'] 	= $e->getMessage();
        $arr['status'] 	= 0;
        echo json_encode($arr);
    }
}


/*
 * Upload Receipt Form
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && $action === 'uploadReceipt'){
    try{
		
		$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
		$fileName = $_FILES['file']['name'];
		$targetPath = "../assets/upload/".$fileName; // Target path where file is to be stored
		move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

        //Create class object (Edit)
        $req = new Request($db);
		$postData = array();
		$postData['userId'] = $_POST['reqUserId'];
		$postData['path'] = $targetPath;
        if($req->uploadRequestReceipt($_POST['reqUserId'],$fileName)){
			$arr['msg'] 	= 'Receipt Upload Successfully!';
			$arr['status'] 	= 1;
			$arr['name'] 	= $_FILES['file']['name'];;
			$arr['tr'] 	= "tr_".$_POST['trId'];
			echo json_encode($arr);
		}else{
			//If request save fails, print error messages
			$arr['msg'] 	= 'Something went wrong. Please try again!';
			$arr['status'] 	= 0;
			echo json_encode($arr);
		}
		

    }catch (Exception $e){
        //If any exception occurs, print error message
        $arr['msg'] 	= $e->getMessage();
        $arr['status'] 	= 0;
        echo json_encode($arr);
    }
}

/*
 * Upload Receipt Form
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && $action === 'confirmPayment'){
    try{
        //Create class object (Edit)
        $req = new Request($db);
		$postData = array();
		$postData['status'] = 3;
        if($req->changeRequestStatus($_POST['reqUserId'],$postData)){
			$arr['msg'] 	= 'Confirm Payment Sucessfully';
			$arr['status'] 	= 1;
			$arr['tr'] 	= "tr_".$_POST['trId'];
			$arr['td'] 	= '<p class="purpc">Depurando candidatos</p>';
			echo json_encode($arr);
		}else{
			//If request save fails, print error messages
			$arr['msg'] 	= 'Something went wrong. Please try again!';
			$arr['status'] 	= 0;
			echo json_encode($arr);
		}
		

    }catch (Exception $e){
        //If any exception occurs, print error message
        $arr['msg'] 	= $e->getMessage();
        $arr['status'] 	= 0;
        echo json_encode($arr);
    }
}


/*
 * Assign Employee To Request
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && $action === 'assignEmployee'){
    try{	
		$loggedUserId   	= isset($_SESSION['id']) ? $_SESSION['id'] : '';
		if( $loggedUserId == '' || $loggedUserId <= 0 )
		{
			$arr['msg'] 	= 'Your login session has expired. Please login again!';
			$arr['status'] 	= 0;
			echo json_encode($arr);
		}
		else
		{
			$employee 	= new Employee($db);
			$form 		= new GUMP();
			$_POST 		= $form->sanitize($_POST);
			$form->validation_rules(array(
				'employeeId' => 'required|numeric|max_len,7',
				'requestId'  => 'required|numeric|max_len,7',            
			));
			$form->filter_rules(array(
				'employeeId' => 'trim|sanitize_numbers',
				'requestId'  => 'trim|sanitize_numbers'
			));
			$validated_data = $form->run($_POST);
			if($validated_data === false){
				$arr['msg'] = $form->get_readable_errors(true);
				$arr['status'] = 0;
				echo json_encode($arr);
			}else {
				if( $employee->isEmployeeHired($_POST['employeeId']) )
				{
					$arr['msg'] 	= 'This candidate is already hired.';
					$arr['status'] 	= 0;
					echo json_encode($arr);
				}
				else if( !$employee->checkAlreadyAssigned($_POST['employeeId'], $_POST['requestId'] ) )
				{
					if($employee->assignEmployee($_POST))
					{
						$employee->changeEmployeeStatus($_POST['employeeId'],2);
						$arr['msg'] 	= 'Employee assigned successfully!';
						$arr['status'] 	= 1;
						echo json_encode($arr);
					}else{
						//If request save fails, print error messages
						$arr['msg'] 	= 'Something went wrong. Please try again!';
						$arr['status'] 	= 0;
						echo json_encode($arr);
					}
				}
				else{
					//If request save fails, print error messages
					$arr['msg'] 	= 'Employee assigned successfully!';
					$arr['status'] 	= 1;
					echo json_encode($arr);
				}
			}
		}
    }catch (Exception $e){
        //If any exception occurs, print error message
        $arr['msg'] 	= $e->getMessage();
        $arr['status'] 	= 0;
        echo json_encode($arr);
    }
}


/*
 * Hire Employee To Request
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && $action === 'hireEmployee'){
    try{	
		$loggedUserId   	= isset($_SESSION['id']) ? $_SESSION['id'] : '';
		if( $loggedUserId == '' || $loggedUserId <= 0 )
		{
			$arr['msg'] 	= 'Your login session has expired. Please login again!';
			$arr['status'] 	= 0;
			echo json_encode($arr);
		}
		else
		{
			$employee 	= new Employee($db);
			$form 		= new GUMP();
			$_POST 		= $form->sanitize($_POST);
			$form->validation_rules(array(
				'employeeId' => 'required|numeric|max_len,7',
				'requestId'  => 'required|numeric|max_len,7',            
			));
			$form->filter_rules(array(
				'employeeId' => 'trim|sanitize_numbers',
				'requestId'  => 'trim|sanitize_numbers'
			));
			$validated_data = $form->run($_POST);
			if($validated_data === false){
				$arr['msg'] = $form->get_readable_errors(true);
				$arr['status'] = 0;
				echo json_encode($arr);
			}else {
				if( $employee->isHiredEmployeeForRequest($_POST['requestId']) )
				{
					$arr['msg'] 	= 'You can only hire one candidate.';
					$arr['status'] 	= 0;
					echo json_encode($arr);
				}
				else if( $employee->isEmployeeHired($_POST['employeeId']) )
				{
					$arr['msg'] 	= 'This candidate is already hired.';
					$arr['status'] 	= 0;
					echo json_encode($arr);
				}
				else 
				{
					if($employee->hireEmployee($_POST['employeeId'],$_POST['requestId']))
					{
						$arr['msg'] 	= 'Employee hired successfully!';
						$arr['status'] 	= 1;
						echo json_encode($arr);
					}else{
						//If request save fails, print error messages
						$arr['msg'] 	= 'Something went wrong. Please try again!';
						$arr['status'] 	= 0;
						echo json_encode($arr);
					}
				}
			}
		}
    }catch (Exception $e){
        //If any exception occurs, print error message
        $arr['msg'] 	= $e->getMessage();
        $arr['status'] 	= 0;
        echo json_encode($arr);
    }
}