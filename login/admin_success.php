<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>
<div class="main-content">
    <div class="formInput">
		<h2>Administrator Login is Successful!</h2>
		<p>You are logged in as <?php echo $_SESSION['admin_firstName']; ?>.</p>
		<p>Go to the Administrators Management <a class="button" href="../admin/index.php">Page</a></p>	
    </div>
	
</div> 

<?php include'../view/footer.php'; ?>
  