<?php
/////////////////////////////////////////////////////////////////////
//                                                                  /
//   Author: Will Thibodeau                                         /
//   Project: Elitemeatsutah.com                                    /
//   Final Project WEB 289 2016SP                                   /
//   Date: April 28, 2016                                           /
//   File: admin_db.php                                             /
//   Description: Provides functions for use by the administrator   /    
//   Function List:                                                 /
//          is_valid_admin_login($username, $password)              /
//          is_valid_member_login($userName, $password)             /
//          get_users($userName)                                    /
//          get_comment()                                           /
//          delete_comments($comment_id)                            /
//          get_user_info($userName)                                /
//          comment_data()                                          /
//                                                                  /
///////////////////////////////////////////////////////////////////// 

// checks for valid admin at login
function is_valid_admin_login($username, $password) {
    global $db;
    $password = sha1($username . $password);
    $query = 
    '   SELECT * FROM users
        WHERE users_username = :username 
        AND users_password = :password 
        AND users_userLevel = "a"';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    if ($statement->rowCount() == 1) {
        $valid = 1;
    } else {
        $valid = 0;
    }
    $statement->closeCursor();
    return $valid; 
}

// checks for valid member at login
function is_valid_member_login($userName, $password) {
    global $db;
    $password = sha1($userName . $password);
    $query = 
    '   SELECT * FROM users
        WHERE users_username = :username 
        AND users_password = :password 
        AND users_userLevel = "m"';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $userName);
    $statement->bindValue(':password', $password);
    $statement->execute();
    if ($statement->rowCount() == 1) {
        $valid = 1;
    } else {
        $valid = 0;
    }
    $statement->closeCursor();
    return $valid; 
}

// checks for username at registration
function get_users($userName) {
    global $db;
    $query = 
    '   SELECT COUNT(*) FROM users 
        WHERE users_username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $userName);
    $statement->execute();
    $admin = $statement->fetch();
    $user_count = $admin[0];
    $statement->closeCursor();
    if ($user_count > 0 ) {
        return true;
    } else {
        return false;
    }
}

// gets the comments at various times
function get_comment() {
    global $db;
    $query = 
    '   SELECT * FROM comments';          
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

// deletes the comments
function delete_comments($comment_id) {
    global $db;
    $query = 
    '       DELETE  FROM comments 
            WHERE com_commentID = :comment_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':comment_id', $comment_id);
    $statement->execute();
    $statement->closeCursor();
}

// gets user information for superglobals
function get_user_info($userName){
    global $db;
    $query = 
    '   SELECT * FROM users 
        WHERE users_username = :users_username';
    $statement = $db->prepare($query);
    $statement->bindValue(':users_username', $userName);
    $statement->execute();    
    $users_firstName = $statement->fetchAll();
    $statement->closeCursor();    
    return $users_firstName;
}

// gets the comment data
function comment_data() {
    global $db;
    $query = 
    '   SELECT  users.users_firstName, 
                comments.com_commentText, 
                comments.com_commentID 
        FROM users 
        INNER JOIN comments 
        ON users.users_userID = comments.com_userID 
        ORDER BY users.users_userID ';
    $statement = $db->prepare($query);
    $statement->execute();
    $data = $statement->fetchAll();
    $statement->closeCursor();
    return $data;
}

?>