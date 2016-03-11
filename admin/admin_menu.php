<?php 


require_once('../util/valid_admin.php');

include'../view/header.php';
?>
<p>You are logged in as <?php echo $_SESSION['admin']; ?>.</p>

 <form action="" method="post">
        <input type="hidden" name="action" value="logout">
        <input type="submit" value="Logout">
    </form>

    <?php if(!empty($error)) { echo $error; } ?>
    <p>Message is : <?php if(!empty($message)) { echo $message; } ?>