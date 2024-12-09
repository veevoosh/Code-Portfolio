<?php
	session_start();
	if(!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)){ //Only Members can access
		header("Location: login.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang=en>
	<head>
		<title>Logout - Website ni Domingo</title>
		<meta charset=utf-8>
		<link rel="stylesheet" type="text/css" href="css/design.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/bootstrap.bundle.min.js"></script>
	</head>
	<body class="index-bg-pattern";>
		<div id="container">
		<?php include'nav_member.php';?>
		<center><h1 class="register-header";>Logout from Account</h1></center>
		<br />
			<div id='content'>
				<center>
					<h3>Oops! This page is still a work-in-progress!</h3>
					<h4>Now <b><a href="member_page.php">GET OUTTA HERE</a>!!!</b> <i>(respectfully)</i></h4>
				</center>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			</div>
		<?php include'footer.php';?>
		</div>
	</body>
</html>