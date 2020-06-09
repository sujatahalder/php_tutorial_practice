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
$db_host = "localhost";
$db_id = "sujatah";
$db_pass = "butterfly22";
$db_name = "test_db";

$conn = mysqli_connect($db_host, $db_id, $db_pass, $db_name);
//checking connection
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}else {
    echo "Database connected<hr>";
}

if(isset($_REQUEST["submit"])){
    //echo "<br>submit button clicked";

    //checking the empty space
    if(($_REQUEST["name"])==""||($_REQUEST["roll"==""])||($_REQUEST["address"])==""){
        echo "<small>All field should be filled</small>";
    }else{
        $name=$_REQUEST['name'];
        $roll=$_REQUEST['roll'];
        $address=$_REQUEST['address'];
        $sql="INSERT INTO student1(name,roll,address) VALUES('$name','$roll','$address')";
        if(mysqli_query($conn,$sql)){
            echo "New data inserted";
        }else{
            echo "Error!during inseretion. please check";
        }

    }
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

    <title>Data inserted in database</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="roll">Roll</label>
                        <input type="text" class="form-control" name="roll" id="roll">
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>