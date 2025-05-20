<?php
class Car {
    // Properties
    public $brand;
    public $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    public function intro() {
        echo "This car is a $this->color $this->brand.";
    }
}

// Creating an object
$myCar = new Car("Toyota", "Red");
$myCar->intro();
?>
