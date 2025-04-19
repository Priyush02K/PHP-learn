<?php 
    $num =60;
    function local_var(){
        $num=50;
            echo "Variable num inside function is: $num \n  <br>";

    }


    local_var();
    echo "Variable num outside function is: $num";

?>