<?php
/*
 * Class for User
 */
class Users{
    var $db;
	public $root  = '';
    /*
     * Constructor of Users class
     * @var $db is Mysqli DB Connection
     */
    public function __construct($db){
        $this->db = $db;
		$this->root  = "http://".$_SERVER['HTTP_HOST'];
		$this->root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
		
		if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} 
    }

    /*
     * Function to check user exist (Checked)
     * @var $email - username/email
     */
    function checkUser($email){
        $this->db->where("email", "$email");
        if(!empty($this->db->getOne("users"))){
            return 1;
        }else{
            return 0;
        }
    }
	
	/*
     * Function to check user token (Checked)
     * @var $token - token
     */
    function checkUserToken($token){
        $this->db->where("token", "$token");
		return $this->db->getOne("users",'id,firstname,lastname');        
    }
	
	function changeUserStatus($id,$status){
		$this->db->where('id', $id);
		 if($this->db->update('users',array('status'=>$status,'token'=>''))){			 
            return 1;
        }
        else{
            return 0;
        }
    }

    /*
     * Function to check user account status (Checked)
     * @var $email - username/email
     */
    function checkUserStatus($email){
        $this->db->where("email", "$email");
        if($this->db->getValue("users","status")){
            return 1;
        }else{
            return 0;
        }
    }

    /*
     * Function to check user login status (Checked)
     * @var $email - username/email
     */
    function checkLogin($email, $password){
        $this->db->where("email", "$email");
        $this->db->where("password", "$password");
		return $this->db->getOne("users",'id,firstname,lastname,email,type');
        /*if(!empty($this->db->getOne("users"))){
            return 1;
        }else{
            return 0;
        }*/
    }
	/*
     * Function to logout user
     */
	function logout(){
        session_destroy();
		$_SESSION = [];
		return 1;
    }

    function generateLink($email){
		if(isset($_SERVER['HTTPS'])){
			$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
		}
		else{
			$protocol = 'http';
		}
		//echo $protocol . "://" . $_SERVER['HTTP_HOST'].'/nanalandia';
		$siteurl = $protocol . "://" . $_SERVER['HTTP_HOST'].'/nanalandia';
        $link = $siteurl.'/verify.php?token='.md5($email);
        return $link;
    }

    //Function to send email (checked)
    function sendEmail($email, $subject, $message){
        include_once 'libs/mail/class.phpmailer.php';
        error_reporting(E_STRICT);
        date_default_timezone_set('America/Toronto');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'ssl://smtp.googlemail.com'; //Mail Server Host
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = 'nitindeveloper23@gmail.com'; //Email Username
        $mail->Password = 'nitin@123'; //Email Password
        $mail->SMTPSecure = 'smtp';
        $mail->setFrom('nitindeveloper23@gmail.com');//From
        $mail->AddAddress("$email"); //To
        $mail->IsHTML(true);
        $mail->Subject = "$subject"; //Subject
        $mail->Body = "$message"; //Message
        if($mail->Send()){
            return 1;
        }
        else{
            return 0;
        }
    }

    /*
     * Function to check user type (Checked)
     * @var $email - username/email
     */
    function checkUserType($email){
        $this->db->where("email", "$email");
        return $this->db->getValue("users","type");
    }

    function registerUser($data){
        if($this->db->insert('users', $data)){
            return 1;
        }
        else{
            return 0;
        }
    }
}

class Contract{

    var $db;
    /*
     * Constructor of Contract class
     * @var $db is Mysqli DB Connection
     */
    public function __construct($db){
        $this->db = $db;
    }

    function newContract($data){
        if($this->db->insert('contracts', $data)){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getContractDetails($a, $db){
        $this->db->where("a", "$a");
        if(!empty($this->db->getOne("contracts"))) {
            return 1;
        }
        else{
            return 0;
        }
    }

    function deleteContract($a, $db){
        $this->db->where('id', $a);
        if($this->db->delete('contracts')){
            return 1;
        }
        else{
            return 0;
        }
    }

    function changeContractStatus($a, $db){

    }
}


class Request{

    var $db;
    /*
     * Constructor of Request class
     * @var $db is Mysqli DB Connection
     */
    public function __construct($db){
        $this->db = $db;
    }

    function newRequest($data){
        if($this->db->insert('requests', $data)){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getRequestDetails($requestId,$userId = null,$loggedUserType=null){
		if( $userId != null && $loggedUserType != 1 )
			$this->db->where("user_id", $userId);
        $this->db->where("id", $requestId);
        if(!empty($this->db->getOne("requests"))) {
            return 1;
        }
        else{
            return 0;
        }
    }
	
	
	
	function getAllRequest($id){
		if($id > 1){
			$this->db->where("user_id", "$id");
		}
		$this->db->join('users', 'users.id = requests.user_id','INNER');
		$req = $this->db->get('requests',null,'requests.*, users.firstname, users.lastname');
		//echo $this->db->getLastQuery(); die('lol');
        if(!empty($req)) {
            return $req; 
        }
        else{
            return 0;
        }
    }
	
	function deleteRequest($a, $db){
        $this->db->where('id', $a);
        if($this->db->delete('requests')){
            return 1;
        }
        else{
            return 0;
        }
    }

 	function changeRequestStatus($id,$data){
		$this->db->where('id', $id);
		 if($this->db->update('requests',$data)){
            return 1;
        }
        else{
            return 0;
        }
    }

	function uploadRequestReceipt($id,$path){
		$this->db->where('id', $id);
		//$this->db->update('requests',array('path' => $path));
		 if($this->db->update('requests',array('path' => $path))){
            return 1;
        }
        else{
            return 0;
        }
	}

	function getAllRequestForDropdown($id){
		if($id > 1){
			$this->db->where("user_id", "$id");
		}
		$this->db->join("users u", "u.id=requests.user_id", "INNER");
		$req = $this->db->get("requests",null,"requests.id,u.firstname,u.lastname");
		//echo $this->db->getLastQuery();
        if(!empty($req)) {
            return $req; 
        }
        else{
            return 0;
        }
    }

   
}


class Employee{

    var $db;
    /*
     * Constructor of Employee class
     * @var $db is Mysqli DB Connection
     */
    public function __construct($db){
        $this->db = $db;
    }

    function newEmployee($data){
        if($this->db->insert('employee', $data)){
            return 1;
        }
        else{
            return 0;
        }
    }

    	
	function getEmployeeDetails($employeeId){
		
        $this->db->where("id", $employeeId);
		$req = $this->db->getOne("employee",'*');
        if(!empty($req)) {
            return $req;
        }
        else{
            return 0;
        }
    }
	
	function getAllEmployee($id){
		if($id > 1){
			$this->db->where("user_id", "$id");
		}
		$req = $this->db->get("employee");
        if(!empty($req)) {
            return $req; 
        }
        else{
            return 0;
        }
    }

    function deleteEmployee($a, $db){
        $this->db->where('id', $a);
        if($this->db->delete('employee')){
            return 1;
        }
        else{
            return 0;
        }
    }
	
	function isEmployeeHired($employeeId){
        $this->db->where("id", $employeeId);
		$req = $this->db->getOne("employee",'status');
        if(!empty($req)) {
			if( $req['status'] == 3 )
            return 1;
        }
        else{
            return 0;
        }
    }
	
	function hireEmployee($employeeId,$requestId){
		$this->db->where('id', $employeeId);
		 if($this->db->update('employee',array('status' => 3,'requestId' => $requestId))){
            return 1;
        }
        else{
            return 0;
        }
    }
	
	function isHiredEmployeeForRequest($requestId){
		$this->db->where('requestId', $requestId);
		$this->db->where('status', 3);
		if($this->db->getOne("employee")){
            return 1;
        }
        else{
            return 0;
        }
    }
	
	function checkAlreadyAssigned($employeeId, $requestId){
        $this->db->where("employeeId", $employeeId);
        $this->db->where("requestId", $requestId);
        if(!empty($this->db->getOne("assignedemployees"))) {
            return 1;
        }
        else{
            return 0;
        }
    }
	
	function assignEmployee($data){
        if($this->db->insert('assignedemployees', $data)){
            return 1;
        }
        else{
            return 0;
        }
    }
	
	function getAllAsignedEmployees($requestId)
	{
		$this->db->where("assignedemployees.requestId", $requestId);
		$this->db->join("employee e", "e.id=assignedemployees.employeeId", "INNER");
		$req = $this->db->get("assignedemployees",null,"e.id,e.fullname,e.status");
		//echo $this->db->getLastQuery();
        if(!empty($req)) {
            return $req; 
        }
        else{
            return 0;
        }
    }
	
    function changeEmployeeStatus($employeeId,$status){
		$this->db->where('id', $employeeId);
		 if($this->db->update('employee',array('status' => $status))){
            return 1;
        }
        else{
            return 0;
        }
    }
}

