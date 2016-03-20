<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';

?>
<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">
<h1>Whoops! Mission control...... It looks like we have a problem!</h1>
<p> Please click <a href="../../index.php">Here</a></p>

<?php if(!empty($error)){
	echo $error; 
}

?>