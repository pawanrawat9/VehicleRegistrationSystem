<?php
	session_start();
	if(isset($_SESSION["user"])){
	$admin= $_SESSION["user"].'<br>';
?>
<html>
	<head >
		
		<link rel="stylesheet" type="text/css" href="mainstyle.css">
		<script src="jquery-2.1.3.min.js"></script>
		<script src="pageajax.js"></script>
	</head>
	<body class="style30">
		<div><center><h2><?php echo "WELCOME"." ".$admin;?></h2><img src="a.png">&nbsp;&nbsp;&nbsp;<img src="b.png">&nbsp;&nbsp;&nbsp;<img src="k.jpg">&nbsp;&nbsp;&nbsp;<img src="l.jpg">&nbsp;&nbsp;&nbsp;<img src="n.jpg"><img src="o.jpg"><img src="p.jpg"><img src="q.jpg">&nbsp;&nbsp;&nbsp;<img src="c.png">&nbsp;&nbsp;&nbsp;<img src="j.jpg">&nbsp;&nbsp;&nbsp;<img src="m.jpg"></center>
		<br><Br>
		<input type="button" name="owner" value="Owner" onclick="load('owner')" class="b">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="vehicle" value="Vehicle" onclick="load('vehicle')" class="b">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="vehicle" value="All Vehicle" onclick="load('allvehicles')" class="b">	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="vehicle" value="All Owners" onclick="load('allowners')" class="b">		
		<a class="pos" style="float('right');" href="logout.php"><font color="#00FFFF">LOGOUT </font></a></div>
		<div id="content" class="imdiv">
	
		</div>
	
	</body>
</html>	
<?php }
else
{
	header('location:./index.php');
}
?>