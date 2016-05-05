<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: error.php                                                                                  /
//   Description: handles general errors                                                              /
//                                                                                                    /
/////////////////////////////////////////////////////////////////////////////////////////////////////// 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(isset($_SESSION['member'])){
  include'../view/member_header.php';  
}else{
	include'../view/header.php';
}
?>

<div class="main-content">
	<h2>Error</h2>
    <div class="formInput">
		<!-- show errors if variable is passed -->
		<?php 
			if(!empty($error)){
				echo htmlspecialchars($error); 
			}else{
				echo'Return to home.';
			}
		?>
    </div>
</div>
<?php include'../view/footer.php'; ?>