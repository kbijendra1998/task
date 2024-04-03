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

	<table align="center">
		<form action="updatestudent.php" method="POST">
			<tr>
				<th>Enter standard</th><td><input type="number" name="standard" placeholder="Enter standard" required="required"></td>
				
				<th>Enter student Name</th><td><input type="text" name="name" placeholder="Enter student name" required="required"></td>
				
				<th><td colspan="2"><input type="submit"  name="submit" value="search"></td></th>
			</tr>
	    </form>
	</table>
	
	<table align="center" border="1" width="80%" style="margin-top:10px;">
			<tr style="background-color:#000; color:#fff;">
				<th>No.</th>
				<th>Image</th>
				<th>Name</th>
				<th>Roll No</th>
				<th>Edit</th>
			</tr>

<? 
	if(isset($_POST['submit'])){
		include("../dbcon.php");
		
		$standard = $_POST['standard'];
		$name = $_POST['name'];
		$sql="select * from `student` where `standard`='$standard' AND `name` LIKE '%$name%'";
		$run=mysqli_query($con,$sql);
		if(mysqli_num_rows($run)<1){
			echo "<tr><td colspan='5'>No Record Found</td></tr>";
		}else {
			$count=0;
			while ($data=mysqli_fetch_assoc($run)){
				$count++;
				?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><img src="../dataimg/<?php echo $data['image']; ?>" height="50px" width="50px"></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['rollno']?></td>
					<td><a href="updateform.php?id=<?php echo $data['id']; ?>">Edit</a></td>
				</tr>
				
				<?php
				 
			}
		}
	}
    
?>
	</table>