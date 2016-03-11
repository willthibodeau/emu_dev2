<?php

 require('../model/database_db.php');
 require('../model/admin_db.php');
 require('../model/member_db.php');

 

session_start();
$action = filter_input(INPUT_POST, 'action');
if($action === NULL) {
	$action = filter_input(INPUT_GET, 'action');
	if($action === NULL) {
		if(isset($_SESSION['member'])){
			$action = 'member_menu';
		}else if (isset($_SESSION['admin'])){
			$action = 'admin_menu';
		}else{
			$action = 'view_login';
		}
	}
}
$error = array();
$message = array();
switch($action){
	case 'view_login':
		include 'login.php';
		break;
	case 'login':
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');

		
		if ($username == NULL || $username == FALSE) {
		 	$error = 'Please enter a valid username';
		 	include('login.php');

		} else if ($password == NULL || $password == FALSE) {
		 	$error = 'Please enter a valid password';
		 	include('login.php');

		} else if (is_valid_member_login($username, $password)) {
            $_SESSION['member'] = $username;
            $message = 'Welcome ' . $username;
            include 'success.php';

		} else if (is_valid_admin_login($username, $password)){
		 	$_SESSION['admin'] = $username;
		 	$message = 'Welcome ' . $username;
		 	include('../admin/admin_menu.php');

		} else {
		 	$error = 'Invalid username or password';
		 	include('login.php');
		} 

	 	break;
	case 'member_menu':
	  	include '../member/index.php';
	  	break;
	case 'admin_menu':
	 	$message = 'Welcome admin ' . $username;
	  	include '../admin/admin_menu.php';
	  	break;
	case 'register_form':
	  	include 'register.php';
	  	break;
	case 'register':
		$regex_patern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/';
		$userName = filter_input(INPUT_POST, 'userName');
		$firstName = filter_input(INPUT_POST, 'firstName');	
		$lastName = filter_input(INPUT_POST, 'lastName');
		$password = filter_input(INPUT_POST, 'password');
		$password2 = filter_input(INPUT_POST, 'password2');
		$email = filter_input(INPUT_POST, 'email');
		$terms = filter_input(INPUT_POST, 'terms');
		$userlevel = "m";
	
		if(!preg_match( $regex_patern, $password)){
            $error = "Please enter a password within the given parameters";
            include'register.php';
        }
		else if ($userName == NULL || $userName == FALSE){
			$error = "please enter a Username";
			include'register.php';
		}

		else if($password == NULL || $password == FALSE){
			$error = 'Please enter a password';
			include'register.php';
		}

		else if($password != $password2) {
			$error = 'Passwords do not match';
			include'register.php';
		}

		else if($firstName == NULL || $firstName == FALSE) {
			$error = 'Please enter a First Name';
			include'register.php';
		}

		else if($lastName == NULl || $lastName == FALSE) {
			$error = 'Please enter a Last Name';
			include'register.php';

		}else if(get_username($username) == false){
			$error = 'Please choose another Username.';
			include'register.php';

		} else {
			include'success.php';
		}

		

		
		break;
	case 'logout':
        unset($_SESSION['admin']);
        unset($_SESSION['member']);
        header('Location: ..' );
        break;
	default:
		echo 'Unknown action: ' . $action;	
		break;
}
?>

