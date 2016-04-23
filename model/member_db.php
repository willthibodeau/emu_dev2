<?php
function add_member(  $userName,  $firstName , $lastName, $password, $email, $phone, $userlevel) {
    global $db;
    $password = sha1($userName . $password);
    $query = 
    '   INSERT INTO users
            (users_userID, users_username, users_firstName, users_lastName, users_password, users_email, users_phone, users_userLevel )
        VALUES
            (NULL, :users_username, :users_firstName, :users_lastName,  :users_password, :users_email, :users_phone, :users_userLevel )';
    $statement = $db->prepare($query);
    $statement->bindValue(':users_username', $userName);
    $statement->bindValue(':users_firstName', $firstName);
    $statement->bindValue(':users_lastName', $lastName);
    $statement->bindValue(':users_password', $password);
    $statement->bindValue(':users_email', $email);
    $statement->bindValue(':users_phone', $phone);
    $statement->bindValue(':users_userLevel', $userlevel);  
    $statement->execute();
    $statement->closeCursor();
}

// check for existing member name
function detect_member_name($name){
	global $db;
	$query = 
    "   SELECT users_username 
        FROM users 
        WHERE users_username = '$name'";
	$stmt = $db->prepare($query);
	$stmt->execute();
		if($data == $stmt->fetch()){
			$error_message = "The username you entered is already in the database, please try another name.";
            include 'register.php';
		} else {
			return false;
		}
}

function get_comments($member_id) {
   
    global $db;
    $query = 'SELECT * FROM comments
              WHERE com_userID = :member_id';          
    $statement = $db->prepare($query);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    return $statement;    
}

function add_comments($com_userid, $comment_text) {
    global $db;
    $query = 
    '   INSERT INTO comments
            (com_commentID, com_userID, com_commentText)
        VALUES
            (NULL, :com_userid, :com_commentText)';
    $statement = $db->prepare($query);
    $statement->bindValue(':com_userid', $com_userid);
    $statement->bindValue(':com_commentText', $comment_text);
    $statement->execute();
    $statement->closeCursor();
}

function add_to_cart($orders_userid, $orders_categoryid, $orders_quantity) {
    global $db;
    $query = 
    '   INSERT INTO orders
            (orders_orderID, orders_userID, orders_categoryID, orders_quantity)
        VALUES
            (NULL, :orders_userid, :orders_categoryid, :orders_quantity)';
    $statement = $db->prepare($query);
    $statement->bindValue(':orders_userid', $orders_userid);
    $statement->bindValue(':orders_categoryid', $orders_categoryid);
    $statement->bindValue(':orders_quantity', $orders_quantity);
    $statement->execute();
    $statement->closeCursor();

}

function get_cart($user_id) {
    global $db;

    $query = 
    '   SELECT categories.cat_categoryName, categories.cat_price, categories.cat_discount, orders.orders_quantity, orders.orders_orderID
        FROM categories
        INNER JOIN orders
        ON categories.cat_categoryID=orders.orders_categoryID
        WHERE orders.orders_userID = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $carts = $statement->fetchAll();
    $statement->closeCursor();
    return $carts;
   
}

function delete_order($orderid) {
    global $db;
    $query =
    '   DELETE FROM    orders
        WHERE orders_orderID = :orders_orderID';
        $statement = $db->prepare($query);
        $statement->bindValue(':orders_orderID', $orderid);
        $statement->execute();
        $statement->closeCursor();
}


?>
