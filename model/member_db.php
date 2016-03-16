<?php
function add_registration($customer_id, $product_code) {
    global $db;
    $date = date('Y-m-d');  // get current date in yyyy-mm-dd format
    $query = 'INSERT INTO registrations VALUES
              (:customer_id, :product_code, :date)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':customer_id', $customer_id);
        $statement->bindValue(':product_code', $product_code);
        $statement->bindValue(':date', $date);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $id = $db->lastInsertId();
        return $id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_member(  $userName,  $firstName , $lastName, $password, $email, $phone, $userlevel) {
    global $db;
    $password = sha1($userName . $password);
    $query = 'INSERT INTO users
                 (users_userID, users_username, users_firstName, users_lastName, users_password, users_email, users_phone, users_userLevel )
              VALUES
                 (NULL, :users_username, :users_firstName, :users_lastName,  :users_password, :users_email, :users_phone, :users_userLevel )';
    $statement = $db->prepare($query);
    // $statement->bindValue(':users_userID', $userid);
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

function get_hashed_password($username){
    $query = 'SELECT users_password from users where users_username = $username';
    $statement = $db->prepare($query);
    $statement->execute();
    $hashedPassword = $statement->fetch();
    $statement->closeCursor();
    return $hashedPassword;
}

// check for existing room name
function detect_member_name($name){
	global $db;
	$sql = "Select users_username from users where users_username = '$name'";
	$stmt = $db->prepare($sql);
	$stmt->execute();
		if($data = $stmt->fetch()){
			$error_message = "The username you entered is already in the database, please try another name.";
            include 'register.php';
		} else {
			return false;
		}
}

function get_comments() {
    global $db;
    $query = 'SELECT * FROM comments
              ORDER BY com_commentID';          
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}
?>