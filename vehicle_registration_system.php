<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script src="login.js"></script>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="style2.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
	
</head>
<body>
<center><img src="a.png"><img src="b.png"><img src="c.png"><h1><font color="#663399">Welcome To Vehicle Registration System</font></h1></center>
	<div class="lg-container">
		<h1>Admin Area</h1>
		<form action="login.php" onsubmit="check1()" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="name" id="name" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="pass" id="pass" placeholder="password" />
			</div>
			
			<div>				
				<center><input type="submit" name="submit" Width="126px" value="Login"/> <br></center>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
</body>
</html>