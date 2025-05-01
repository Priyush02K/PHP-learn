<?php 
 
  function addRef(&$a,$b){
    $a= $a+ $b;
  }
  $z=10;
  addRef($z,5);
  echo $z;
  
  ?>