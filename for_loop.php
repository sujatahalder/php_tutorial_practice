<?php

for($num=0;$num<=3;$num++){
   echo "<b>outer number:</b> $num  <br/>";
   {
     for($val=1;$val<=3;$val++){
       echo "inner number: $val <br/>";
     }
   }
}

echo "<br/>";

for($num=1;$num<=3;$num++){
  //echo $num;
  {
    for($val=1;$val<=3;$val++){
      echo $num . $val ;
      echo "<br/>";
    
    }
   
   
  }
}

 ?>