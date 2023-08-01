<?php

// we can write variables like this $message or like this $my_message or $myMessage or $message23
// the hyphen - is not allowed in php variables
// Variables are case sensitive $message is not the same as $Message
// variables can be used to store all sorts of data types
// can be used to store numbers, strings, arrays, objects, resources, booleans, null

//strings
$message = "Hello!";
$name = "John";
$error = 'invalid password';


//Numbers can be integers or floats
$price = 12;
$pi = 3.142;

//booleans
$logged_in = true;
// best practice in php is to use lowercase for true and false like this $logged_in = true;

//null
// null represents a variable with no value
$no_value = null;

// notice that we don't have to declare the type of variable in php like we do in javascript because php is a loosely typed language where are javascript is a strongly typed language
// this means that php is easy to learn and use but it is also easy to make mistakes if you are not careful


//var_dump is a function that prints out the type of variable and the value of the variable in the browser
var_dump($message);
var_dump($price);
var_dump($pi);
var_dump($logged_in);


// double quoted escaped characters:
// ---------------------------------

// double quoted strings are parsed by php and we can use variables inside them unlike single quoted strings which are not parsed by php

// we can use double quotes to escape characters like this \n for new line \t for tab and \\ for backslash

$message = "Hello \n World";

var_dump($message);


// variable interpolation:
// ----------------------

// here the curly braces are used to interpolate the variable inside the string to make it easier to read as opposed to concatenating the variable with the string using the . operator

// echo "hello $name";
echo "hello {$name}";