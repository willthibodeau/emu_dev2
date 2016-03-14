<?php 


require_once('../util/valid_member.php');

include'../view/header.php';
?>
<h2>Member List</h2>
<p>You are logged in as <?php echo $_SESSION['member']; ?>.</p>

<a href="category_list.php">category list</a>
 <form action="" method="post">
        <input type="hidden" name="action" value="logout">
        <input type="submit" value="Logout">
    </form>

    