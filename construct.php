<?php

/**
 * Class Person
 *
 * Represents a person with a name and age.
 *
 * @author Ajao Mueez <mueezlherha@gmail.com>
 * @copyright 2010 Ennui Design
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */
class Person
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $age;

    /**
     * Constructor to initialize properties.
     *
     * @param string $name
     * @param int $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

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
     * Set a new age for the person.
     *
     * @param int $newAge
     */
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

    /**
     * Get a string representation of the person's name and age.
     *
     * @return string
     */
    private function callToPublicNameAndAge()
    {
        return "{$this->name} is {$this->age} years old.";
    }

    /**
     * Get the string representation of the person's name and age.
     *
     * @return string
     */
    public function getNameAndAge()
    {
        return $this->callToPublicNameAndAge();
    }
}

// Instantiation of Person class
$obj1 = new Person('Mueez', 24);
$obj2 = new Person('Bolaji', 20);

echo $obj1->getNameAndAge() . '<br>';
echo $obj2->getNameAndAge() . '<br>';





























// echo $obj1->getAge();






// echo 'Hello, my name is ' . $obj1->getName() . ' I am ' . $obj1->getAge() . ' years old <br>';
// echo 'Hello, my name is ' . $obj2->getName() . ' I am ' . $obj2->getAge() . ' years old';
