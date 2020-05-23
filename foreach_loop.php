<?php
$name= array("rahul","chini","ganga","rita","rishi");
foreach($name as $val){
    echo $val . "<br/>";
}
echo "<br/>";

$name= array("rahul"=>400,"chini"=>700,"ganga"=>800,"rita"=>900,"rishi"=>240);
foreach($name as $keys=>$val){
    echo $keys . "=" . $val . "<br/>";
}
echo "<br/>";

?>