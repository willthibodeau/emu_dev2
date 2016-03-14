<?php
function is_valid_admin_login($username, $password) {
    global $db;
    $password = sha1($username . $password);
    $query = '
        SELECT * FROM users
        WHERE users_username = :username AND users_password = :password AND users_userLevel = "a"';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    if ($statement->rowCount() == 1) {
        $valid = true;
    } else {
        $valid = false;
    }
    $statement->closeCursor();
    return $valid;
    
}

function is_valid_member_login($userName, $password) {
    global $db;
    $password = sha1($userName . $password);
    $query = '
        SELECT * FROM users
        WHERE users_username = :username AND users_password = :password and users_userLevel = "m"';
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

// function get_username($username) {
//     global $db;
//     $query = 'SELECT  FROM users WHERE users_username = :username';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':username', $username);
//     $statement->execute();
//     if ($statement->rowCount() == 1) {
//         $valid = true;
//     } else {
//         $valid = false;
//     }
//     $statement->closeCursor();
//     return $valid;
// }

function get_users($userName) {
    global $db;
    $query = 'SELECT COUNT(*) FROM users WHERE users_username = :username';
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
?>