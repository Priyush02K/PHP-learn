<?php
class ParentClass {
    protected $message = "Hello from Parent";

    protected function showMessage() {
        return $this->message;
    }
}

class ChildClass extends ParentClass {
    public function getMessage() {
        return $this->showMessage();  // Allowed via inheritance
    }
}

$obj = new ChildClass();
echo $obj->getMessage();  // Works
echo $obj->message;    // Error: Cannot access protected property
?>