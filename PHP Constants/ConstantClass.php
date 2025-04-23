<?php  

    //Outside the Class
    class code{
        const name="Priyush";
    }

    echo code::name
 
    //inside class
    class pen{
        const names="Cello";

        public function Right(){

            echo self::names;
        }
    }

    
    $val = new pen();
    $val->Right();
  ?>