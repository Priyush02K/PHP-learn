<?php  
class Database{
 public $connection;

 public function __construct($hostname)
 {
    
 
      $this->connection = "Connected to database at $hostname";
        echo $this->connection;
 }

 public function __destruct()
 {
            echo "\nConnection closed.";

 }

}
$db = new Database("localhost");

  ?>