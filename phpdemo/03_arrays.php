<?php
/* ---------------- ARRAYS ----------------  */

/* Array hold multiple values. Each value in an array is called "element" */

//Simple array of number
// $number = [1,2,3,4,5];
// $fruits = ['apple', 'orange', 'banana'];

// echo $number[0];
// var_dump($number);
// echo $fruits[1];
// echo $number[2] + $number[3];

//Associative Arrays
// Associative arrays allows us to use named to identify value
// $colors = [
//       1 => 'red',
//       2 => 'green',
//       3 => 'blue',
//       4 => 'yellow',
// ];

// echo $colors[3];

// Strings as keys
// $hex = [
// 'red' => '#f00',
// 'green' => '#0f0',
// 'blue' => '#00f',
// ];

// echo $hex['red'];
// var_dump($hex);

// Multi-dimensional arrays are often used to store data in a table format

//Single Person
// $person = [
//       'first_name' => 'Ryan',
//       'last_name' => 'Azur',
//       'emai' => 'razur@gmail.com'
// ];

// echo $person['first_name'];

// Multidimensional array 
$people = [
      [
      'first_name' => 'Ryan',
      'last_name' => 'Azur',
      'email' => 'razur@gmail.com',
      ],
      [
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'Jdelacruz@gmail.com',
            ],
            [
                  'first_name' => 'Maria',
                  'last_name' => 'Santos',
                  'email' => 'msantos@gmail.com',
                  ],
];

// echo $people[2]['last_name'];

//Encode to JSON
// var_dump(json_encode($people));

//deconde to JSON
$jsonobj = '{"first_name":"Ryan","last_name":"Azur","email":"razur@gmail.com"}';
var_dump(json_decode($jsonobj));