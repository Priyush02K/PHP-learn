<?php 

    //1. Single Quotes

    $name="we can go online  <br>" ;

    echo $name;

    //2.Double 

    echo "Welcome to GeeksforGeeks \n";
    $site  = "GeeksforGeeks \n";
    echo "Welcome to $site <br> <br>";


    //3. Heredoc Syntax

    $input  = <<<testHeredoc
    Welcome to GeeksforGeeks.
    Started content writing in GeeksforGeeks!.
    I am enjoying this.
    testHeredoc;
    echo "$input   <br >";

    $input = <<<'testNowdoc'


    Welcome to GeeksforGeeks.
    Started content writing in GeeksforGeeks!.
    testNowdoc;
    echo $input;

    // Directly printing string 
    // without any variable
    echo <<<'Nowdoc'
    Welcome to GFG .
    Learning PHP is fun in GFG.
    Nowdoc;





 
 ?>
