<?php 
$fruits=["Apple" ,"Banana"];

//01 1. Adding/Removing Elements
array_push($fruits, "Cherry", "Date");
print_r($fruits);

echo "<br>"; 

array_pop($fruits);
print_r($fruits);
echo "<br>"; 

//Removes the first element of an array.
array_shift($fruits);
print_r($fruits);
echo "<br>"; 

//Adds one or more elements to the beginning of an array.
array_unshift($fruits,"Kiwee");
print_r($fruits);
echo "<br>"; 


//02 Sorting
$number=[3,5,8,7,4,1];
sort($number);
print_r($number);
echo "<br>"; 


$person = ["GFG" => 30, "Kriti"=> 25, "Ayushi" => 35];
asort($person);
print_r($person);  // 
echo "<br>"; 

//ksort(): Sorts an associative array by its keys in ascending order.

$person = ["name" => "GFG", "age" => 30, "city" => "India"];
ksort($person);
print_r($person);  // Sorted by key: ["age" => 30, "city" => "India", "name" => "GFG"]
?>