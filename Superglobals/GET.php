<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="cyan">

<?php
    $name= $_GET['name'];
    $city = $_GET['city'];
    echo "<h1>This is ".$name." of ".$city."</h1><br>";

 ?>
     <img src = "2.jpg" alt = "nanilake" height = "400" width="500" />

    
    
</body>
</html>



<!-- URL: http://localhost/index.php?name=John -->
<!-- <?php
echo "Hello, " . $_GET['name'];
?> -->
