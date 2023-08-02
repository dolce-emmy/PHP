<?php

// Create an array
// this is the most common way to create an array with []

$articles = [
    "The first article",
    "The second article",
    "The third article"
];

// or you can use the array() function

$articles = array(
    "article 1",
    "article 2",
    "article 3"
);

// echo doesn't work with arrays

//echo $articles; // this will not work

var_dump($articles); // this will work

// we can access the elements of an array using the index of the element same as javascript

var_dump("first article is {$articles[0]}");

//----------------------------------------------------------------------------------------------------------------------

// we can manually set the index of an array element like this:

$topic = [
    10 => "PHP",
    20 => "HTML",
    30 => "CSS"
];

//here we are setting the index of the array elements to 10, 20, 30 so php is index 10 not 0



// Associative arrays:
//--------------------

// Associative arrays are arrays that use key value pairs instead of indexes 
// we can create associative arrays like this:

$topic = [
    "name" => "PHP",
    "type" => "backend"
];

//var_dump($topic);
var_dump("The name of the topic is {$topic['name']}");