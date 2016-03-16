<?php 
require_once('../util/valid_member.php');

include'../view/header.php';
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
            <main>
				<h2>Welcome <?php echo $_SESSION['member']; ?> </h2>
				<p>to the add comments page</p>
				<?php echo $message; ?>
				<h1>Add Comment</h1>
		        <form action="." method="post">
		          <input type="hidden" name="action" value="add_comments">
		          <textarea  rows="5" cols="50" name="commentText"  value=""></textarea><br>
		          <input type="submit" value="Submit Comments">
		        </form>

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