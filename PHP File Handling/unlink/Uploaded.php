<?php
$uploadedFile = "uploads/image.jpg";
// Delete the uploaded file after processing
if (unlink($uploadedFile)) {
    echo "The uploaded file has been deleted.";
} else {
    echo "Failed to delete the uploaded file.";
}
?>