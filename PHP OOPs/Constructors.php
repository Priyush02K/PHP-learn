<?php
class Car {
    public $model;
    public $color;
    // Constructor
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    public function display() {
        echo "Model: $this->model, Color: $this->color";
    }
}
$myCar = new Car("BMW", "Red-Black");
$myCar->display();
?>