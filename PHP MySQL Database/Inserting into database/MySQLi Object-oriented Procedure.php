<?php  

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="newbd";

    //connection
    $conn =new mysqli($servername,$username,$password,$dbname);
    // $conn = new mysqli("localhost", "root", "", "newbd"); 



    //condition verifying
if ($conn === false) { 
	die("ERROR: Could not connect. ".$conn->connect_error); 
} 


    //sql
    $sql="INSERT INTO  employees(
        id,
       firstname ,
       lastname ,
       email ,
       mobile 
    ) VALUES(6,'isha','lanjewar','lanjewarish09@gmail.com',5478565)";


if ($conn->query($sql)===TRUE) {
	echo "Records inserted successfully."; 
}
 else{
    echo "ERROR: Could not able to execute $sql. ".$mysqli->error;         

 }


 $conn->close();
 
 ?>