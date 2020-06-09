<?php
/*
//create connection
$conn=mysqli_connect("localhost","sujatah","butterfly22","test_db");
//checking connection
if($conn){
    echo "connected successfully";
}else{
    echo "Not connected";
}
*/
$db_host="localhost";
$db_id ="sujatah";
$db_pass="butterfly22";
$db_name="test_db";

$conn=mysqli_connect($db_host,$db_id,$db_pass,$db_name);
//checking connection
if(!$conn){
   die( "connection failed" . mysqli_connect_error());
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
      <?php 
      $sql="SELECT * FROM student";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Role</th>";
        echo "<th>Address</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["role"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
      } 
     
      ?>
  </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
