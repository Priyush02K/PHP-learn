<?php 
abstract class Base 
{ 
    abstract function printdata(); 
    function pr() 
    { 
        echo "Base class"; 
    } 
} 

class Derived extends Base 
{ 
    function printdata() { 
        echo "Derived class"; 
    } 
} 

// Creating an object of Derived class
$b1 = new Derived; 
$b1->printdata(); 
?>