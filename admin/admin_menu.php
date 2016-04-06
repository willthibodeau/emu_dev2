<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';

?>
<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">     
            <p>You are logged in as  an admin<?php echo $_SESSION['admin']; ?>.</p>
            <p>Error is:<?php if(!empty($error)) { echo $error; } ?>
            <p>Message is : <?php if(!empty($message)) { echo $message; } ?>
            <form action="" method="post">
                <input type="hidden" name="action" value="logout">
                <input type="submit" value="Logout">
            </form>
        </article><!-- end main article -->

        <!-- first sidebar goes here -->
        <aside class="sidebar1">
          <?php include '../view/admin_sidebar1.php'; ?>   
        </aside><!-- end sidebar 1 -->
    </div><!-- end column wrapper -->

    <!-- second sidebar goes here -->
    <aside class="sidebar2">
        <h2>Google Ads</h2>
    </aside><!-- end sidebar 2 -->
</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>