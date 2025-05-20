<?php
// Defining a nested namespace
namespace MyApp\Utilities;
class Helper {
    public function __construct() {
        echo "Helper class in MyApp\Utilities namespace . \n";
    }
}
namespace MyApp\Models;

class User {
    public function __construct() {
        echo "User class in MyApp\Models namespace";
    }
}
// Using the classes from nested namespaces
$helper = new \MyApp\Utilities\Helper();  // From MyApp\Utilities namespace
$user = new \MyApp\Models\User();  // From MyApp\Models namespace
?>