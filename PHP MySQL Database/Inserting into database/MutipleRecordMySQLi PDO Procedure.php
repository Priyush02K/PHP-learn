<?php 
try { 
	$pdo = new PDO("mysql:host=localhost;dbname="newdb", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 

try { 
	$sql = "INSERT INTO mytable (first_name, last_name, age) 
		VALUES('raj', 'sharma', '15'), 
			('kapil', 'verma', '42'), 
			('monty', 'singh', '29'), 
			('arjun', 'patel', '32') "; 
	$pdo->exec($sql); 
	echo "Records inserted successfully."; 
} 
catch (PDOException $e) { 
	die("ERROR: Could not able to execute $sql. "
			.$e->getMessage()); 
} 
unset($pdo); 
? >