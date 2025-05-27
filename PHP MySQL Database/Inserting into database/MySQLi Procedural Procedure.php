<?php  

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="newbd";


    //connection
    $conn = mysqli_connect($servername,$username,$password ,$dbname);

    //condition verifying
    //condition verifying
if ($conn === false) { 
	die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 


    $sql = "INSERT INTO  employees2 (
        id,
        firstname ,
        lastname ,
        email 
        ) VALUES(5,'Nina','dube','ninadube02@gmail.com')";



        if (mysqli_query($conn, $sql)) {
        	echo "Records inserted successfully."; 
        } else {
        echo "ERROR: Could not able to execute $sql. "	.mysqli_error($conn);         }
        mysqli_close($conn);
 
 ?>