<?php 
require('../model/database_db.php');
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


switch($action) {
	case'member_menu':
		$comment_id = filter_input(INPUT_GET, 'comment_id', FILTER_VALIDATE_INT);    
	    if ($comment_id == NULL || $comment_id == FALSE) {
	        $comment_id = 1;
	    }
	    $comments = get_comments();
	    $message = "You are logged in as " . $_SESSION['member'];
		include'member_menu.php';
		break;
	case'add_comments':

		break;
	case'add_comment_form':

		$message = "You are logged in as " . $_SESSION['member'];
		include('add_comments.php');
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