<?php 


$array=array(20=>"apple",1=>"a","1"=>"b",true=>"d",0=>"e");
echo $array[1];



//  Step-by-step Key Resolution:
// 1 => "a"

// "1" => "b"

// "1" (string) is cast to int (1) ⇒ overwrites previous 1 => "a"

// true => "d"

// true is also cast to 1 ⇒ overwrites 1 => "b"

// Final value at key 1 is "d"

// 0 => "e" stays

// 20 => "apple" stays
?>