<?php

include "connection.php";

if(isset($_POST['submit']))
{

    $about= $_POST['about'];
    

         $sql = "INSERT INTO AboutUs(About)VALUES ('$about')";
         
    if (mysqli_query($con, $sql)) {
      echo "<script>window.location='ViewAboutUs.php';alert('AboutUs Details Added Successfully');</script>";
     }
    else {

      echo "<script>window.location='AboutUs.php';alert('Invalid Data');</script>";
   }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>About Us</title>
    

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


    <body  style="background-color:#6CBCE7">
     
 <?php  include "header/adminheader.php"  ?>


   <br><br>
        <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             <br>           
<h2 style="color:black;text-align:center;"> Add About Us </h2>
   <br>
                            

<form  method="post">
                   
                  
            
<center>



    <div class="form-group mb-4 ">
                        
         <textarea placeholder="About Us" rows="14" cols="50" name="about" class="form-control w-50" required></textarea>
                       
    </div>




    <div class="form-group mb-4 ">
                        
        <input type="submit" name="submit" class="btn btn-primary" value="Add Details" style="width:50%">
                        
    </div>
                   

                   
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>