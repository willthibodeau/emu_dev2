<?php 
require_once('../util/valid_member.php');

include'../view/member_header.php';
?>

<div class="main-content">
	<h2>Member Success</h2>
	<div class="formInput">
		<h2>Member Login is Successful!</h2>
		<p>You are logged in as <?php echo $_SESSION['member_userName']; ?>.</p>
		<p>Welcome  <?php echo $_SESSION['member_firstName']; ?>.</p>  
		<p>Go to the Member Management <a href="../member/index.php">Page</a></p>
	</div>
</div>

<?php include'../view/footer.php'; ?>