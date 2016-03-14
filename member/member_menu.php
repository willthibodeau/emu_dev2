<?php 


require_once('../util/valid_member.php');

include'../view/header.php';
?>
<h2>Member Menu</h2>
<p>You are logged in as <?php echo $_SESSION['member']; ?>.</p>
<h2>Comments </h2>
<p>Add or edit comments</p>

 <form action="" method="post">
        <input type="hidden" name="action" value="logout">
        <input type="submit" value="Logout">
    </form>

    <?php if(!empty($error)) { echo $error; } ?>
    <p>Message is : <?php if(!empty($message)) { echo $message; } ?>