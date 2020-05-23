<?php 
$y = 12;
$a = function($p){
    echo "my number :" . $p ."<br/>";
};
$a($y);//call anonymus func with parameter

function disp($b_func){
     echo $b_func();
}
disp(function(){//call a funtion with an anonymus func as a parameter
    return "Hello";
});
echo "<br/>";
function display(){ //function return a function
    return function(){
        return "Hello World";
    };
}
 $val=display();
 echo $val();

//display();
?>
   
   