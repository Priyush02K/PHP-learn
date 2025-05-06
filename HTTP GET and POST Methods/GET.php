
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET METHOD</title>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="GET">
    Name: <input type="text" name="name">
    <br>    <br>
    Weight:<input type="text" name="weight">
   <br>    <br>
    <input type="submit">


</form>
    
</body>
</html>



<?php  


error_reporting(0);
if ($_GET["name"] ||$_GET["weight"]) 
{
    echo "welcome  " . $_GET['name']; 
    echo "<br/>";

    echo "You are  " . $_GET['weight'] ."kgs "; 
    echo "<br/>";

    exit();
}

?>