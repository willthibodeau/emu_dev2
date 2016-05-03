<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>

<div class="main-content">
	
	<h2>Comments Manager</h2>
	<table class="formInput">
		<tr>
			<th>User Name</th>		
			<th>Comment</th>
			<th>&nbsp;</th>
		</tr>
			<?php foreach($comments as $comment=>$value) : ?>
		<tr>
			<td class="comFirst">
				<?php echo htmlspecialchars($value['users_firstName']); ?>
			</td>
			<td class="comText">
				<?php echo htmlspecialchars($value['com_commentText']); ?>
			</td>
			<td class="blank"> 
					<form action="" method="post" >
                    <input type="hidden" name="action" value="delete_comment" />
                    <input type="hidden" name="comment_id" value="<?php echo $value['com_commentID']; ?>">
                    <input class="button-delete" type="submit" value="Delete "/>
               	</form>
			</td>
		</tr>
			<?php endforeach; ?>  
	</table>  
	
	<h2>Add Comments</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="add_comment">
        <input type="hidden" name="com_userid" value="2">
        <textarea  autofocus rows="5" cols="50" name="comment_text" placeholder="Add Comments..."></textarea><br> 
        <input class="button" type="submit" value="Submit Comments">
    </form>	    		    
</div><!-- end main content -->

<?php include'../view/footer.php'; ?>