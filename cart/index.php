<?php
session_start();
require('../model/database_db.php');
require('../model/member_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'view_cart';
    }
} 
$_SESSION['cart'] = array();
switch ($action) {
	
	case'view_cart':
		
		$orders_userid = 1;
		$carts = get_cart($orders_userid);

		$sum = 0;
		$total = 0;
		foreach ($carts as $cart ){
			$sum = $cart[1] * $cart[3];
			$total += $sum;
		}

		$categories = get_categories();
		include('cart_view.php');
		break;
	case'add_order':
		$orders_userid = 1;
		$orders_categoryid = filter_input(INPUT_POST, 'category_id',FILTER_VALIDATE_INT);
		$orders_quantity = filter_input(INPUT_POST, 'quantity',FILTER_VALIDATE_INT);
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

	default:
		$error =  'Unknown login action: ' . $action;
		include'../errors/error.php';	
		break;

}