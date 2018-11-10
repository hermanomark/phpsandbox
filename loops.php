<?php
  # LOOPS - Execute code set number of times

  /*
    For
    while
    Do While
    Foreach
  */

  # For Loop
  # @params - init, condition, inc

  for($i = 5; $i <= 10; $i++) {
    echo 'Number ' . $i;
    echo '<br/>';
  } 

  # While Loop
  # @params - condition

  $i = 0;

  while ($i < 10) {
    echo $i;
    echo '<br/>';
    $i++;
  }

  // while loop is used over for loop if you don't know the set condition

  # Do...while // isn't use much
  # @params - condition

  $i = 0;

  do {
    echo $i;
    echo '<br/>';
    $i++;
  }

  while($i < 10);

  # Foreach Loop - For arrays

  // Sample loop for indexed array
  $people = array('Brad', 'Jose', 'William');

  foreach($people as $person) {
    echo $person;
    echo '<br/>';
  }

  // Sample loop for associative array
  $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com');

  foreach($people as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br/>';
  }

?>