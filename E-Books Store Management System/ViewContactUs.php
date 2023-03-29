
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


<body  style="background-color:#6CBCE7">
  
<?php
   include "header/adminheader.php"
?>
 <br><br>
 <center>
<h4>Contact Us</h4>
<br>
                
                <table border="1" style="width:1000px; height:150px;text-align:center;">

        <tr>
           
            <th>Email</th>
           <th>Subject</th>
          <th>Description</th>
          <th>Attachment</th>
     
        </tr>


<?php
include "connection.php";

$query="select * from contactus";
$x= mysqli_query($con, $query);
while($row= mysqli_fetch_array($x))
{

        ?>
        <tr>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Subject']; ?></td>
            <td><?php echo $row['Description']; ?></td>

       <td>

            <a class="btn btn-success" href="upload/<?php echo $row['Attachment']; ?>"><b>View</b></a></td>

               

    </td>
        </tr>
<?php
}

?>
  </center>  </table>
       
    </div>
</div>

    

</body>
</html>