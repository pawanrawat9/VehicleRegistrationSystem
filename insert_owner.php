

<?php
$name=$license_no=$license_date=$address=$age=$gender=$contact_no=$profession="";
$err="false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["name"])||empty($_POST["number"])||empty($_POST["date"])||empty($_POST["address"])||empty($_POST["age"])||empty($_POST["gender"])||empty($_POST["contact"])||empty($_POST["profession"]))
	{
		$err="true";
	}
	else
	{
		$name = $_POST["name"];
		$license_no=$_POST["number"];
		$license_date=$_POST["date"];
		$address=$_POST["address"];
		$age=$_POST["age"];
		$gender=$_POST["gender"];
		$contact_no=$_POST["contact"];
		$profession=$_POST["profession"];
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
$sql="insert into owner values('$name','$license_no','$license_date','$address','$age','$gender','$contact_no','$profession')";
if($conn->query($sql)==true)
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
