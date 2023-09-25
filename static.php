<?php

/**
 * Add a static method in the Person class
 * to count the number of Person Objects created
 */

class Person
{
  public $name;
  private $age;

  private static $count = 0;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;

    // When Person class is Instanciated, increment the count variable
    self::$count++;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge($newAge)
  {
    $this->age = $newAge;
  }

  public static function countCreatedObjects()
  {
    return self::$count;
  }
}

$person1 = new Person('Person One', 20);
$person2 = new Person('Person One', 25);
$person3 = new Person('Person One', 30);
$person4 = new Person('Person One', 50);
$person5 = new Person('Person One', 27);

echo 'The Person Object was instanciated ' . Person::countCreatedObjects() . ' times';
