<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/Capstone/login_final.css">
		<!--<link rel="stylesheet" type="text/css" href="/Capstone/visualizations.css">-->
		<link rel="stylesheet" type="text/css" href="/Capstone/viz_changes.css">
	</head>
	<body background = "/Capstone/images/Bckgrnd.jpg">
		<form action = "redirectPortfolio.php" method = "post">
			<input type="submit" id = "cur_port" class="button" value="Current Portfolio">
		</form>
		<input type="submit" id = "int_visual" class="button" value="Portfolio Dashboards">
		<form action = "information.php" method = "post">
			<input type="submit" id = "more_info" class="button" value="More Information">
		</form>
		<form action = "logout.php" method = "post">
			<input type = "submit" id = "log_out" class = "button" value = "Logout"><br><br>
		</form>
		<a href="/Capstone/index_portfolio.html">
			<button class = "viz_button" id = "viz1" style = "background-color:#46A2E2;color:black;border: solid 2px white;">Indexes vs Portfolio</button>
		</a>
		<a href="/Capstone/worth.html">
			<button class = "viz_button" id = "viz2" style = "background-color:#46A2E2;color:black;border: solid 2px white;">My Worth</button>
		</a>
		<a href="/Capstone/sentiment_stock.html">
			<button class = "viz_button" id = "viz3" style = "background-color:#46A2E2;color:black;border: solid 2px white;">Sentiment Scores vs Stock Prices</button>
		</a>
		<a href="/Capstone/week_over_week.html">
			<button class = "viz_button" id = "viz4" style = "background-color:#46A2E2;color:black;border: solid 2px white;">Portfolio Week Over Week</button>
		</a>
		<a href="/Capstone/topCompanies.html">
			<button class = "viz_button" id = "viz5" style = "background-color:#46A2E2;color:black;border: solid 2px white;">Top 10 Companies</button>
		</a>
		<a href="/Capstone/sentiments.html">
			<button class = "viz_button" id = "viz6" style = "background-color:#46A2E2;color:black;border: solid 2px white;">Sentiments</button>
		</a>
	</body>
</html>