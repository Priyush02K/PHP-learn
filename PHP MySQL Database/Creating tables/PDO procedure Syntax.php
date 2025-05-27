<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newbd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
                                                $username, $password);
    
    
    // setting the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql code to create table
    $sql = "CREATE TABLE employees3 (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50)
            )";

    // using exec() because no results are returned
    $conn->exec($sql);
    echo "Table employees created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>