<?php  
class Demo{
    public  $name = "Public assess";

    public function showName(){
        return $this ->name;
    }
}
$obj = new Demo();
echo $obj->name . "<br/>";        
echo $obj->showName();  
?>
?>