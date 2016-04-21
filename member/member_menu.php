<?php 
require_once('../util/valid_member.php');
include'../view/member_header.php';
?>
<div class="main-content">
				<h2>Welcome <?php echo $_SESSION['member_firstName']; ?></h2>
				<div class="formInput">
				<table>
					<tr>	
						<th>
							View comments
						</th>
						<th>&nbsp;</th>
					</tr>
						<?php foreach($comments as $comment) : ?>
					<tr>
						<td>
							<?php echo $comment['com_commentText']; ?>
						</td>
						<td>
							<form action="" method="post">
                                <input type="hidden" name="action" value="delete_comment" />
                                <input type="hidden" name="comment_id" value="<?php echo $comment['com_commentID']; ?>">
                                <input class="button-delete" type="submit" value="Delete">
                           </form>
	                    </td>
	                </tr>
						<?php endforeach; ?>
				</table>
			</main>
				<?php if(!empty($message)){ echo $message;} ?>
	       	<h2>Add Comments</h2>		
		        <form action="." method="post">
			        <input type="hidden" name="action" value="add_comment">
			        <input type="hidden" name="com_userid" value="2">
			        <textarea  rows="5" cols="50" name="comment_text" placeholder="Add Comments..."></textarea><br> 
			        <input class="button" type="submit" value="Submit Comments">
		        </form>	
     

<?php include'../view/footer.php'; ?>