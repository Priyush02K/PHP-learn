<?php  

    $x=10;
    $y=20;

    function multiplication(){
        $GLOBALS['z']=$GLOBALS['x'] * $GLOBALS['y'];

    }

    multiplication();
    echo $z;
    
  
  ?>