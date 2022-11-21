<?php
session_start();
include "./function.php";


$_SESSION['error'] = null;

if ($_SERVER['REQUEST_METHOD'] != "POST" || empty($_POST)) // check if the form was submitted using POST method and is not empty
    die("You are a bad guy and you are trying to access this code directly!");


$user = isset($_POST['name']) ? $_POST['name'] : null;
$pass = isset($_POST['pass']) ? $_POST['pass'] : null;
    
$error = false;
$error_msgg = '';

if (!empty($user) && !empty($pass) ){
$new_id_user = create_user($user ,  $pass);

    if($new_id_user){

        $one_user =  get_one_user($new_id_user);
        if (empty($one_user)) {
        $error = true;
        $error_msg = 'User is not existed';}
    }

}else {
    $error = true;
    $error_msg = 'You need to enter all the information';
}



if ($error) {
    $_SESSION['error'] = $error_msg;
    header("Location: ./registeruser.php");
} else {
    $_SESSION['user'] = array(
        'name' => $one_user['name'],
        'is_admin' => $one_user['is_admin'],
        'id' => $one_user['id']
       
    );
  
    header("Location: ./home.php");
    

}