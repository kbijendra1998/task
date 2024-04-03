<?php
session_start();

      if(isset($_SESSION['uid']))
	  {
		  echo "";
	  }
	  else
	  {
		  header('location: ../login.php');
	  }

?>
<?php
     include('header.php');
     include('titlehead.php');
?>

	
	<table align="center" border="1" width="80%" style="margin-top:10px;">
			<tr style="background-color:#000; color:#fff;">
				
				<th>Image</th>
				<th>Name</th>
				<th>Roll No</th>
				<th>Parent Contact No.</th>
				<th>City</th>
			</tr>
	<?php
	include("../dbcon.php");
		$qry="SELECT  * from `student` ";
		$run=mysqli_query($con,$qry);
		
		while($data=mysqli_fetch_assoc($run))
		{
		?>
	
		<tr>
			<td>
				<img src="../dataimg/<?php echo $data['image'];?> " style="width:50px; height:50px; "/>
			</td>
			<td>
				<?php echo $data['name'];?>
			</td>
			<td>
				<?php echo $data['rollno'];?>
			</td>
			<td>
				<?php echo $data['pcont'];?>
			</td>
			<td>
				<?php echo $data['city'];?>
			</td>
		</tr>

		
	<?php
		}
	?>
	</table>