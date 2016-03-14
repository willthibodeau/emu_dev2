<?php 
require('../model/database_db.php');
require('../model/product_db.php');
require('../model/category_db.php');


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

		include'member_menu.php';
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