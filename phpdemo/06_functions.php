<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

// $y = 12;
// function registerUser()
// {
//       global $y;
//       echo "$y <br>";
//       $x=10;
//       echo 'User has been registered!';
//       $y = $y + 10;
// }

// //Running  function
// echo $x;
// echo $y;
// registerUser();
// echo $y;

// function registerUser($email)
// {
//       echo $email . ' registered';
// }

// // running a function 
// registerUser('Ryan');

// function add($num1, $num2)
// {
//       return $num1 + $num2;
// }

// $sum = add(11,54);
// echo $sum;

// function add($num1 = 11, $num2 = 23)
// {
//       return $num1 + $num2;
// }

// $sum = add();
// echo $sum;

//Arrow function
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(90,90);