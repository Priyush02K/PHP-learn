<?php
$file = fopen("demo.txt", "r");

if ($file) {
    $content = fread($file, filesize("demo.txt"));
    fclose($file);
    echo $content;
} else {
    echo "Failed to open the file.";
}
?>