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
		$userName = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');
		$member_user = is_valid_member_login($userName, $password);
		$admin_user = is_valid_admin_login($userName, $password);
		
		 
		if ($username == NULL || $userName == FALSE) {
		  	$error = 'Please enter a valid username';
		  	include('login.php');

		} else if ($password == NULL || $password == FALSE) {
		  	$error = 'Please enter a valid password';
		  	include('login.php');

		} else if ($member_user == 1) {
             $_SESSION['member'] = $userName;
             $message = 'Welcome ' . $userName;
          include('success.php');

		} 

		 else if ($admin_user == 1) {
		  	$_SESSION['admin'] = $userName;
		  	$message = 'Welcome ' . $userName;
		  	include('admin_success.php');
		  	// header('Location: ../admin/index.php');

		 } 
		else {
			
		 	$error = 'Invalid username or password';
		 	include('login.php');
		} 

	 	break;
	case 'member_menu':
		
	  	include '../member/index.php';
	  	break;
	case 'admin_menu':
	 	
	  	include '../admin/index.php';
	  	break;
	case 'register_form':
	  	include 'register.php';
	  	break;
	case 'register':
		$password_regex_patern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/';
		$email_regex_pattern = '/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/';
		$userName = filter_input(INPUT_POST, 'userName');
		$firstName = filter_input(INPUT_POST, 'firstName');	
		$lastName = filter_input(INPUT_POST, 'lastName');
		$password = filter_input(INPUT_POST, 'password');
		$password2 = filter_input(INPUT_POST, 'password2');
		$email = filter_input(INPUT_POST, 'email');
		$phone = filter_input(INPUT_POST, 'phone');
		$userlevel = "m";
		$getUsers = get_users($userName);

		if ($userName == NULL || $userName == FALSE) {
		 	$error = "please enter a Username";
		 	include'register.php';
		 } 

		else if($getUsers > 0  ) {
			print_r($getUsers);
			print_r($userName);
			$error = 'Please choose another Username.';
			include'register.php';
		}

		 else if($firstName == NULL || $firstName == FALSE) {
		 	$error = 'Please enter a First Name';
		 	include'register.php';
		 }

		 else if($lastName == NULl || $lastName == FALSE) {
		 	$error = 'Please enter a Last Name';
		 	include'register.php';
		 }

		 else if($password == NULL || $password == FALSE) {
		 	$error = 'Please enter a password';
		 	include'register.php';
		 }

		 else if($password != $password2) {
			$error = 'Passwords do not match';
		 	include'register.php';
		 }
		 else if(!preg_match( $password_regex_patern, $password )) {
             $error = "Please enter a password within the given parameters";
             include'register.php';
             print_r($email);
         }

         else if (!preg_match( $email_regex_pattern, $email )) {
         	print_r($email);
         	$error = "Please enter a valid email address.";
         	include'register.php';
         }

		else {
			  
			include'success.php';
		}
		
		break;

		
	case 'logout':
        unset($_SESSION['admin']);
        unset($_SESSION['member']);
        header('Location: ..' );
        break;
	default:
		echo 'Unknown login action: ' . $action;	
		break;
}
?>

<!-- ^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$
Description 	
Email validator that adheres directly to the specification for email address naming. It allows for everything from ipaddress and country-code domains, to very rare characters in the username. -->