<!DOCTYPE html>  <!-- Headers already sent error fix: Put PHP BEFORE HTML declaration! -->
<html lang=en>
	<head>
		<title>Login Page - Website ni Domingo</title>
		<meta charset=utf-8>
		<link rel="stylesheet" type="text/css" href="css/design.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/bootstrap.bundle.min.js"></script>
	</head>
	<body class="register-bg-pattern";>
		<div id="container">
		<?php include'nav_index.php';?>
		<h1 class="login-header";>Login to Your Account</h1>
			<div id="content">
				<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					require('mysqli_connect.php');
					if(empty($_POST['email'])){
						echo '<p class="error">Please input your email address.</p>';
					}else{
						$e = trim($_POST['email']);
					}

					if(empty($_POST['psword'])){
						echo '<p class="error">Please input your password.</p>';
					}else{
						$p = trim($_POST['psword']);
					}

					if ($e && $p){
						$hash = sha1($p);
						$q = "SELECT user_id, fname, user_level FROM users WHERE (email = '$e' AND psword = '$hash');";
						$result = @mysqli_query($dbcon, $q);
						if(@mysqli_num_rows($result) == 1){
							session_start();
							$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);

							$_SESSION['user_level'] = (int) $_SESSION['user_level'];

							$url = ($_SESSION['user_level'] === 1) ? 'admin_page.php' : 'member_page.php';
							header('Location: '. $url);
							mysqli_free_result($result);
							mysqli_close($dbcon);
							exit();
						}else{
							echo '<p class="error">Please register first.</p>';
						}
					}else{
						echo '<p class="error">Please try again.</p>';
					}
					mysqli_close($dbcon);
				}
				?>
			</div>
			<div id="loginfields">
				<br />
				<br />
				<br />
				<?php include('login_page.inc.php'); ?>
				<br />
				<br />
				<br />
			</div>
		<?php include'footer.php';?>
		</div>
	</body>
</html>