<?php
    function processUserAnonymous($callback) {
    $name = "GFG";
    echo $callback($name);
}
processUserAnonymous(function($name) {
    return "Hello, " . $name . "!";
});
?>