<?php
echo "first line " . "<br/>";
function disp($a){
    if($a<=10){
        echo "number is :" . $a . "<br/>" ;
        return true;
    }
    else {
        return false;
    }

}
disp(13) or die("Error:enter a valid number");
echo "rest of the code ";
?>