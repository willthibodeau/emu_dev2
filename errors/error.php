<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';

?>
<div class="contentWrapper"> 
    <div class="columnWrapper">

        <!-- main content goes here -->
        <article class="main">


<?php if(!empty($errors)){
	echo $errors; 
}

?>