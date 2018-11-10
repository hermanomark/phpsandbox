<?php 
  # FUNCTION - Block of code that can be repeatedly called

  /*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()

    Camel case and lower case is usually use for functions
    Pascal case is usually use for classes

    different frameworks use different cases
  */

  // Create Simple Function
  function simpleFunction() {
    echo 'Hello World';
  }

  // Run Simple Function
  // simpleFunction();

  // Function with Param
  function sayHello($name = 'World') {
    echo "Hello $name <br/>";
  }

  // sayHello('Joe');
  // sayHello('Bob');
  // this will cause an error but we could put a default value in the function, for sample it's $name = 'World'
  // sayHello();

  // Return Value
  function addNumbers($num1, $num2) {
    return $num1 + $num2;
  }

  // echo addNumbers(2,3);
  
  // By Reference - isn't use much
  $myNum = 10;

  // this would not change $myNum
  function addFive($num) {
    $num += 5;
  }

  // this would change $myNum because we added ampersand
  function addTen(&$num) {
    $num += 10;
  }

  addFive($myNum);

  echo "Value: $myNum<br/>";

  addTen($myNum);

  echo "Value: $myNum<br/>"

  // these are all user define functions
?>