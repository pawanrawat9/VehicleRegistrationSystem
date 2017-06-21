<?php 
	$eid=$_POST['number'];

	$conn=new mysqli("localhost","root","","vehicle_registration");
	if($conn->connect_error)
	{
		die("connection error ".$conn->connect_error);
	}
	
	$owner="select name,License_no,license_date,address,Contact_No from owner where License_no like '%$eid%'";
	$r_owner= mysqli_query($conn,$owner);
	
	
	
	
	
		while($row = $r_owner->fetch_assoc())
		{
			echo "Owner Name : ".$row["name"]."<br> Liscense No :".$row["License_no"]."<BR>Registeration number : ".$row["Registration_No"]."<br> ";
		}
	
?>