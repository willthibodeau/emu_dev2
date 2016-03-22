<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY cat_categoryID';          
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;     
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE cat_categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['cat_categoryName'];
    return $category_name;
}

function add_category($name){
	global $db;
	$query = 'INSERT INTO categories
                 (cat_categoryID, cat_categoryName)
              VALUES
                 (null, :name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function delete_category($category_id) {
    global $db;
    $query = 'DELETE FROM categories 
              WHERE cat_categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();
}

  function detect_category_name($name){
  	global $db;
  	$query = "SELECT cat_categoryName FROM categories 
              WHERE cat_categoryName = '$name'"; 	
    $statement = $db->prepare($query);
  	$statement->execute();
	if($abc = $statement->fetch()){
     $error = "The Category Name you entered is already in the database, please try another name.";
	} else {
     add_category($name);        
	}
}

// update category not working
function update_category($category_id, $category_name) {
    global $db;
    
    $query = 'UPDATE categories SET cat_categoryName = :category_name WHERE cat_categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $category_name);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();
}


?>