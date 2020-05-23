<?php 
$name= array(
    array("sujata","puja","rita","sima","tina","siya","anita"),
    array(12,13,45,35,47,68,43),
    array("red","green","yellow","pink","white","violet","grey")

    
);
for($i=0;$i<count($name);$i++){
    for($j=0;$j<count($name[$i]);$j++){
        echo $name[$i][$j] ." " ;
        //echo "<br/>";
    }
echo "<br/>";
}

?>
   
   