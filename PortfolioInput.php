<?php
	$pst = new DateTimeZone('America/Los_Angeles');
	$dt = new DateTime(' ', $pst);
	//$dt = date('Y-m-d H:i:s');
	//echo $dt; 
	//echo $dt->format('Y-m-d H:i:s');
	$dt_format = $dt->format('Y-m-d H:i:s');
	 
	$host = "localhost";
	$port = 3306;
	$socket = "";
	$user = "root";
	$password = "Capstone";
	$dbname   = "portfolio_management";
	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());
	
	$iamt1 = $_GET["iamt1"];	
	$semailid1 = $_GET["semailid1"];
	
	$sql = "INSERT INTO wallet(EmailId, Worth, Date, Balance, Week) VALUES ('$semailid1','$iamt1','$dt_format','0','0')";	
	$result = mysqli_query($con, $sql);	
	if($result){
?>
<html>
	<body>
		<h1>Congratulations for taking the first step towards your investments !!!</h1>
		<p>Please login back to check for your current portfolio</p>
		<a href="/Capstone/login.html">
			<button>Return to Login Page</button>
		</a>
	</body>
</html>		
<?php		
	}
	else{
		echo("Error description: " . mysqli_error($con));
	}
	mysqli_close($con);
?>