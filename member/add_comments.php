<?php 
require_once('../util/valid_member.php');
include'../view/member_header.php';
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
            <main>
				<h2>Add Comments</h2>
		        <form action="." method="post">
		          	<input type="hidden" name="action" value="add_comments">
		          	<textarea  rows="5" cols="50" name="commentText"  value="" placeholder="Add Comments..."></textarea><br>
		          	<input type="submit" value="Submit Comments">
		        </form>	
			</main>
        </article><!-- end main article -->

          <!-- first sidebar goes here -->
	    <aside class="sidebar1">
	     
	    </aside><!-- end sidebar 1 -->
	</div><!-- end column wrapper -->

    <!-- second sidebar goes here -->
    <aside class="sidebar2">
        <h2>Google Ads</h2>
    </aside><!-- end sidebar 2 -->
</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>