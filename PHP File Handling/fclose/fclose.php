<?php 

// $check=fopen("demo.txt","r");
// fclose($check);

$check = fopen("singleline.txt", "r+"); 
$seq = fgets($check); 
   
// Outputs a line of the file until 
// the end-of-file is reached 
while(! feof($check)) 
{ 
  echo $seq ; 
  $seq = fgets($check); 
} 
   
// the file is closed using fclose() function 
fclose($check); 

?>