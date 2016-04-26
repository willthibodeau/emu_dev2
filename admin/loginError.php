<?php 
include'../view/header.php';
?>
<div class="main-content">
   

        <!-- main content goes here -->
        
			<h2>Login error</h2>
			<?php 
				if(!empty($error)){
					echo $error; 
				}else{
					echo'Return to home.';
				}
			?>
</div>     

<?php include'../view/footer.php'; ?>