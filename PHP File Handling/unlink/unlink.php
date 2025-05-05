<?php
$file = "gfg.txt";
// Check if the file exists before attempting to delete it
if (file_exists($file)) {
    if (unlink($file)) {
        echo "The file $file has been deleted.";
    } else {
        echo "Error: The file $file could not be deleted.";
    }
} else {
    echo "Error: The file $file does not exist.";
}
?>