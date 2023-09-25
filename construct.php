<?php

/**
 * Extend the Person class to include a constructor method
 * that initilizes the name and age properties
 */

class Person
{
  public $name;
  public $age;

  // Constructor to initialize properties
  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
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

  private function callToPublicNameAndAge()
  {
    return "{$this->name} is {$this->age} years old.";
  }

  public function getNameAndAge()
  {
    return $this->callToPublicNameAndAge();
  }
}

//Instanciation of Person class
$obj1 = new Person('Mueez', 24);
$obj2 = new Person('Bolaji', 20);

echo $obj1->getNameAndAge() . '<br>'; 
echo $obj2->getNameAndAge() . '<br>'; 




// echo $obj1->getAge();






// echo 'Hello, my name is ' . $obj1->getName() . ' I am ' . $obj1->getAge() . ' years old <br>';
// echo 'Hello, my name is ' . $obj2->getName() . ' I am ' . $obj2->getAge() . ' years old';
