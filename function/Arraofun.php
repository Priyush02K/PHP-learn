<?php 

 $add=fn($a,$b) =>$a+$b;
 echo $add(5,5);


 //ex 02
 $y = 1;
$fn1 = fn($x) => $x + $y;
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
var_export($fn1(3)); 
echo "\n";
var_export($fn2(4))
 ?>