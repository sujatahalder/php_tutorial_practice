<?php 


$name= array("sujata","puja","rita","sima","tina","gita","riya","siya","anita");

echo "Total students is:  " . count($name) . "<br/>";

for($i=0;$i<=8;$i++){
  echo $name[$i] . "<br/>";

}
echo "<br/>";

$fees = array("rahul"=>500,"gita"=>300,"rini"=>700,"pari"=>400,"tina"=>600,"sujata"=>1000,"adi"=>600);
//echo $fees["rahul"];
$keys = array_keys($fees);
//echo $keys[2] . "<br />";
for($i=0;$i<count($keys);$i++){
  echo $keys[$i] ."=>". $fees[$keys[$i]] . "<br/>";
}
 

?>
   
   