<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                    /
//   Author: Will Thibodeau                                                                           /
//   Project: Elitemeatsutah.com                                                                      /
//   Final Project WEB 289 2016SP                                                                     /
//   Date: April 28, 2016                                                                             /
//   File: member_success.php                                                                         /
//   Description: serves as a landing page once the member is logged in                               /
//                                                                                                    /
///////////////////////////////////////////////////////////////////////////////////////////////////////
require_once('../util/valid_member.php');
include'../view/member_header.php';
?>
<div class="main-content">
	<h2>Member Success</h2>
	<div class="formInput">
		<h2>Member Login is Successful!</h2>
		<p>You are logged in as <?php echo htmlspecialchars($_SESSION['member_userName']); ?>.</p>
		<p>Welcome  <?php echo htmlspecialchars($_SESSION['member_firstName']); ?>.</p>  
		<p>Go to the Member Management <a class="button" href="../member/index.php">Page</a></p>
	</div>
</div>

<?php include'../view/footer.php'; ?>