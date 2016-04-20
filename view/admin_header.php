<?php 
 include('../util/valid_admin.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Elite Meats Utah</title>
<link href="../css/styles.css" rel="stylesheet">
<link href="../img/favicon.png" rel="icon" type="image/png" />
<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen+Mono' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<nav role="custom-dropdown">
		<!-- fix for ios -->
		<input type="checkbox" id="button">
		<label for="button" onclick></label>
		<ul >	
			<li><a href="/admin/">Admin Home</a></li>
			<li><a href="/product/">Products</a></li>
			<li><a href="/admin/.?action=show_add_form">Add Products</a></li>
			<li><a href="/imageProcess/">Image Manager</a></li>
			<li><a href="/admin/.?action=view_comments">Comment Manager</a></li>
		</ul>
		
	</nav>
	<header class="publicHeader">
		<h1>Elite Meats Utah</h1>
		<div class="nav-admin-login">
			<p>You are <?php echo $_SESSION['admin_firstName'] ; ?> logged in as <?php echo $_SESSION['admin_userName']; ?>.</p>
	 		<form action="/admin/index.php" method="post">
	            <input type="hidden" name="action" value="logout">
	            <input type="submit" value="Logout">
	        </form>
	    </div>
	</header>
	

		