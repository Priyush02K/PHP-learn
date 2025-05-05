<?php
session_start();
$_SESSION['user'] = 'Alice';
echo $_SESSION['user'];




//step 01. Starting a Session
// session_start(); // Start the session


//2. Storing Data in Sessions
$_SESSION['username'] = 'Priyush'; // Store session data
$_SESSION['user_id'] = 123;

//3. Retrieving Session Data
echo $_SESSION['username']; // Output: Priyush

//4. Checking if Session Variables Exist
if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'];
} else {
    echo "Please log in.";
}

//5. Destroying Sessions
unset($_SESSION['username']); // Remove specific session variable
session_destroy(); // Destroy the session


?>
