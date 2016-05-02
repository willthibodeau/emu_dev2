<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: login/index.php                                                                            /
//   Description: Acts as the controller for the product page                                         /
//   Case List:                                                                                       /
//              list_categories                                                                       /
//              default                                                                               /
//                                                                                                    /
/////////////////////////////////////////////////////////////////////////////////////////////////////// 



session_start();
require('../model/database_db.php');
require('../model/product_db.php');
require('../model/category_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_categories';
    }
}  

switch ($action) {
    case 'list_categories':
    
        $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);    
        if ($category_id == NULL || $category_id == FALSE) { 
            $category_id = get_first_row();
        }
        $categories = get_categories();
        $category_name = get_category_name($category_id);
        $products = get_products_by_category($category_id);
        $get_images = get_images();
        include('product_list.php');
        break;
       
    default:
        $error = 'OOPS! Sorry, We have an error.';
        include'../errors/error.php';
        break;
}
?>