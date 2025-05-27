<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=newDB", $username, $password);
    // setting the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE newDB";
    // using exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully with the name newDB";
    }
catch(PDOException $e)
    {
    echo $sql . " " . $e->getMessage();
    }
$conn = null;
?>