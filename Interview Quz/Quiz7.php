<?php 

// php is support nested class
//NO

class  OuterClass{
    public function createInnerClass(){
        return new class{

        };
    }
}

?>