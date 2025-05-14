<?php
function greet($name) {
    return "Hello, " . $name . "!";
}
function processUser($callback) {
    $name = "Priyush";
    echo $callback($name);
}
processUser('greet');
?>