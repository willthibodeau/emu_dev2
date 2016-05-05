<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: member_menu.php                                                                            /
//   Description: member can search the menu or add and see his comments                              /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////
require_once('../util/valid_member.php');
include'../view/member_header.php';
?>
<div class="main-content">
	<h1>Member Menu</h1>
	<h2>Welcome <?php echo $_SESSION['member_firstName']; ?></h2>

	<!-- display any errors -->
	<div class="error">
        <?php if(!empty($error)){
            echo htmlspecialchars($error);
        } ?>
    </div>
	<div class="formInput">
		<h2>Search Products</h2>
		<form action="" method="post" >
			<input type="hidden" name="action" value="search_categories">
			<input type="text" name="name"  placeholder="Search Products....">
			<input autofocus class="button" type="submit" value="Search">
		</form>
	</div>
	<div >
	<h2>Reviews</h2>
		<table class="formInput">
				<?php foreach($comments as $comment) : ?>
			<tr>
				<td class="mediumCom">
					<?php echo htmlspecialchars($comment['com_commentText']); ?>
				</td>
				<td class="mediumDelete">
					<form action="" method="post">
	                    <input type="hidden" name="action" value="delete_comment" />
	                    <input type="hidden" name="comment_id" value="<?php echo $comment['com_commentID']; ?>">
	                    <input class="button-delete" type="submit" value="Delete">
	               </form>
	            </td>
	        </tr>
				<?php endforeach; ?>
		</table>	
		<?php if(!empty($message)){ echo $message;} ?>
   		<h2>Add Review</h2>		
        <form action="." method="post" class="formInput">
	        <input type="hidden" name="action" value="add_comment">
	        <input type="hidden" name="com_userid" value="2">
	        <textarea  rows="5" cols="50" name="comment_text" placeholder="Add Comments..."></textarea><br> 
	        <input class="button" type="submit" value="Submit Review">
        </form>	
	</div>  
</div>
<?php include'../view/footer.php'; ?>