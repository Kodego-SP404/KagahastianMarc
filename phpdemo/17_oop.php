<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
      //Properties are just variables that belong to a class
      //Access modifiers: public, private, protected
      //public - can be access from everywhere
      //private - can only be access from inside the class
      //protected - can only be accessed from inside the class and by inheriting classess
      public $name;
      public $email;
      public $password;

      //The constructor is called whenever an object is created from the class.
      //We pass in properties to the constructor from the outside
      public function __construct($name, $email, $password)
      {
            $this -> name = $name;
            $this -> email = $email;
            $this -> password = $password;
      }

      //Medthods are function that belong to a class
      function set_name($name){
            $this -> name = $name;
      }

      function get_name() {
            return $this -> name;
      }
}
//Instantiaate a new User
$user1 = new User('Ryan', 'ryan@gmail.com', '12345');
$user2 = new User('Benjie', 'benjie@gmail.com', 'qwerty');

// echo $user1 -> email;
// echo $user2 -> name;

// $user1 = new User();
// $user2 = new User();

//Putting values to user
// $user1 -> set_name('Ryan');
// $user2 -> set_name('Juan');

// var_dump($user1);
// echo $user1 -> get_name();
// echo $user2 -> name;

//Inheritance
class Employee extends User {
      public function __construct($name, $email, $password, $title)
      {
      parent::__construct($name, $email, $password,);
      $this-> title = $title;
}

public function get_title() {
      return $this -> title;
}
}

$employee1 = new Employee('Catrice', 'catrice@gmail.com', '12345', 'Manager');
echo $employee1 -> get_title();
