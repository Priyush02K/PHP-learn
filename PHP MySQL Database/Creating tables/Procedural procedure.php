<?php  

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="newbd";


    //connection
    $conn = mysqli_connect($servername,$username,$password ,$dbname);

    //condition verifying
   if (!$conn ) {
    die("Connection failed: " . mysqli_connect_errno());
    }

    $sql = "CREATE TABLE employees2 (
        id INT(2)  PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50)
        )";
        if (mysqli_query($conn, $sql)) {
            echo "Table employees created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
        mysqli_close($conn);
 
 ?>