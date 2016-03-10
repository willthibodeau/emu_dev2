<?php

 require('../model/database.php');
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
		} 

		  else if (is_valid_member_login($username, $password)) {
		  	$_SESSION['member'] = $username;
		  	$message = 'Welcome' .  $username;
		  	include('/member/index.php');
		  } 

		// else if (is_valid_admin_login($username, $password)){
		// 	$_SESSION['admin'] = $username;
		// 	$message = 'Welcome' . $username;
		// 	include('/admin/index.php');
		// } 

		else {
			include('login.php');
		}


	// case 'member_menu':
	//  	include '/member/index.php';
	//  	break;
	// case 'admin_menu':
	//  	include '/admin/index.php';
	//  	break;
	// case 'register':
	//  	include 'register.php';
	//  	break;
	default:
		echo 'Unknown action: ' . $action;
		print_r($error);
		print_r($message);
	break;
}
?>

