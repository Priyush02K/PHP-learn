<?php  

    $servername="localhost";
    $username="root";
    $password="";


    //connection
    $conn = mysqli_connect($servername,$username,$password);

    //condition verifying
    if ($conn ->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

 
 
 ?>