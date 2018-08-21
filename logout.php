<?php
include_once './server/libs/mysqli/MysqliDb.php';
include_once './server/classes.php';

/*
 * Create global database object
 */
try{
    //Create the database object
    //$db = new MysqliDb ('localhost', 'root', '', 'demo_nanalandia');
    $db = new MysqliDb ('localhost', 'root', 'ppsdo786123', 'nanalandia');

}catch (Exception $e){
    //If any exception occurs, print error message
    $arr['msg'] = $e->getMessage();
    $arr['status'] = 0;
    echo json_encode($arr);
}
$user = new Users($db);
if($user->logout())
{
	header('Location: '.$user->root);
}

?>
