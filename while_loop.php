$fees =array("rahul"=>300 ,"tina"=>600,"tiye"=>900,"riya"=>400);
  
$keys=array_keys($fees);

$i=0;
while($i<count($keys)){
    echo $keys[$i] ."=". $fees[$keys[$i]] . "<br/>";
    $i++;
}
