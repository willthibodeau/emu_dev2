<?php 
 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>

<div class="contentWrapper"> 
    <div class="columnWrapper">
        <main>
        <!-- main content goes here -->
            <article class="main">
               	<h2>Error .php </h2>