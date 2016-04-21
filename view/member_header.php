<?php 
 require_once('../util/valid_member.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Elite Meats Utah</title>
<link href="/elitemeatsutah/css/styles.css" rel="stylesheet">
<link href="/elitemeatsutah/img/favicon.png" rel="icon" type="image/png" />
<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen+Mono' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Comfortaa:300,400' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<nav role="custom-dropdown">
		<!-- fix for ios -->
		<input type="checkbox" id="button">
		<label for="button" onclick></label>
		<ul >
			<li><a href="../member/">Member Home</a></li>
		</ul>
	</nav>
	<header class="publicHeader">
		<h1>Elite Meats Utah</h1>
		<div class="nav-admin-login">
			<p>You are logged in as: <?php echo $_SESSION['member_firstName']; ?>.</p>
	        <form action="/elitemeatsutah/member/index.php" method="post">
	            <input type="hidden" name="action" value="logout">
	            <input class="button" type="submit" value="Logout">
            </form>
        </div>
	</header>


<!-- tree /f /a > c:wireFrame.txt -->