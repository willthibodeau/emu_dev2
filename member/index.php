<?php 
require('../model/database_db.php');
require('../model/member_db.php');
require('../model/admin_db.php');



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
		
	    $comments = get_comments();
	    $message = "You are logged in as " . $_SESSION['member'];
		include'member_menu.php';
		break;

	case'admin_menu':
		$comment_id = filter_input(INPUT_GET, 'comment_id', FILTER_VALIDATE_INT);    
	    if ($comment_id == NULL || $comment_id == FALSE) {
	        $comment_id = 1;
	    }
	    $comments = get_comments();
	    $message = "You are logged in as " . $_SESSION['admin'];
		header('Location: /member/member_menu.php');
		break;

	case'add_comment':
		$userid = 1;
		$category_name = get_member_name($userid);
		$com_userid = filter_input(INPUT_GET, 'com_userid');;
		$comment_text = filter_input(INPUT_GET, 'comment_text');
      
		add_comments($com_userid, $comment_text);
		//include('member_menu.php');
		header('Location:  member_menu.php');
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