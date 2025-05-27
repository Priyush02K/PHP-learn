<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newbd";

// Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verify connection
if ($conn === false) { 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
}

// SQL delete query
$sql = "DELETE FROM employees2 WHERE ID = 2";

if (mysqli_query($conn, $sql)) {
    if (mysqli_query($conn,$sql) ) {
        echo "Record was deleted successfully.";
    } else {
        echo "No record found with ID = 2.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
