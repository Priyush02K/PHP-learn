<?php 

try{
  $pdo=new PDO("mysql:host=localhost;dbname=newbd", "root",""); 
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
	die("ERROR: Could not connect. ".$e->getMessage()); 

}
try{

    $sql="DELETE  FROM employees3 WHERE id=2";
    $pdo->exec($sql);
    echo "Record was deleted successfully.";

   
}
catch(PDOException $e){
die("ERROR: Could not able to execute $sql. "	.$e->getMessage());
}

//close conn
unset($pdo);
 
 
 ?>

