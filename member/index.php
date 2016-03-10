<?php
echo 'member index.php';
require_once('../util/valid_member.php');
?>

<p>You are logged in as <?php echo $_SESSION['member']; ?>.</p>