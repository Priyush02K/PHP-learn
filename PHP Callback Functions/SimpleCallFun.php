<?php
function square($number) {
    return $number * $number;
}
function applyCallback($numbers, $callback) {
    foreach ($numbers as $number) {
        echo $callback($number) . "\n";
    }
}
$numbers = [1, 2, 3, 4, 5];
applyCallback($numbers, 'square');
?>