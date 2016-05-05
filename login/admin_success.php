<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: admin_success.php                                                                          /
//   Description: serves as a landing page once the admin is logged in                                /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>
<div class="main-content">
	<h2>Admin Success</h2>
    <div class="formInput">
		<h2>Administrator Login is Successful!</h2>
		<p>You are logged in as <?php echo htmlspecialchars($_SESSION['admin_firstName']); ?>.</p>
		<p>Go to the Administrators Management <a class="button" href="../admin/.?action=list_categories">Page</a></p>	
    </div>	
</div> 
<?php include'../view/footer.php'; ?>
  