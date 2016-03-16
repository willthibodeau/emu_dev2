<?php 
require_once('../util/valid_member.php');

include'../view/header.php';
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
            <main>
				<h2>Welcome <?php echo $_SESSION['member']; ?></h2>
				.</p>
<?php echo $message; ?>
				<p>What would you like to comment about?</p>

				<h3>View comments:</h3>
				<?php foreach($comments as $comment) : ?>

				<?php echo $comment['com_commentText']; ?>
				<?php echo $comment['com_userID']; ?>
			<?php endforeach; ?>

				<form action="" method="post">
			        <input type="hidden" name="action" value="logout">
			        <input type="submit" value="Logout">
				</form>

				<a href=".?action=add_comment_form">Add Comments</a>
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