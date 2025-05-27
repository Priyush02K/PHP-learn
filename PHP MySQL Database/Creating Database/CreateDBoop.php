<?php  
 
 //MySQLi Object-oriented procedure: 
    $servername="localhost";
    $username="root";
    $password="";

    //connection
    $conn =new mysqli($servername,$username,$password);

    //condition verifying
    if ($conn ->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    //creating DB

 $sql="CREATE DATABASE newBD";
 if ($conn->query($sql)==TRUE) {
    # code...
        echo "Database created successfully with the name newDB";

 }else{
        echo "Error creating database: " . $conn->error;

 }
 
 $conn->close();
 ?>