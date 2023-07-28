<?php

// we can write variables like this $message or like this $my_message or $myMessage or $message23
// the hyphen - is not allowed in php variables
// Variables are case sensitive $message is not the same as $Message
// variables can be used to store all sorts of data types
// can be used to store numbers, strings, arrays, objects, resources, booleans, null

//strings
$message = "Hello!";
$error = 'invalid password';


//Numbers can be integers or floats
$price = 12;
$pi = 3.142;

//booleans
$loggedIn = true;

//null
$noValue = null;


//var_dump is a function that prints out the type of variable and the value of the variable in the browser
var_dump($message);
var_dump($price);
var_dump($pi);
var_dump($loggedIn);


