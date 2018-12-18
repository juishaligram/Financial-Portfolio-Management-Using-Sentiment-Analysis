<?php
	session_start();
	$host = "localhost";
	$port = 3306;
	$socket = "";
	$user = "root";
	$password = "Capstone";
	$dbname   = "portfolio_management";
	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());	
	$login=$_POST['username'];
	$passwd=$_POST['passwd'];
	if($login!=''&&$passwd!=''){		
		$query="select * from user where EmailId='$login' and Password='$passwd'";
		$result = mysqli_query($con, $query);
		$res=mysqli_fetch_row($result);		
		if($res)
		{
			$_SESSION['username']=$login;
			$ses_username = $_SESSION['username'];
			$_SESSION['passwd']=$passwd;
			$ses_pwd = $_SESSION['passwd'];
?>
			<html>
				<head>
					<link rel="stylesheet" type="text/css" href="/Capstone/login_final.css">	
				</head>
				<body background = "/Capstone/images/Bckgrnd.jpg">				
					<input type="submit" id = "cur_port" class="button" value="Current Portfolio">
					<form action = "visualizations.php" method = "post">
						<input type="submit" id = "int_visual" class="button" value="Portfolio Dashboards">
					</form>
					<form action = "information.php" method = "post">
						<input type="submit" id = "more_info" class="button" value="More Information">
					</form>
					<form action = "logout.php" method = "post">
						<input type = "submit" id = "log_out" class = "button" value = "Logout"><br><br>
					</form>
				</body>
			</html>	
<?php
			$sql_query = "select * from wallet w1 where w1.Week =
							(select max(w.Week)
								from wallet w where
								w.EmailId = '$ses_username')
									and w1.EmailId = '$ses_username'";
			$result = mysqli_query($con, $sql_query);
?>			
			<html>
				<div id = "div_portfolio">
			</html>
<?php
			echo "<table border = '1'>
			<tr><th>Current Week of Investment</th><th>Portfolio Worth</th><th>Wallet Balance</th></tr>";
			while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){
				echo "<tr>";
				echo "<td>" . $row['Week'] . "</td>";
				echo "<td>" . $row['Worth'] . "</td>";
				echo "<td>" . $row['Balance'] . "</td>";
				echo "</tr>";}
			echo "</table>";

?>
			<html>
				<h2>Your Current Portfolio</h2>
			</html>
<?php
			$sql_query = "select * from portfolio p where p.Week =
							(select max(w.Week)
								from wallet w where
								w.EmailId = '$ses_username')
									and p.EmailId = '$ses_username'";
			$result = mysqli_query($con, $sql_query);
			echo "<table border = '1'>
			<tr><th>Ticker</th><th>Number of Stocks</th><th>Price</th><th>Total</th></tr>";
			while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){
				echo "<tr>";
				echo "<td>" . $row['Ticker'] . "</td>";
				echo "<td>" . $row['Number_of_Stocks'] . "</td>";
				echo "<td>" . $row['Price'] . "</td>";
				echo "<td>" . $row['Total'] . "</td>";
				echo "</tr>";}
			echo "</table>";
?>
		<html>
			</div>
		</html>
<?php
		}
		else
		{
			echo'You entered username or password is incorrect';
?>
				
				<html>
					<body>
						<br><br>
							<a href="/Capstone/login.html">
								<button>Return to Login Page</button>
							</a>
					</body>
				</html>
<?php
		}
	}
	else
	{
		echo'Enter both username and password';
	}
	mysqli_close($con);
?>
			