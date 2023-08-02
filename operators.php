<?php

// depending on the type of value in a variable we can perform different operations on it
// for example we can perform arithmetic operations on numbers like + - * / %

$count = 10;
$size = 2;


var_dump($count + $size);
var_dump($count - $size);
var_dump($count * $size);
var_dump($count / $size);

// String operators: 
//-----------------

$message = "Hello";
$name = "John";

// we can use the concatenation operator to join two strings together using . and " " to add a space between the two strings
echo $message ." ". $name . " ";



//Type Juggling and casting are two ways to convert a value from one type to another:
//------------------------------------------------------------------------------------

// Juggling is when php automatically converts a value from one type to another in our case the price was converted from a string to a number automatically.
// now price type converted to an integer
$price = "150";
$quant = 3;
$price = $price * $quant;

var_dump($price);



// for Boolen values we have logical operators like and, or,  not,  xor
//----------------------------------------------------------------------

$is_editor = true;
$is_admin = false;

var_dump($is_editor);
var_dump(! $is_editor); // here we are negating the value of $is_editor

// we can use the and operator to check if both values are true
var_dump($is_editor and $is_admin);

//output: bool(false)

// we can use the or operator to check if one of the values is true
var_dump($is_editor or $is_admin);

//output: bool(true)


// we can use the xor operator to check if one of the values is true but not both only one of them
var_dump($is_editor xor $is_admin);

//output: bool(true) because only one of the values is true