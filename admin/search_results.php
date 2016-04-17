<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>
<div class="main-content">

<h2>search results.php</h2>

<?php if(!empty($message)){
	echo $message;
} ?>

<?php foreach($comment_text as $value) : ?>
	<?php echo $value['com_commentText']; ?><br>

<?php endforeach; ?>
</div><!-- end main content -->

<?php include '../view/footer.php'; ?>

