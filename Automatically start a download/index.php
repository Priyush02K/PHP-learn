
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Download</title>
</head>
<head> 
    <meta name="viewport" content= 
        "width=device-width, initial-scale=1"> 
    <style> 
        .btn { 
            background-color: limeGreen; 
            border: none; 
            color: white; 
            padding: 12px 30px; 
            cursor: pointer; 
            font-size: 20px; 
        } 
  
        .btn:hover { 
            background-color: green; 
        } 
    </style> 
</head> 
  
<body> 
    <center> 
        <p>Auto width:</p> 
        <button class="btn"> 
            <i class="fa fa-download">Download</i> 
        </button> 
        <p>Full width:</p> 
        <button class="btn" style="width:100%"> 
            <i class="fa fa-download">Download</i> 
        </button> 
    </center> 

    <form action="downloadFile.php" method="post"> 
<input type="submit" name="submit" value="Download" /> 
</form> 

</body> 
  
</html>

<?php 
	
// Initialize a file URL to 
// the variable 
$url = 
'https://contribute.geeksforgeeks.org/wp-content/uploads/gfg-40.png'; 
	
// Use basename() function to 
// return the file 
$file_name = basename($url); 
	
// Use file_get_contents() function 
// to get the file from url and use 
// file_put_contents() function to 
// save the file by using base name 
if(file_put_contents( $file_name, 
	file_get_contents($url))) { 
	echo "File downloaded successfully"; 
} 
else { 
	echo "File downloading failed."; 
} 
?> 
