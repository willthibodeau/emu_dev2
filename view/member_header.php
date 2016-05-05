<?php 
 include('../util/valid_member.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Elite Meats Utah</title>
<link rel="stylesheet" media="(min-width: 769px)" href="/elitemeatsutah/css/large.css" />
<link rel="stylesheet" media ="screen and ( min-width: 481px ) and ( max-width: 768px )" href="/elitemeatsutah/css/medium.css" />
<link rel="stylesheet" media="(max-width: 480px)" href="/elitemeatsutah/css/small.css" />
<link href="/elitemeatsutah/img/favicon.png" rel="icon" type="image/png" />
<link href='https://fonts.googleapis.com/css?family=Oxygen+Mono' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="wrapper">
		<nav role="custom-dropdown">
			<!-- fix for ios -->
			<input type="checkbox" id="button">
			<label for="button" onclick></label>
			<ul >
				<li><a href="/elitemeatsutah/member/">Member Home</a></li>
				<li><a href="/elitemeatsutah/member/.?action=view_cart">Cart</a></li>
				<li><a href="/elitemeatsutah/product/">Products</a></li>
			</ul>
		</nav>
		<header class="publicHeader">
			<h1>Elite Meats Utah</h1>
			<div class="nav-admin-login">
				<p>You are logged in as: <?php echo htmlspecialchars($_SESSION['member_firstName']); ?>.</p>
		        <form action="/elitemeatsutah/member/index.php" method="post">
		            <input type="hidden" name="action" value="logout">
		            <input class="button" type="submit" value="Logout">
	            </form>
	        </div>
		</header>


