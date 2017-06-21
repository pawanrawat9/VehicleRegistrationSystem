<?php
		$conn=new mysqli("localhost","root","","vehicle_registration");
		if($conn->connect_error)
		{
			die("connection error ".$conn->connect_error);
		}		
		$v="select * from vehicle";
		$r_v= mysqli_query($conn,$v);	
		
?>
<br>
<div>
	<table style="padding:10px;border:2px solid white;">
		<tr style="padding:10px;border:2px solid white;">
			<td style="padding:10px;border:2px solid white;">License Number</td>
			<td style="padding:10px;border:2px solid white;">Company Name</td>
			<td style="padding:10px;border:2px solid white;">Model No</td>
			<td style="padding:10px;border:2px solid white;">Type</td>
			<td style="padding:10px;border:2px solid white;">Registration Number</td>
			<td style="padding:10px;border:2px solid white;">Engine Number</td>
			<td style="padding:10px;border:2px solid white;">Chassis Number</td>
			<td style="padding:10px;border:2px solid white;">Fuel Type</td>
			<td style="padding:10px;border:2px solid white;">Mfg. Date</td>
			<td style="padding:10px;border:2px solid white;">Capacity</td>
		</tr>
		<?php
			while($row = mysqli_fetch_assoc($r_v))
			{
		?>
				<tr style="padding:10px;border:2px solid white;">
					<td style="padding:10px;border:2px solid white;"><?php echo $row["License_no"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Company_name"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Model_No"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Type"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Registration_No"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Engine_No"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Chassis_No"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Fuel_Type"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Mfg_Date"]; ?></td>
					<td style="padding:10px;border:2px solid white;"><?php echo $row["Seating_capacity"]; ?></td>
				</tr>
		<?php
			}
		?>
	</table>
</div>