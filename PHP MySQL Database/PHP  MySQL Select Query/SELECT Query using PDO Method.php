<?php 

try{
  $pdo=new PDO("mysql:host=localhost;dbname=newbd", "root",""); 
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
	die("ERROR: Could not connect. ".$e->getMessage()); 

}
try{

    $sql="SELECT * FROM employees3";
      $res = $pdo->query($sql);
    if ($res->rowCount() > 0) {

         echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Firstname</th>";
                echo "<th>Lastname</th>";
                echo "<th>Email</th>";
                echo "</tr>";

             while ($row=$res->fetch()) 
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";       
         }

           echo "</table>";
           unset($res);
    }  
 else {
        echo "No matching records are found.";
    }

    // $sql = "INSERT INTO  employees3 (
    //     id,
    //     firstname ,
    //     lastname ,
    //     email 
    //     ) VALUES(6,'Usha','agrwal','agrwaal@gmail.com')";
    // $pdo->exec($sql);
	// echo "Records inserted successfully."; 
}
catch(PDOException $e){
die("ERROR: Could not able to execute $sql. "	.$e->getMessage());
}

//close conn
unset($pdo);
 
 
 ?>

  <style>
    table, th, td {
  border: 1px solid;
}
 </style>