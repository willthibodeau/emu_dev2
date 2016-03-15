<?php
function get_products_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE prod_categoryID = :category_id
              ORDER BY prod_productID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE prod_productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products
              WHERE prod_productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($category_id, $code, $name, $description,  $price, $imagealt) {
    global $db;
    $query = 'INSERT INTO products
                 (prod_productID, prod_categoryID, prod_prodCode, prod_productName, prod_description, prod_price, imagealt)
              VALUES
                 (NULL, :category_id, :code, :name,:description, :price, :imagealt)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':imagealt', $imagealt);
    $statement->execute();
    $statement->closeCursor();
}

function get_imagepath() {
    global $db;
    $query = 'SELECT * FROM products order by imagepath
              ';
    $statement = $db->prepare($query);
    $statement->execute();
    $imagepaths = $statement->fetchAll();
    $statement->closeCursor();
    return $imagepaths;
}

function get_images(){
global $db;
  $path = 'emu_dev2/imageProcess/images/';
  $items = scandir($path);
  $files = array();
  foreach ($items as $item) {
    $item_path = $path . DIRECTORY_SEPARATOR . $item;
    if(if_file($item_path)){
        $files[] = $item;
    }
  }
  echo "<p>Files in $path</p>";
  echo '<ul>';
  foreach ($files as $file) {
    echo '<li>' . $file . '</li>';
  }
  echo '</ul>';
}
?>