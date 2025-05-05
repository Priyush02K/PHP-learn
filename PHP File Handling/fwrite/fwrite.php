<?php 
// Opening a file 
$myfile = fopen("gfg.txt", "w"); 

// writing content to a file using fwrite() 
echo fwrite($myfile, "Geeksforgeeks is a portal for geeks!"); 

// closing the file 
fclose($myfile); 
?> 
