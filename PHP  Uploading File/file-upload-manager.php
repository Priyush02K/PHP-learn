<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $allowed_ext = array(
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "gif" => "image/gif",
            "png" => "image/png"
        );

        $file_name = $_FILES["photo"]["name"];
        $file_type = $_FILES["photo"]["type"];
        $file_size = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);  // Corrected variable

        if (!array_key_exists($ext, $allowed_ext)) {
            die("Error: Please select a valid file format.");
        }

        // Verify file size - 2MB max
        $maxsize = 2 * 1024 * 1024;

        if ($file_size > $maxsize) {
            die("Error: File size is larger than the allowed limit of 2MB");
        }

        // Verify MIME type of the file
        if (in_array($file_type, $allowed_ext)) {
            // Check whether file exists before uploading it
            if (file_exists("uploads/" . $_FILES["photo"]["name"])) {
                echo $_FILES["photo"]["name"] . " already exists!";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $_FILES["photo"]["name"]);
                echo "Your file uploaded successfully.";
            }
        } else {
            echo "Error: Please try again!";
        }
    } else {
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>
