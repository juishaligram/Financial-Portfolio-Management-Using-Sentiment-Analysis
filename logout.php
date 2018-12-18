<?php
	session_start();
	unset($_SESSION);
	session_destroy();
	session_write_close();
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="/Capstone/home.css">	
	</head>
	<!-- Background image link: https://www.housers.com/en/blog/wp-content/uploads/2016/09/property.jpg-->
	<body background = "/Capstone/images/investment.jpg">
		<h1>Portfolio Management Using Emotional Intelligence</h1>
		<h3>Sign into your account</h3>
		<form action = "login.php" method = "post">
			<div id = "loginDiv">
				<b>User Name:</b><br>
				<input type = "text" id = "uname" name = "username" required><br><br>
				<b>Password:</b> <br>
				<input type = "password" id = "pword" name = "passwd" required><br><br>
				<input type = "submit" value = "Login"><br><br>
				<a href = "/Capstone/SignUp.html">Don't have an account? Sign up now.</a>
			</div>
		</form>
	</body>
</html>

