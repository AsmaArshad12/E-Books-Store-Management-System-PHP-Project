<?php

// connect to the database
include "connection.php";
include"header/header.php";

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    $email= $_POST['email'];
    $subject = $_POST['subject'];
    $description= $_POST['description'];
   
    // destination of the file on the server
    $destination = 'upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

   if ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO contactus (Email, Subject, Description, Attachment) VALUES ('$email','$subject','$description','$filename')";
            if (mysqli_query($con, $sql)) {
                 echo "<script>window.location='UserContactUs.php';alert('Request Submit Successfully');</script>";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Contact Us</title>
    

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

</head>
<body  style="background-color:#6CBCE7">

	


<br><br>

 <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             
     <br>    


    <h2 style="color:black;text-align:center;"> Contact Us </h2>
    <br>
                            

    <form  method="post" enctype="multipart/form-data">
                   
        <center>


         <div class="form-group mb-4 ">
                        
            <input  type="email" name="email" placeholder="Email" class="form-control w-50" required>
                       
        </div>


         <div class="form-group mb-4 ">
                        
            <input  type="text" name="subject" placeholder="Subject" class="form-control w-50" required>
                       
        </div>



         <div class="form-group mb-4 ">
          <textarea placeholder="Description" rows="4" cols="50" name="description" class="form-control w-50" required></textarea>

          </div>


       
				
			
	    <div class="form-group mb-4 ">
                  
            <input type="file" name="myfile" required  style="margin-right:80px" />
        </div>	

						
        <div class="form-group mb-4 ">
                        
            <input type="submit" name="submit" class="btn btn-primary" value="Contact Us" style="width:50%">
                        
        </div>


					
				</form>
			</div>
		</div>
	</div>
	



</body>
</html>