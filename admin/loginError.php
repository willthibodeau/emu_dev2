<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: loginError.php                                                                             /
//   Description: acts as a default error page                                                        /
//                                                                                                    /
/////////////////////////////////////////////////////////////////////////////////////////////////////// 
include'../view/header.php';
?>
<div class="main-content">
	<h2>Login error</h2>
	<?php 
		if(!empty($error)){
			echo htmlspecialchars($error); 
		}else{
			echo'Return to home.';
		}
	?>
</div>     
<?php include'../view/footer.php'; ?>