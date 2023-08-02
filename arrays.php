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