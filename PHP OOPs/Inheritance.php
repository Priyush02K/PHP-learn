<?php

// Class Geeks
class Geeks {
  public function sayhello() {
     echo "Hello";
  }
}

// Trait forGeeks
trait forGeeks {
  public function sayfor() {
     echo " Geeks";
  }
}

class Sample extends Geeks {
   use forGeeks;
   public function geeksforgeeks() {
      echo "\nGeeksforGeeks";
  } 
}

$test = new Sample();
$test->sayhello();
$test->sayfor();
$test->geeksforgeeks();
?>