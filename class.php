<?php

/**
 * Class Person
 *
 * Represents a basic person with properties like name and age,
 * and methods to retrieve and set the name and age.
 * @author Ajao Mueez <mueezlherha@gmail.com>
 * @copyright 2010 Ennui Design 
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */
class Person
{
    /**
     * helps to set name
     * @var string
     */
    public $name = 'Bolaji';

    /**
     * helps to set age
     * @var int
     */
    public $age = 20;

    /**
     * Get the name of the person.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the age of the person.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the age of the person.
     *
     * @param int $newAge
     */
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
}

// Create an instance of the Person class
$person = new Person('Mueez', 20);

// Get the name and age
$name = $person->getName();
$age = $person->getAge();

// Echo the name and age
echo "Name: $name, Age: $age";






































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
