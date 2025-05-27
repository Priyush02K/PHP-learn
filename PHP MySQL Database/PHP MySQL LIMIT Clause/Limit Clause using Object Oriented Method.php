<?php  

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="newbd";

    //connection
    $conn =new mysqli($servername,$username,$password,$dbname);
    // $conn = new mysqli("localhost", "root", "", "newbd"); 



    //condition verifying
if ($conn === false) { 
	die("ERROR: Could not connect. ".$conn->connect_error); 
} 


    //sql
    $sql= "SELECT * FROM employees LIMIT 2";
    // --     id,
    // --    firstname ,
    // --    lastname ,
    // --    email ,
    // --    mobile 
    // -- ) VALUES(3,'Priyush','Khobragade','khobragadepriyushgmail.com',95116893)";
    
    if ($res=$conn->query($sql)) {
        if ($res->num_rows>0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Firstname</th>";
                echo "<th>Lastname</th>";
                echo "<th>Email</th>";
                echo "<th>Mobile</th>";
                echo "</tr>";

        
        while ($row=$res->fetch_array()) 
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['mobile']."</td>";
            echo "</tr>";       
         }
             echo "</table>";
           $res->free();
        }else{
             echo "No matching records are found.";       
        }
       
    }
    else{
        
        echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
    }
    
        // $mysqli->close();

 ?>


 <style>
    table, th, td {
  border: 1px solid;
}
 </style>