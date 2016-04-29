<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: product_db.php                                                                             /
//   Description: Provides functions for use by products                                              /
//   Function List:                                                                                   /
//            get_products_by_category($category_id)                                                  /
//            delete_product($product_id)                                                             /
//            add_product($category_id, $code, $name, $description,  $price,  $imagePath, $imagealt)  /
//            get_imagepath()                                                                         /
//            get_images()                                                                            /
//                                                                                                    /
/////////////////////////////////////////////////////////////////////////////////////////////////////// 

// gets products by category id
function get_products_by_category($category_id) {
  global $db;
  $query = 
  ' SELECT * FROM products
    WHERE prod_categoryID = :category_id
    ORDER BY prod_productID';
  $statement = $db->prepare($query);
  $statement->bindValue(":category_id", $category_id);
  $statement->execute();
  $products = $statement->fetchAll();
  $statement->closeCursor();
  return $products;
}

// deletes a product from the database
function delete_product($product_id) {
  global $db;
  $query = 
  ' DELETE FROM products
    WHERE prod_productID = :product_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':product_id', $product_id);
  $statement->execute();
  $statement->closeCursor();
}

// adds a product to the database
function add_product($category_id, $code, $name, $description,  $price,  $imagePath, $imagealt) {
  global $db;
  $query = 
  ' INSERT INTO products
      (prod_productID, prod_categoryID, prod_prodCode, prod_productQuantity, prod_description, prod_price, imagepath,  imagealt)
    VALUES
      (NULL, :category_id, :code, :name,:description, :price, :imagepath, :imagealt)';
  $statement = $db->prepare($query);
  $statement->bindValue(':category_id', $category_id);
  $statement->bindValue(':code', $code);
  $statement->bindValue(':name', $name);
  $statement->bindValue(':description', $description);
  $statement->bindValue(':price', $price);
  $statement->bindValue(':imagepath', $imagePath);
  $statement->bindValue(':imagealt', $imagealt);
  $statement->execute();
  $statement->closeCursor();
}

// gets the image path
function get_imagepath() {
  global $db;
  $query = 
  ' SELECT * FROM products 
    ORDER BY imagepath';
  $statement = $db->prepare($query);
  $statement->execute();
  $imagepaths = $statement->fetchAll();
  $statement->closeCursor();
  return $imagepaths;
}

// gets the images
function get_images(){
  global $db;
  $path = '../imageProcess/images/';
  $items = scandir($path);
  $files = array();
  foreach ($items as $item) {
    $item_path[] = $path .  $item;
  }
  return $item_path;
}
?>