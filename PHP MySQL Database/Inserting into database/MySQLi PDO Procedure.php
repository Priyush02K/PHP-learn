<?php 

try{
  $pdo=new PDO("mysql:host=localhost;dbname=newbd", "root",""); 
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
	die("ERROR: Could not connect. ".$e->getMessage()); 

}
try{
    $sql = "INSERT INTO  employees3 (
        id,
        firstname ,
        lastname ,
        email 
        ) VALUES(6,'Usha','agrwal','agrwaal@gmail.com')";
    $pdo->exec($sql);
	echo "Records inserted successfully."; 
}
catch(PDOException $e){
die("ERROR: Could not able to execute $sql. "	.$e->getMessage());
}

//close conn
unset($pdo);
 
 
 ?>