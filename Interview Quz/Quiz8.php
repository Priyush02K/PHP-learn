<?php 

$age = 5; // You had "Sage = 5;" — fixed to "$age = 5;"

echo $age >= 18 ? "You are adult" : "You are not adult";

$age = 13;

echo $age >= 18 ? "You are an adult" :  ($age >= 13 ? "You are a teenager" :"You are a kid");



?>