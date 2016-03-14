<?php 
require('../model/database_db.php');
require('../model/product_db.php');
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
		$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
	    if ($category_id == NULL || $category_id == FALSE) {
	    	$category_id = 1;
	    }
	    $categories = get_categories();
	    $category_name = get_category_name($category_id);
	    $products = get_products_by_category($category_id);
    	include('category_list.php');
		break;

	case'delete_category':
		$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
		delete_category($category_id);
		header('Location: .?action=category_list');
		break;

	case'add_category':
		$name = filter_input(INPUT_POST,'name');
		
		if($name == NULL){
			$error = 'Name cannot be empty. Please insert a name.';
			header('Location: .?action=category_list');
		} else {
			
			$detectName = detect_category_name($name);
			header('Location: .?action=category_list');
		}
		break;
	case'product_list':
		$category_id = filter_input(INPUT_GET, 'category_id', 
		            FILTER_VALIDATE_INT);
	    $product_id = filter_input(INPUT_POST, 'product_id', 
	        FILTER_VALIDATE_INT);
	    if ($category_id == NULL || $category_id == FALSE) {
	        $category_id = 1;
	    }
	    if ($product_id == NULl || $product_id == FALSE) {
	        $product_id = 1;
	    }

	    $category_name = get_category_name($category_id);
	    $categories = get_categories();
	    $categories = get_categories();
	    $products = get_products_by_category($category_id);
	    $imagepaths = get_imagepath($product_id);
    	include('product_list.php');
		break;

	case'delete_product':
		$product_id = filter_input(INPUT_POST, 'product_id', 
            FILTER_VALIDATE_INT);
	    $category_id = filter_input(INPUT_POST, 'category_id', 
	            FILTER_VALIDATE_INT);
	     if ($category_id == NULL || $category_id == FALSE ||
	             $product_id == NULL || $product_id == FALSE) {
	         $error = "Missing or incorrect product id or category id.";
	         
	     } else { 
	        delete_product($product_id);
	        header("Location: .?category_id=$category_id");
	     }
	    break;

    case'add_product':
    	$category_id = filter_input(INPUT_POST, 'cat_categoryID', 
            FILTER_VALIDATE_INT);
	    $code = filter_input(INPUT_POST, 'code');
	    $name = filter_input(INPUT_POST, 'name');
	    $description = filter_input(INPUT_POST, 'description');
	    $price = filter_input(INPUT_POST, 'price');
	    $image = filter_input(INPUT_POST, 'imagePath');
	    $imageAlt = filter_input(INPUT_POST, 'altText');
	    if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
	            $name == NULL || $price == NULL || $price == FALSE) {
	        $error = "Invalid product data. Check all fields and try again.";
	        $categories = get_categories();
	        include('product_add.php');
	   	} else { 
	       $message = "you have successfully entered". $name;
	        add_product($category_id, $code, $name, $description, $price);
	        header('Location: .?action=show_add_form');
	        
	    }
	    break;
	case'show_add_form':
		$imagepaths = get_imagepath();
	    $categories = get_categories();
	    include('product_add.php'); 
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
		echo 'Unknown admin action: ' . $action;	
		break;
}

?>