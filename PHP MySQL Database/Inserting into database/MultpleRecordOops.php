<?php 
$mysqli = new mysqli("localhost", "root", "", "newbd"); 

if ($mysqli === false) { 
	die("ERROR: Could not connect. ".$mysqli->connect_error); 
} 

$sql = "INSERT INTO mytable (first_name, last_name, age) 
		VALUES('raj', 'sharma', '15'), 
	('kapil', 'verma', '42'), 
	('monty', 'singh', '29'), 
	('arjun', 'patel', '32') "; 
	if ($mysqli->query($sql) === true) 
{ 
	echo "Records inserted successfully."; 
} 
else
{ 
	echo "ERROR: Could not able to execute $sql. "
		.$mysqli->error; 
} 

$mysqli->close(); 
?>