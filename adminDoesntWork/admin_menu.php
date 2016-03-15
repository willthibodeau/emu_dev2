<?php 

require_once('../util/valid_admin.php');

include'../view/header.php';
?>
<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
            <main>

                <a href="index.php?action=category_list">Category Manger</a><br>
                <a href="index.php?action=product_list">Product Manager</a><br>
                <a href="index.php?action=image_list">Image Manager</a><br>
                <a href="index.php?action=user_list">User Manager</a><br>
                <a href="index.php?action=comment_list">Comment Manager</a><br>
            </main>
        
        
<p>You are logged in as <?php echo $_SESSION['admin']; ?>.</p>
<p>Error is:<?php if(!empty($error)) { echo $error; } ?>
    <p>Message is : <?php if(!empty($message)) { echo $message; } ?>


         <form action="" method="post">
                <input type="hidden" name="action" value="logout">
                <input type="submit" value="Logout">
            </form>
    

</article><!-- end main article -->
        <!-- first sidebar goes here -->
        <aside class="sidebar1">
          <h2>Sidebar 1</h2>
              
        </aside><!-- end sidebar 1 -->
    </div><!-- end column wrapper -->

    <!-- second sidebar goes here -->
    <aside class="sidebar2">
        <h2>Sidebar 2 </h2>
        <p>comments / testimonials</p>
    </aside><!-- end sidebar 2 -->
</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>