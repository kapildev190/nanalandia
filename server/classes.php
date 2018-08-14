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
        $link = $_SERVER['HTTP_HOST'].'/verify.php?'.md5($email);
        return $link;
    }

    //Function to send email (checked)
    function sendEmail($email, $subject, $message){
        include_once 'libs/mail/class.phpmailer.php';
        error_reporting(E_STRICT);
        date_default_timezone_set('America/Toronto');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'mail.demoproject.eu.org'; //Mail Server Host
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@demoproject.eu.org'; //Email Username
        $mail->Password = 'password'; //Email Password
        $mail->SMTPSecure = 'ssl';
        $mail->setFrom('admin@demoproject.eu.org');//From
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

    function getRequestDetails($a, $db){
        $this->db->where("a", "$a");
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
		$req = $this->db->get("requests");
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

    function changeRequestStatus($a, $db){

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

    function getEmployeeDetails($a, $db){
        $this->db->where("a", "$a");
        if(!empty($this->db->getOne("employee"))) {
            return 1;
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

    function changeEmployeeStatus($a, $db){

    }
}