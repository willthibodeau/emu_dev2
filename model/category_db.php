<?php
//////////////////////////////////////////////////////////////////////
//                                                                   /
//   Author: Will Thibodeau                                          /
//   Project: Elitemeatsutah.com                                     /
//   Final Project WEB 289 2016SP                                    /
//   Date: April 28, 2016                                            /
//   File: category_db.php                                           /
//   Description: Provides functions for categories                  /
//   Function List:                                                  /
//          get_categories()                                         /
//          get_category_name($category_id)                          /
//          add_category($name, $price, $discount)                   /
//          delete_category($category_id)                            /
//          detect_category_name($name)                              /
//          get_first_row()                                          /
//                                                                   /
////////////////////////////////////////////////////////////////////// 

// gets the categories
function get_categories() {
    global $db;
    $query = 
    ' SELECT * FROM categories
      ORDER BY cat_categoryID';          
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;     
}

// returns the category name
function get_category_name($category_id) {
    global $db;
    $query = 
    ' SELECT * FROM categories
      WHERE cat_categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['cat_categoryName'];
    return $category_name;
}

// adds a category to the categories table
function add_category($name, $price, $discount){
	global $db;
	$query = 
  ' INSERT INTO categories
      (cat_categoryID, cat_categoryName, cat_price, cat_discount)
    VALUES
      (null, :name, :cat_price, :cat_discount)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':cat_price', $price);
    $statement->bindValue(':cat_discount', $discount);
    $statement->execute();
    $statement->closeCursor();
}

// deletes categories from the categories table
function delete_category($category_id) {
    global $db;
    $query = 
    ' DELETE FROM categories 
      WHERE cat_categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();
}

// checks to see if a category is already listed
function detect_category_name($name){
  	global $db;
  	$query = 
    ' SELECT cat_categoryName 
      FROM categories 
      WHERE cat_categoryName = :name'; 	
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
  	$statement->execute();
    $testValue = $statement->fetch();
    $statement->closeCursor();
    return $testValue;
}

// used when the category id of 1 is not the first row
function get_first_row(){
  global $db;
  $query = 
  ' SELECT cat_categoryID
    FROM categories
    LIMIT 1';
  $statement = $db->prepare($query);
  $statement->execute();
  $categories = $statement->fetchAll();
  $statement->closeCursor();
  foreach($categories as $category){ 
  return $category['cat_categoryID'];
  }
}

?>