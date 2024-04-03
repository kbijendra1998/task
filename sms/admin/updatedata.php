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
     //include("header.php");
	 //include("titlehead.php");
	
?>
<?php
		 include("../dbcon.php");
	   $rolno= $_POST['rollno'];
	   $name= $_POST['name'];
	   $city= $_POST['city'];
	   $pcon= $_POST['pcon'];
	   $std= $_POST['std'];
	   $id= $_POST['id'];
	   $imagename = $_FILES['simg']['name'];
	   $tempname = $_FILES['simg']['tmp_name'];
	   
	   move_uploaded_file($tempname,"../dataimg/$imagename");
	   
	   $qry="UPDATE `student` SET rollno='".$rolno."', name='".$name."', city='".$city."', pcont='".$pcon."', standard='".$std."',image='".$imagename."' where id='".$id."' ";	   
	  // echo $qry;
	   $run= mysqli_query($con,$qry);
	  
	   if($run == true)
	   {
		   ?>
		   <script>
		        alert('Data updated successfully!');
				window.open('updateform.php?id=<?php echo $id; ?>','_self');
		   </script>

		   <?php
	   }


?>