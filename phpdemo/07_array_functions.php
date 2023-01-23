<?php
/* -------------- Array Function -------------- */
/* Function to work with arrays
http://www.php.net/mutual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

//get array length
// echo count (fruits);

//search array
// echo in_array('banana', $fruits);
// var_dump(in_array('banana',fruits));

// $fruits[] = 'grape'; // add to end
//  array_push($fruits, 'mango', 'raspberry'); // add to the end using push
//  array_unshift($fruits, 'kiwi'); // add to the beginning
// print_r($fruits);

//remove from an array
// array_pop($fruits); //raspberry remove from end
// array_shift($fruits); //kiwi remove from begin
// print_r($fruits);

//remove specific element
// unset($fruits[2]); //remove orange
// print_r($fruits);

//split into chunk of 2
// $chunkedArray = array_chunk($fruits, 2);
// print_r($chunkedArray);

//Conctenate Array
// $arr1 = [1,2,3];
// $arr2 = [4,5,6];
// $arr3 = array_merge($arr1, $arr2);
// print_r($arr3);

// $arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

//Combine arrays (keys and values)
// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple', 'banana'];
// $c = array_combine($a, $b);
// print_r($c);

//Array of keys
// $keys = array_keys($c);
// print_r($keys);

//Flip keys with values
// $flipped = array_flip($c);
// print_r($flipped);

//Create array of number with range
$numbers = range(1, 10);
print_r($numbers);

//Map through array and create a new one

$newNumber = array_map(function ($number){
      return "Number $number";
}, $numbers);
print_r($newNumber);

//Filter array
$lessThan5 = array_filter($numbers, fn($number) => $number <= 5);
print_r($lessThan5);

//Array reduce
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
print_r($sum);