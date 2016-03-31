<?php 
session_start();

require('../model/database_db.php');
require('../model/member_db.php');
require('../model/admin_db.php');




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
	$members = $_SESSION['member'];
	
	if(!empty($members)) {
		foreach($members as $member) {
			$firstName = $member['users_firstName'];
			$member_id = $member['users_userID'];
		}
	}
	
// get the comments from the userid
switch($action) {
	case'member_menu':
	// print_r($member_id);
	    $comments = get_comments($member_id);

	    $datetime = date('d.m.y h:i:s');;
		include'member_menu.php';
		break;

	case'admin_menu':
		$comment_id = filter_input(INPUT_GET, 'comment_id', FILTER_VALIDATE_INT);    
	    if ($comment_id == NULL || $comment_id == FALSE) {
	        $comment_id = 1;
	    }
	    $comments = get_comments();
	    $message = "You are logged in as " . $_SESSION['admin'];
		header('Location: member_menu.php');
		break;

	case'add_comment':
		$comment_text = filter_input(INPUT_POST, 'comment_text');
		if($comment_text == NULl || $comment_text == FALSE) {
			$error = "Please enter a review.";
			include'../errors/error.php';
		} else {
			add_comments($member_id, $comment_text);
		}
		
		header('Location: .?action=member_menu');
	    break;

	case'delete_comment':
		$comment_id = filter_input(INPUT_POST, 'comment_id', FILTER_VALIDATE_INT);
		delete_comments($comment_id);
		header('Location: .?action=member_menu');
	    break;

	case 'logout':
        unset($_SESSION['admin']);
        unset($_SESSION['member']);
        header('Location: ..' );
        break;

	default:
		$error =  'Unknown member action: ' . $action;
		include'../errors/error.php';	
		break;
}

?>