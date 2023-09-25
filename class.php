<?php

/**
 * Create a basic Person class with properties like
 *  name, age and methods like
 *  getName(), getAge(), setAge()
 */

class Person
{
  public $name = 'Bolaji';
  public $age = 20;

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
}

















// class Person
// {
//   public $name;
//   public $age;

//   public function getName()
//   {
//     return $this->name;
//   }

//   public function getAge()
//   {
//     return $this->age;
//   }

//   public function setAge($newAge)
//   {
//     $this->age = $newAge;
//   }
// }

// $obj1 = new Person();
// $obj1->name = 'Mueez Bolaji';
// $obj1->age = 24;

// $obj2 = new Person();
// $obj2->name = 'Mat Isac';
// $obj2->age = 34;

// echo 'My name is ' . $obj1->getName() . ' and I am ' . $obj1->getAge() . ' years old' . '<br>' . '<br>';
// echo 'My name is ' . $obj2->getName() . ' and I am ' . $obj2->getAge() . ' years old';
