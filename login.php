<?php
session_start();
	if(!isset($_SESSION["logged"]))
	{
		$uname=mysql_escape_string($_POST["name"]);
		$pass=md5(mysql_escape_string($_POST["pass"]));
		
		if($uname && $pass)
		{
			$servername="localhost";
			$username="root";
			$password="";
			$database="vehicle_registration";
			
			$conn=new mysqli($servername,$username,$password,$database);
			if($conn -> connect_error)
			{
				die("connection failed".$conn->connect_error);
			}
			
			$qry = "Select * from  user where name = '$uname' AND password = '$pass'";
			$res = mysqli_query($conn,$qry);
			if(mysqli_fetch_row($res)==0){
			header('location:./error.php');
			}
			else 
			{
			
			$_SESSION["user"]=$uname;
			$_SESSION["logged"]="user";
			header('location:./registration.php');
			}
		}
		else
		{
			
			header('location:./vehicle_registration_system.php');
		}
	}
	else
	{
		header("location:./registration.php");
	
	}

?>