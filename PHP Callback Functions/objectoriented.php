<?php
    class Greeter {
    public function greet($name) {
        return "Hello, " . $name . "!";
    }
}
function processUserMethod($callback) {
    $name = "GFG";
    echo $callback($name);
}
$greeter = new Greeter();
processUserMethod([$greeter, 'greet']);
?>