<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FROM VALID</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 500px;
            background: #fff;
            margin: 50px auto;
            padding: 30px 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #45a049;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Feedback Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullname" required></td>
            </tr>

            <tr>
                <td>Email Address:</td>
                <td><input type="email" name="user_email" required></td>
            </tr>

            <tr>
                <td>Age:</td>
                <td><input type="text" name="user_age" required></td>
            </tr>

            <tr>
                <td>Feedback:</td>
                <td><textarea name="user_feedback" rows="3" cols="40"></textarea></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="user_gender" value="Male" required>Male
                    <input type="radio" name="user_gender" value="Female" required>Female
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>


<?php 
          $fullname = $user_email = $user_gender = $user_feedback = $user_age = "";  

          // Check if the form was submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST") {  
              // Only process the POST data if the form is submitted
              if (isset($_POST['fullname'])) {
                  $fullname = htmlspecialchars($_POST['fullname']);
              }
              if (isset($_POST['user_email'])) {
                  $user_email = htmlspecialchars($_POST['user_email']);
              }
              if (isset($_POST['user_age'])) {  // Corrected variable to user_age
                  $user_age = htmlspecialchars($_POST['user_age']);
              }
              if (isset($_POST['user_feedback'])) {
                  $user_feedback = htmlspecialchars($_POST['user_feedback']);
              }
              if (isset($_POST['user_gender'])) {
                  $user_gender = htmlspecialchars($_POST['user_gender']);
              }
          } 

        //display
        echo "<h2>Details Submitted:</h2>";  
        echo "Full Name: " . $fullname . "<br>";  
        echo "Email: " . $user_email . "<br>";  
        echo "Age: " . $user_age . "<br>";  
        echo "Feedback: " . $user_feedback . "<br>";  
        echo "Gender: " . $user_gender; 
?>
</html>