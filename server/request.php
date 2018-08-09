<?php
/*
 * Start the session
 *
 */
session_start();

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
    $db = new MysqliDb ('localhost', 'demo_nanalandia', 'password', 'demo_nanalandia');

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
        //Create class object (Edit)
        $user = new Users($db);

        //Create Form object
        $form = new GUMP();

        //Sanitize the $_POST array
        $_POST = $form->sanitize($_POST);

        //Validation Rules (Edit)
        $form->validation_rules(array(
            'email'    => 'required|valid_email|max_len,50',
            'password'    => 'required|max_len,50|min_len,8',
        ));

        //Filters for $_POST data (Edit)
        $form->filter_rules(array(
            'email' => 'trim|sanitize_email',
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

                //Step 2: Check user status
                if($user->checkUserStatus($_POST['email'])){

                    //Step 3: Check user login
                    if($user->checkLogin($_POST['email'], $_POST['password'])){
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['valid'] = true;

                        //If login successful print success message
                        $arr['msg'] = 'Login Successful!';
                        $arr['status'] = 1;
                        if($user->checkUserType($_POST['email'])){
                            $arr['type'] = 'admin/';
                        }else{
                            $arr['type'] = 'user/';
                        }

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
                    'password' => $_POST['password']
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