<?php

function greet($name){
    return "hello, ". $name ."<br>";
    }

function add(int $a, int $b){
    return $a + $b;
}

echo add(5,6);
echo greet("Alice");
greet("Agnes");
greet("Bonney");
?>



