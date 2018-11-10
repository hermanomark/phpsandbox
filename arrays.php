<?php
  #Array - Variable that holds multiple values
  
  /*
    - Indexed
    - Associative
    - Multi-dimensional
  */

  // Indexed
  // It's up to you how you define arrays
  $people = array('Kevin', 'Jeremy', 'Sara');
  $ids = array(23, 55, 12);
  $cars = ['Honda', 'Toyota', 'Ford'];
  // adding an array
  $cars[3] = 'Chevy';
  // you can just use empty bracket this would add to the last one
  $cars[] = 'BMW';

  // plenty of fucntions you can use
  // echo count($cars);
  // prints all the arrays
  // print_r($cars);
  // var_dump() this will show us the data type, number of characters and values. You can dump any type of variable
  // var_dump($cars);
  // var_dump('1');

  // echo $people[1];
  // echo $ids[2];
  // echo $cars[4];

  // Associative arrays
  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
  $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
  // echo $people['Brad'];
  // echo $ids[22]php;

  // adding to an associative array
  $people['Jill'] = 42;
  // echo $people['Jill'];
  // print_r($people);
  // var_dump($people);

  // Multi-Dimensional
  $cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
  );

  echo $cars[1][2];
?>