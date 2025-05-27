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
    $sql= "DELETE FROM employees WHERE id=2";
    
    if ($conn->query($sql)===true) {
            echo "Record was deleted successfully.";

    }else{
         echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    $conn->close();
   
 ?>


 