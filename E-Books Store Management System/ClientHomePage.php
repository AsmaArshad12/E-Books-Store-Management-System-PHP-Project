
<!DOCTYPE html>
<html lang="en">
<head>


    <title>ViewBooks</title>
    
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>


<body  style="background-color:#6CBCE7">
  
<?php
   include "header/clientheader.php"
?>
 <br><br>
 <center>
<h4>Books Details</h4>
<br>
                
                <table border="1" style="width:1000px; height:150px;text-align:center;">

        <tr>
           
            <th>Book Title</th>
           <th>Image</th>
     
        </tr>


<?php
include "connection.php";

$query="select * from bookscategory";
$x= mysqli_query($con, $query);
while($row= mysqli_fetch_array($x))
{

        ?>
        <tr>
            <td><?php echo $row['BookTitle']; ?></td>
            
              <td><img width="auto" src="upload/<?php echo $row['Image']?>" width="450" height="200" /> </td>
           
        </tr>
<?php
}

?>
  </center>  </table>
       
    </div>
</div>

    

</body>
</html>