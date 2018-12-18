<?php
	$host = "localhost";
	$port = 3306;
	$socket = "";
	$user = "root";
	$password = "Capstone";
	$dbname   = "portfolio_management";
	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());
	
	
	$firstname1 = $_POST["firstname1"];
	$lastname1 = $_POST["lastname1"];
	$emailid1 = $_POST["emailid1"];
	$pwd1 = $_POST["pwd1"];
	
	
	$sql="INSERT INTO user(FirstName, LastName, EmailId, Password) VALUES ('$firstname1','$lastname1','$emailid1','$pwd1')";	
	$result = mysqli_query($con, $sql);	
	if($result){		
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/Capstone/inputs.css">
	</head>
	<!--Body background link: https://st3.depositphotos.com/11579730/14824/i/1600/depositphotos_148248871-stock-photo-stock-market-chart-blue-color.jpg-->
	<!--<body background = "/Capstone/images/stockmkt.jpg">-->
	<body background = "/Capstone/images/bg-money.png">
		<h1>Your account is successfully created!!! Welcome</h1>
		<h2>Please enter the following details to start with your investment</h2>
		<form action = "PortfolioInput.php" method = "get">
			<div id = "portfolioInputsDiv">
				<b>Re-enter Email Id</b><br>
				<input type = "text" id = "seid1" name = "semailid1" required><br><br>
				<b>Investment Amount: </b><br>
				<input type = "text" id = "iamt" name = "iamt1" required><br><br>
				<input type = "submit" value = "Create your Portfolio!!"><br>
			</div>
		</form>			
	</body>	
</html>
<?php
	}
	else{
		echo "You already have an account with this Email Id.";
?>
<html>
	<body>
		<br><br>
		<a href="/Capstone/SignUp.html">
			<button>Return to Sign Up Page</button>
		</a>
	</body>
</html>
<?php
	}
	mysqli_close($con);	
?>