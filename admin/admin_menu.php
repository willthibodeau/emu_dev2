<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';

?>
<div class="main-content" class="formInput"> 
    

        <!-- main content goes here -->
            
            <p>You are logged in as  an admin<?php echo $_SESSION['admin']; ?>.</p>
            <p>Error is:<?php if(!empty($error)) { echo $error; } ?>
            <p>Message is : <?php if(!empty($message)) { echo $message; } ?>
            <form action="" method="post">
                <input type="hidden" name="action" value="logout">
                <input class="button" type="submit" value="Logout">
            </form>
       

        
</div><!-- end main content -->

<?php include'../view/footer.php'; ?>