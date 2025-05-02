<?php 



$myarray = array(
    array(
        array(1, 2),
        array(3, 4),
    ),
    array(
        array(5, 6),
        array(7, 8),
    ),
);
    
// Display the array information
print_r($myarray);




$marks = array(
    
    // Ankit will act as key
    "Ankit" => array(
        
        // Subject and marks are 
        // the key value pair
        "C" => 95,
        "DCO" => 85,
        "FOL" => 74,
    ),
        
    // Ram will act as key
    "Ram" => array(
        
        // Subject and marks are 
        // the key value pair
        "C" => 78,
        "DCO" => 98,
        "FOL" => 46,
    ),
    
    // Anoop will act as key
    "Anoop" => array(
        
        // Subject and marks are
        // the key value pair
        "C" => 88,
        "DCO" => 46,
        "FOL" => 99,
    ),
);

// using dimensions 
    
// It will display the marks of
// Ankit in C subject
echo $marks['Ankit']['C'] . "\n"; 
    
// Accessing array elements using for each loop
foreach($marks as $mark) {
    echo $mark['C']. " ".$mark['DCO']." ".$mark['FOL']."\n"; 
}



?>