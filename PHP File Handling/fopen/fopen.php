<?php 

$file=fopen("demo.txt","r+");
if ($file) {
    echo "File opened successfully.";
    fclose($file);
}else{
    echo "Failed to open file.";

}


?>