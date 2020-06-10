<?php
$db_host = "localhost";
$db_id = "sujatah";
$db_pass = "butterfly22";


$conn = mysqli_connect($db_host, $db_id, $db_pass);
//checking connection
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}else {
    echo "Database connected<hr>";
}

$sql = "CREATE DATABASE if not exists employee1";


// if(mysqli_query($conn,$sql)){
//     echo "new database created";
// }else{
//     echo "database not created";
// }

mysqli_query($conn, $sql);
mysqli_select_db($conn, "employee1");

// $conn=mysqli_connect($db_host,$db_id,$db_pass,$db_name);
//checking connection
if(!$conn){
   die( "connection failed" . mysqli_connect_error());
}
if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'data_entry1'"))==1){
    echo "Table exists";
} else {
    $sql = "CREATE TABLE data_entry1(
        id INT AUTO_INCREMENT PRIMARY KEY,
        yoj INT,
        name VARCHAR(255),
        address TEXT
    )";
    if(mysqli_query($conn,$sql)){
        echo "<br>new table created";
    }else{
        echo "<br>table cannot be created";
    }
}


$sql1="INSERT INTO data_entry1(id,yoj,name,address) VALUES('1','2011','sujata','kolkata')";

if(mysqli_query($conn,$sql1)){
    echo "<br>data inserted";
} else {
    echo "<br>data not inserted";
}


// if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'data_entry1'"))==1){
//     echo "Table exists";
// } else {
//     $sql1 = "CREATE TABLE data_entry1(
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         yoj INT,
//         name VARCHAR(255),
//         address TEXT
//     )";
//     if(mysqli_query($conn,$sql1)){
//         echo "<br>new table created";
//     }else{
//         echo "<br>table cannot be created";
//     }
// }





?>