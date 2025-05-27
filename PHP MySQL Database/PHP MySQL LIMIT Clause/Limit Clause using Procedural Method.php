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
$sql = "SELECT * FROM employees2 LIMIT 2";

if ($res=mysqli_query($conn,$sql)) {
            if (mysqli_num_rows($res)>0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Firstname</th>";
                echo "<th>Lastname</th>";
                echo "<th>Email</th>";
                echo "</tr>";

            while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";
            }
             echo "</table>";
             mysqli_free_result($res);
        }
        else{
        echo "No matching records are found.";
           
        }
    }
else{
     echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
      mysqli_close($conn);  

?>


 <style>
    table, th, td {
  border: 1px solid;
}
 </style>