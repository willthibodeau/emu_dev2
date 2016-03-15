<?php 
require_once('../util/valid_admin.php');

include'../view/header.php';
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
            <main>
				<h2>Administrator Login is Successful!</h2>
				<p>You are logged in as <?php echo $_SESSION['admin']; ?>.</p>

				<p>Go to the Administrators Management <a href="../admin/index.php">Page</a></p>
				<form action="" method="post">
			        <input type="hidden" name="action" value="logout">
			        <input type="submit" value="Logout">
				</form>
			</main>
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
  