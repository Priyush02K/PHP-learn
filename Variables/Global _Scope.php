<?php
    $num =60;

    function global_Scope(){

        global $num ;
        echo "Variable num inside function: $num \n";



    }
    global_Scope();

echo "Variable num outside function: $num \n";





?>