<?php 
 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>

<div class="main-content">
			<h2>Error</h2>
    <div class="formInput">
		<!-- show errors if variable is passed -->
		<?php 
			if(!empty($error)){
				echo $error; 
			}else{
				echo'Return to home.';
			}
		?>
    </div>
</div>
<?php include'../view/footer.php'; ?>