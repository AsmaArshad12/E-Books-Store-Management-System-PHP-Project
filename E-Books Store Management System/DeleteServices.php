<?php 
include "connection.php";
$Id=$_GET['id'];
$query="delete from services where Id='$Id'";
$msg= mysqli_query($con, $query);
if($msg)
{
	
	 echo "<script>window.location='ViewServices.php';alert('Services Details Deleted Successfully');</script>";
}

?>