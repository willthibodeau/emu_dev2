<?php 
 require_once('../util/valid_member.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Elite Meats Utah</title>
<link href="/emu_dev2/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="html5shiv.js"></script>
<![endif]-->
<link href="/emu_dev2/img/favicon.png" rel="icon" type="image/png" />
<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Comfortaa:300,400' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="pageWrapper">
		<header>
			<nav class="clear">
				<ul class="dropdown">
					<li><a href="/emu_dev2/member/">Member Home</a></li>
				</ul>
				<div class="nav-admin-login">
					<p>You are logged in as: <?php echo $_SESSION['member_firstName']; ?>.</p>
			        <form action="/emu_dev2/member/index.php" method="post">
			            <input type="hidden" name="action" value="logout">
			            <input type="submit" value="Logout">
		            </form>
	            </div>
			</nav>
			<h1>Elite Meats Utah</h1>
		</header>