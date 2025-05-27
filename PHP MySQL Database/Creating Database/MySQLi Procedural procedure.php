<?php  

    $servername="localhost";
    $username="root";
    $password="";

    //connection
    $conn = mysqli_connect($servername,$username,$password);

    //condition verifying
    if (!$conn ) {
    die("Connection failed: " . mysqli_connect_errno());
    }
    //creating BD

    $sql="CREATE DATABASE newBD";
    if (mysqli_query($conn,$sql)) {
    echo "Database created successfully with the name newDB";
    }
    else{
            echo "Error creating database: " . mysqli_error($conn);

    }

    mysqli_close($conn);
 
 
 ?>