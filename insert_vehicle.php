<?php
$license_no=$c_name=$mod_name=$type=$registration_no=$engine_no=$chassis_no=$fueltype=$mfg_year=$seating_capacity="";
$err="false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["number"])||empty($_POST["cname"])||empty($_POST["model"])||empty($_POST["type"])||empty($_POST["registration"])
	||empty($_POST["engine"])||empty($_POST["chassis"])||empty($_POST["fuel"])||empty($_POST["year"])||empty($_POST["capacity"])||empty(basename($_FILES['imagefile']['name'])))
	{
		$err="true";
	}
	else
	{
		$license_no=$_POST["number"];
		$c_name=$_POST["cname"];
		$mod_name=$_POST["model"];
		$type=$_POST["type"];
		$registration_no=$_POST["registration"];
		$engine_no=$_POST["engine"];
		$chassis_no=$_POST["chassis"];
		$fueltype=$_POST["fuel"];
		$mfg_year=$_POST["year"];
		$seating_capacity=$_POST["capacity"];
		
	}
}
	
$servername="localhost";
$username="root";
$password="";
$database="vehicle_registration";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
	die("connection failed" .$conn->connect_error);
}
if($err=="false"){
$filename = time().basename($_FILES['imagefile']['name']);
$sql="insert into vehicle values('$license_no','$c_name','$mod_name','$type','$registration_no','$engine_no','$chassis_no','$fueltype','$mfg_year','$seating_capacity','$filename')";
if($conn->query($sql)==true && move_uploaded_file($_FILES['imagefile']['tmp_name'],'Uploads/'.$filename))
{
	echo"inserted sucessfully";
}
else
{
	echo "ERROR".$sql."<BR>".$conn->error;
}
}
else{
echo "please fill all the fields";
}
$conn->close();
?>