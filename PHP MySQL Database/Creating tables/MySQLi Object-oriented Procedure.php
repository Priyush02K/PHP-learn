<?php  

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="newbd";

    //connection
    $conn =new mysqli($servername,$username,$password,$dbname);

    //condition verifying
    if ($conn ->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }


    //sql
    $sql="CREATE TABLE employees(
       id INT(2) PRIMARY KEY,
       firstname VARCHAR(30) NOT NULL,
       lastname VARCHAR(30) NOT NULL,
       email VARCHAR(50),
       mobile INT(10)
    
    
    )";


if ($conn->query($sql)===TRUE) {
    echo "Table employees created successfully";
}
 else{
        echo "Error creating table: " . $conn->error;

 }

 $conn->close();
 
 ?>