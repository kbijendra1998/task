<?php
	function showdetails($standard,$rolno){

	include("dbcon.php");

	$qry="SELECT * from `student` where standard='".$standard."' AND rollno='".$rolno."'";
	$run=mysqli_query($con,$qry);
	 
	if(mysqli_num_rows($run)>0){
		$data=mysqli_fetch_assoc($run);
	?>
	<table align="center" border="1" style="width:50%; margin-top:20px;">
		<tr>
			<th colspan="3">Student details</th>
		</tr>
		
		<tr>
			<td rowspan="6"><img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px; max-width:120px;" /></td>
		</tr>
			<tr>
				<th>Roll No</th>
				<td><?php echo $data['rollno'];?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name'];?></td>
			</tr>
			<tr>
				<th>Standard</th>
				<td><?php echo $data['standard'];?></td>
			</tr>
			<tr>
				<th>Parent contact</th>
				<td><?php echo $data['pcont'];?></td>
			</tr>	
			<tr>
				<th>City</th>
				<td><?php echo $data['city'];?></td>
			</tr>
		
	</table>
	<?php
	}
		else{
		echo "<script> alert('No Student Found!')</script>";
	}
}

?>