<?php 
$link = mysqli_connect("localhost", "root", "", "newdb"); 

if ($link === false) { 
	die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 

$sql = "INSERT INTO mytable (first_name, last_name, age) 
		VALUES('raj', 'sharma', '15'), 
	('kapil', 'verma', '42'), 
	('monty', 'singh', '29'), 
	('arjun', 'patel', '32') "; 
	if (mysqli_query($link, $sql)) 
{ 
	echo "Records added successfully."; 
} 
else
{ 
	echo "ERROR: Could not able to execute $sql. "
		.mysqli_error($link); 
} 

// Close connection 
mysqli_close($link); 
?>