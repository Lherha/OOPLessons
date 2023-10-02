<?php

/**
 * Class Person
 *
 * Represents a person with a name and age. Provides a static method to count the number of Person objects created.
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
    private $age;

    /**
     * @var int
     */
    private static $count = 0;

    /**
     * Person constructor.
     *
     * @param string $name 
     * @param int $age 
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

        // When Person class is instantiated, increment the count variable
        self::$count++;
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
     * Set the age of the person.
     *
     * @param int $newAge
     */
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

    /**
     * Get the count of Person objects created.
     *
     * @return int
     */
    public static function countCreatedObjects()
    {
        return self::$count;
    }
}

$person1 = new Person('Person One', 20);
$person2 = new Person('Person Two', 25);
$person3 = new Person('Person Three', 30);
$person4 = new Person('Person Four', 50);
$person5 = new Person('Person Five', 27);

echo 'The Person object was instantiated ' . Person::countCreatedObjects() . ' times';
