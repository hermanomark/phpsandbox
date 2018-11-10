<?php

  // same as echo
  print 'Hello World';
  echo '<br/>';
  // echo is a little bit faster than print
  echo 'Hello World';
  echo '<br/>';
  // this is a comment
  # this is also a comment

  /*
  Multiline
  Comment
  */

  #VARIABLES
    // - Prefix $
    // - Start with a letter or an underscore
    // - Only letters, numbers, and underscores
    // - Case Sensitive

  #DATA TYPES
    // String
    // Integers
    // floats
    // Booleans
    // Arrays
    // Objects
    // NULL
    // Resource

  $output = 'Hello World';
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $string1 = 'Hello';
  $string2 = 'World';
  // when you concatinate in php you use a dot
  $greeting = $string1 . ' ' . $string2.'!';
  // double quotes parse the variable so this line would work 
  $greeting2 = "$string1 $string2";

  // escape sequences
  $string3 = 'They\'re Here';
  // this would also wok with double quotes
  $string4 = "They're Here";

  $float1 = 4.4;
  $bool1 = true;
  
  echo $output;
  echo '<br/>';
  echo $sum;
  echo '<br/>';
  echo $greeting;
  echo '<br/>';
  echo $greeting2;
  echo '<br/>';
  echo $string3;
  echo '<br/>';
  echo $string4;

  echo '<br/>';
  // defining a constant
  define('GREETING', 'Hello Everyone', true);
  echo GREETING;
  echo '<br/>';
  // constants is case sensitive in order for this to work add 'true' in define
  echo greeting;

?>
<h1>hello</h1>