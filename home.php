<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial practice</title>
</head>

<body>
<!-- 
<h1>Hello World</h1>
<div id="btn"></div>
<script>
    function change(){
        document.getElementById("btn").innerHTML="DONE";
    
    }
</script>
<input type="button" value="click here" onclick="change();">

<p style="color:red;"><?php echo "welcome to new city"; ?></p> -->

<h1>Page has been submitted</h1>
<?php

echo "<span>Your name is: </span>"."<span style='color:red'>".$_POST["username"]."</span>". "<br/>";

//echo "<span>Your password is: </span>"."<span style='color:red'>".$_POST["pass"]."</span>";
?>
<?php 

if($_POST["pass"]=="butterfly22"){
    echo "<span>Your password is: </span>"."<span style='color:red'>".$_POST["pass"]."</span>";
   }
else 
{
    echo "<span>You have entered a wrong password: </span>"."<span style='color:red'>".$_POST["pass"]."</span>";
}
echo "<br/>";
?>
<?php

echo "Your Gender is: </br>";

if(isset($_REQUEST['rad1'])){
    echo $_REQUEST['rad'] . "</br>";

}
?>
<?php
echo "Your stream is: </br>";

if(isset($_REQUEST['chk1'])){
    echo $_REQUEST['chk1'] . "</br>";

}
if(isset($_REQUEST['chk2'])){
    echo $_REQUEST['chk2'] . "</br>";

}
if(isset($_REQUEST['chk3'])){
    echo $_REQUEST['chk3'] . "</br>";

}
if(isset($_REQUEST['chk4'])){
    echo $_REQUEST['chk4'] . "<br/>";

}
?>
<?php

echo "Your preffered city is: </br>";

if(isset($_REQUEST['location'])){
    foreach($_REQUEST['location'] as $place)
    {
        echo $place . "</br>";

    }
 

}
?>



</body>

</html>