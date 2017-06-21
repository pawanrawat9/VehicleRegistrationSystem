<?php
		$conn=new mysqli("localhost","root","","vehicle_registration");
		if($conn->connect_error)
		{
			die("connection error ".$conn->connect_error);
		}		
		$v="select * from owner";
		$r_v= mysqli_query($conn,$v);	
		
?>
<br>
<div>
	<table style="padding:10px;border:2px solid white;">
		<tr style="padding:10px;border:2px solid white;">
			<td style="padding:10px;border:2px solid white;">Name</td>
			<td style="padding:10px;border:2px solid white;">License Number</td>
			<td style="padding:10px;border:2px solid white;">License Date</td>
			<td style="padding:10px;border:2px solid white;">Address</td>
			<td style="padding:10px;border:2px solid white;">Age</td>
			<td style="padding:10px;border:2px solid white;">Gender</td>
			<td style="padding:10px;border:2px solid white;">Contact No.</td>
			<td style="padding:10px;border:2px solid white;">Profession</td>
		</tr>
		<?php
			while($row = mysqli_fetch_assoc($r_v))
			{
		?>
				<tr>
					<td style="padding:10px;border:2px solid white;" ><?php echo $row["name"]; ?></td>
					<td style="padding:10px;border:2px solid white;" ><?php echo $row["license_no"]; ?></td>
					<td style="padding:10px;border:2px solid white;" ><?php echo $row["license_date"]; ?></td>
					<td style="padding:10px;border:2px solid white;" ><?php echo $row["address"]; ?></td>
					<td style="padding:10px;border:2px solid white;" ><?php echo $row["age"]; ?></td>
					<td style="padding:10px;border:2px solid white;" ><?php echo $row["gender"]; ?></td>
					<td style="padding:10px;border:2px solid white;" ><?php echo $row["Contact_No"]; ?></td>
					<td style="padding:10px;border:2px solid white;" ><?php echo $row["profession"]; ?></td>
				</tr>
		<?php
			}
		?>
	</table>
</div>