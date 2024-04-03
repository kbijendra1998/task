<?php
session_start();

      if(isset($_SESSION['uid']))
	  {
		  echo "";
	  }
	  else
	  {
		  header("location: ../login.php");
	  }
?>
<?php
     include("header.php");
	 include("titlehead.php");
	 include("../dbcon.php");
?>

<?php 
	$id= $_GET['id'];
	
	$sql="select * from `student` where `id`='".$id."'";
	$qry=mysqli_query($con,$sql);
	if($qry){
	$data=mysqli_fetch_assoc($qry);
	}
//echo $data;
echo "<pre>";
?>
	
	<form method="post" action="updatedata.php" enctype="multipart/form-data">
         <table align="center" border="1" style="width:70%; margin-top:40px;">
		 
		    <tr>
			    <th>Roll No</th>
				<td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>" required></td>
			</tr>
			<tr>
			    <th>Full Name</th>
				<td><input type="text" name="name" value="<?php echo $data['name'];?>" required></td>
			</tr>
			<tr>
			    <th>City</th>
				<td><input type="text" name="city" value="<?php echo $data['city'];?>" required></td>
			</tr>
			<tr>
			    <th>Parent Contact No</th>
				<td><input type="text" name="pcon" value="<?php echo $data['pcont'];?>" required></td>
			</tr>
			<tr>
			    <th>Standard</th>
				<td><input type="number" name="std" value="<?php echo $data['standard'];?>" required></td>
			</tr>
			<tr>
			    <th>Image</th>
				<td><input type="file" name="simg" required></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id'];?>" />
			     <td colspan="2" align="center"> <input type="submit" name="submit" value="submit" ></td>
			</tr>
		 </table>
</form>
</body>
</html>

