<?php  
class Myclass{
    private $secret = "Top Secret";

    public function getSecret(){
        return $this ->secret;
    }
    public function revealSecret(){
            return $this->getSecret();  // Allowed internally


    }
}
$obj = new MyClass();
echo $obj->revealSecret(); // Works
echo $obj->secret;      // Error: Cannot access private property
echo $obj->getSecret();  
?>
?>