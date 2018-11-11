<?php
  class Person {

    // Access modifiers:
    // public - can acces it from anywhere outside of the class
    // private - can only access it in this class
    // protected - we can only access it from this class and any other classes that extends this one
    
    // this isn't very good practice
    // when you wanna interact with properties is make them private and then create a public function to reach in
    // public $name;
    // public $email;

    private $name;
    private $email;
    // the ability to use static, you don't need to instantiate to use them
    // public static $ageLimit = 40;
    // you can also do them in methods
    private static $ageLimit = 40;

    // you don't wanna set all the time especially if you have many properties, so we can do a constructor that runs when the object is created you can actally pass things into it and you can do your set in there
    public function __construct($name, $email) {
      $this->name = $name;
      $this->email = $email;
      // get the name of the class __CLASS__
      echo __CLASS__.' created<br>';
    }

    public function __destruct() {
      // get the name of the class __CLASS__
      echo __CLASS__.' destroyed<br>';
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getName() {
      // $this reference something from within the class
      return $this->name.'<br>';
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getEmail() {
      // $this reference something from within the class
      return $this->email.'<br>';
    }

    public static function getAgeLimit() {
      return self::$ageLimit;
    }
  }

  // instantiate
  // $person1 = new Person;

  // in php when you wanna access the property you would use ->
  // $person1->name = 'John Doe';
  // in javascript
  // person.name

  // echo $person1->name;

  // $person1->setName('John Doe');
  // echo $person1->getName();

  // $person1 = new Person('John Doe', 'jdoe@gmail.com');
  // echo $person1->getName();


  // Satic props and method
  // echo Person::$ageLimit;
  echo Person::getAgeLimit();

  class Customer extends Person {
    private $balance;

    public function __construct($name, $email, $balance) {
      $this->balance = $balance;
      parent::__construct($name, $email, $balance);
      echo 'A new '.__CLASS__.' has been created'.'<br>';
    }

    public function setBalance($email) {
      $this->balance = $balance;
    }

    public function getBalance() {
      // $this reference something from within the class
      return $this->balance.'<br>';
    }
  }

  // $customer1 = new Customer('John Doe', 'jdoe@gmail.com', 300);

  // echo $customer1->getBalance();
?>