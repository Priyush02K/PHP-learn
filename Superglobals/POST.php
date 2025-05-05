<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
    
    <form action="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <label for="name">Please enter the name :</label>
        <input name="name" type="text "> <br>
        <label for="age">Please enter the Age :</label>

        <input name="age" type="text "> <br>

        <button type="submit">Submit</button>

        <?php 

            $nm=$_POST['name'];
            $age=$_POST['age'];

            echo "<strong>".$nm." is $age years old.</strong>";

            
        ?>
 



    </form>
    
</body>
</html>



<!-- HTML Form -->
<form method="post" action="form.php">
  Name: <input type="text" name="name">
  <input type="submit">
</form>

<!-- form.php -->
<?php
echo "Hello, " . $_POST['name'];
?>
