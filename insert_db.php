<?php
$db_host="localhost";
$db_id ="sujatah";
$db_pass="butterfly22";
$db_name="test_db";

$conn=mysqli_connect($db_host,$db_id,$db_pass,$db_name);
//checking connection
if(!$conn){
   die( "connection failed" . mysqli_connect_error());
}
$sql="INSERT INTO student(name,role,address) VALUES('sujata','108','kondapur,hyderabad')" ;
if(mysqli_query($conn,$sql)){
    echo "New data inserted";
}else {
    echo "Not inserted";
}

?>