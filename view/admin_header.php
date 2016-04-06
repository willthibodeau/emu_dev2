<?php 
 include('../util/valid_admin.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Elite Meats Utah</title>
<link href="../styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="html5shiv.js"></script>
<![endif]-->
<link href="../img/favicon.png" rel="icon" type="image/png" />
</head>

<body>
	<div class="pageWrapper">
		<header>
			<nav class="clear">
				<ul class="dropdown">
					<li><a href="/admin/">Admin Home</a></li>
					<li><a href="/product/">Products</a></li>
					<li><a href="/admin/">Category List</a></li>
					<li><a href="/admin/.?action=show_add_form">Add Products</a></li>
					<li><a href="/imageProcess/">Image Manager</a></li>
					<li><a href="/admin/.?action=view_comments">Comment Manager</a></li>

				</ul>
			<div class="nav-admin-login">
				<p>You are <?php echo $_SESSION['admin_firstName'] ; ?> logged in as <?php echo $_SESSION['admin_userName']; ?>.</p>
			


         <form action="../admin/index.php" method="post">
                <input type="hidden" name="action" value="logout">
                <input type="submit" value="Logout">
            </form>
            </div>
			</nav>
			<h1>Elite Meats Utah</h1>
		</header>