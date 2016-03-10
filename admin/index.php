<?php 

echo 'admin index.php';
require_once('../util/valid_admin.php');
?>
<p>You are logged in as <?php echo $_SESSION['admin']; ?>.</p>