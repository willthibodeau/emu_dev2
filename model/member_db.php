<?php
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

function get_comments($member_id) {
   
    global $db;
    $query = 'SELECT * FROM comments
              WHERE com_userID = :member_id';          
    $statement = $db->prepare($query);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    return $statement;    
}

function get_user_comments($user_id) {
    global $db;
    $query = 'SELECT * FROM comments WHERE com_userID = 20 ';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function add_comments($com_userid, $comment_text) {
    global $db;

   
    $query = 'INSERT INTO comments
                (com_commentID, com_userID, com_commentText)
                VALUES
                (NULL, :com_userid, :com_commentText)';
$statement = $db->prepare($query);
$statement->bindValue(':com_userid', $com_userid);
$statement->bindValue(':com_commentText', $comment_text);
$statement->execute();
$statement->closeCursor();

}

function get_member_name($userName) {
    global $db;
    $query = 'SELECT * FROM users
              WHERE users_userName = :users_username';    
    $statement = $db->prepare($query);
    $statement->bindValue(':users_username', $userName);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['users_username'];
    return $category_name;
}
?>
