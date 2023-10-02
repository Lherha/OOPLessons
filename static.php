<?php

/**
 * Class Person
 *
 * Represents a person with a name and age. Provides a static method to count the number of Person objects created.
 */
class Person
{
    /**
     * @var string The name of the person.
     */
    public $name;

    /**
     * @var int The age of the person.
     */
    private $age;

    /**
     * @var int Keeps track of the number of Person objects created.
     */
    private static $count = 0;

    /**
     * Person constructor.
     *
     * @param string $name The name of the person.
     * @param int $age The age of the person.
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
     * @return string The name of the person.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the age of the person.
     *
     * @return int The age of the person.
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the age of the person.
     *
     * @param int $newAge The new age of the person.
     */
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

    /**
     * Get the count of Person objects created.
     *
     * @return int The count of Person objects created.
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
