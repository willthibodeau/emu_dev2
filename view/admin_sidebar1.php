<?php
    
    require_once('../util/valid_admin.php');
   
    
?>
<h2>Login Status1</h2>
    <p>You are logged in as <?php echo $_SESSION['admin']; ?>.</p>

<h3>Edit </h3>
<a href="/emu_dev1/category/">Edit Categories</a><br>
<a href="?action=show_add_form">Add Products</a><br>
<a href="index.php?action=list_products">List Products</a>

