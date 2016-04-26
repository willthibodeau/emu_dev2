<?php 
session_start();
require('../model/database_db.php');
require('../model/member_db.php');
require('../model/admin_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'member_menu';
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
	    $comments = get_comments($member_id);
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

	case'view_cart':
		$orders_orderNumber = 8;
		$orders_userid = $_SESSION['member_id'];
		$carts = get_cart($orders_userid);

		$sum = 0;
		$total = 0;
		foreach ($carts as $cart ){
			$sum = ($cart[3] * ($cart[1] - ($cart[1] * $cart[2])));
			$total += $sum;
		}

		$categories = get_categories();
		include('cart.php');
		break;
	case'add_order':
		$orders_userid = $_SESSION['member_id'];
		$orders_categoryid = filter_input(INPUT_POST, 'category_id');
		$orders_quantity = filter_input(INPUT_POST, 'quantity');
		$orders_orderNumber = 8;
		add_to_cart($orders_userid, $orders_categoryid, $orders_quantity);
		
		$carts = get_cart($orders_userid);
		header("Location: .?action=view_cart");
		break;

	case'delete_order':
		$orderid = filter_input(INPUT_POST, 'orders_orderID', FILTER_VALIDATE_INT);
		delete_order($orderid);
		header('Location: .?action=view_cart');
		break;

	case 'logout':
        unset($_SESSION['member']);
        header('Location: ../index.php');
        break;

	default:
		$error =  'Unknown member action: ' . $action;
		include'../errors/error.php';	
		break;
}

?>