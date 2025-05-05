<?php 

$file=fopen("demo.txt","w");
if ($file) {
    fwrite($file, "\nAppended text.");
    fwrite($file,"this is sample txt");
    echo "Data written to file successfully.";
    fclose($file);
}else{
    echo "Failed to open file for writing.";


}


?>