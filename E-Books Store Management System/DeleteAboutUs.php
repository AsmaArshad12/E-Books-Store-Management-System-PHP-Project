<?php 
include "connection.php";
$Id=$_GET['id'];
$query="delete from aboutus where Id='$Id'";
$msg= mysqli_query($con, $query);
if($msg)
{
	
	 echo "<script>window.location='ViewAboutUs.php';alert('AboutUs Details Deleted Successfully');</script>";
}

?>