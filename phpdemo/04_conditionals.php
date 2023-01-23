<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to (assignment operator)
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/ 
//age = 20, lets check if eligible to vote
// $age = 17;
// if ($age >= 18) {
//       echo 'You are old enough to vote!';
// } else {
//       echo 'Sorry, you are not eligible to vote!';
// }

//1-12: morning; 13-17: afternoon; 18-24: evening
// $t = date('h'); // or $t = 17
// echo $t;

// if ($t <= 12) {
//       echo 'have a great morning!';
// } elseif ($t <=17) {
//       echo 'have a great afternoon';
// } else {
//       echo 'Have a great evening';
// }

$posts = ['ayos'];

// if(!empty($posts)){
//  echo $posts[0];
// } else {
//       echo ' There are no posts';
// }

//Ternary Operator

// The ternary operator is a shorthand if statement 

// ternary syntax 
// condition ? true : false;

// $firstPost = !empty($posts) ? $posts[0] : 'no posts'; //null
// echo $firstPost;

//Switch Statement
$favcolor = 'green';

switch ($favcolor) {
      case 'red' :
            echo ' Your favorite color is red!';
            break;
      case 'green' :
            echo ' Your favorite color is green!';
            break;
      case 'blue' :
            echo ' Your favorite color is blue!';
            break;
            default:
            echo ' Your favorite color is neither red, green or blue';
}





