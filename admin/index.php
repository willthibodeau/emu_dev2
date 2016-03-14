<?php 
require('../model/category_db.php');


session_start();
$action = filter_input(INPUT_POST, 'action');
if($action === NULL) {
	$action = filter_input(INPUT_GET, 'action');
	if($action === NULL) {
		if(isset($_SESSION['admin'])){
			$action = 'admin_menu';
		}else if (isset($_SESSION['member'])){
			$action = '../../index.php';
		}else{
			$action = 'view_login';
		}
	}
}


switch($action) {
	case'admin_menu':

		include'admin_menu.php';
		break;
	case'category_list':
		$category_id = filter_input(INPUT_GET, 'category_id', 
		            FILTER_VALIDATE_INT);
		    if ($category_id == NULL || $category_id == FALSE) {
		        $category_id = 1;
		    }
		$categories = get_categories();
		 
	    include('category_list.php');
		break;
	case'product_list':

		break;
	case'image_list':
		break;
	case'user_list':
		break;
	case'comment_list':
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