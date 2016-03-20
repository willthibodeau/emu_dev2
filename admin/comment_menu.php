<?php 
require_once('../util/valid_admin.php');

include'../view/admin_header.php';
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
            <main>
				<h2>Welcome <?php echo $_SESSION['admin']; ?></h2>
				<h3>View comments:</h3>
				<table>
					<tr>
						<th>Comment </th>
						<th>&nbsp;</th>
						
					</tr>

						<?php foreach($comments as $comment) : ?>
					<tr>
						<td><?php echo $comment['com_commentText']; ?><?php echo $comment['com_commentID']; ?></td>
						
						<td> 
		 					<form action="" method="post">
                                <input type="hidden" name="action" value="delete_comment" />
                                <input type="hidden" name="comment_id" value="<?php echo $comment['com_commentID']; ?>"/>
                                <input type="submit" value="Delete"/>
                           </form>
						</td>
					</tr>
						<?php endforeach; ?>
				</table>
				<a href=".?action=add_comment_form">Add Comments</a>
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