
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET METHOD</title>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="POST">
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
if ($_POST["name"] ||$_POST["weight"]) 
{
   

    if (preg_match("/[^A-Za-z'-]/",$_POST['name'])) 
    {
        die ("invalid name and name should be alpha");

        # code...
    }
    echo "welcome  " . $_POST['name']; 
    echo "<br/>";

    echo "You are  " . $_POST['weight'] ."kgs "; 
    echo "<br/>";
    exit();
}

?>

