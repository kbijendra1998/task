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
		$id=$_REQUEST['id'];
	    $qry="DELETE from `student` where id='".$id."' ";	   
	  // echo $qry;
	   $run= mysqli_query($con,$qry);
	  
	   if($run == true)
	   {
		   ?>
		   <script>
		        alert('Data Deleted successfully!');
				window.open('deletestudent.php?id=<?php echo $id; ?>','_self');
		   </script>

		   <?php
	   }


?>