<?php

// depending on the type of value in a variable we can perform different operations on it
// for example we can perform arithmetic operations on numbers like + - * / %

$count = 10;
$size = 2;


var_dump($count + $size);
var_dump($count - $size);
var_dump($count * $size);
var_dump($count / $size);

// oprators can be used on strings value

$message = "Hello";
$name = "John";

// we can use the concatenation operator to join two strings together using . and " " to add a space between the two strings
2echo $message ." ". $name;