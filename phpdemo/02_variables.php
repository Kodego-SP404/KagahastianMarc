<?php
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$fname = 'Marc'; //String can be single or double quotes
$age = 41; //integer
$hasKids = False; //Boolean true = 1 , false = null
$cashOnHand = 10; //float

// echo "$fname is $age years old";
// echo $hasKids;
// var_dump($hasKids);
// echo $cashOnHand;
// var_dump($cashOnHand);

//This will not work
// echo '$fname is $age years old';

//concatenate strings
// echo "$fname is $age years old";
// echo "<br>";
echo $fname . ' is ' . $age . ' years old';
echo nl2br("\n$fname is $age years old");

//Arithmettic Operators
echo "<br>";

echo '5' + '5';
$x = '5' + '5';
echo "<br>";
echo $x;
var_dump($x);
echo "<br>";
echo 5 + 5;

echo "<br>";
echo 10 - 6;

echo "<br>";
echo 95 * 95;

echo "<br>";
echo 500 / 25;

//Constants - Cannot be changed
echo "<br>";
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

var_dump(HOST);