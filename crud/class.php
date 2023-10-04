<?php

/**
 * Class Person
 *
 * Represents a basic person with properties like name and age,
 * and methods to retrieve and set the name and age.
 *
 * @author Ajao Mueez <mueezlherha@gmail.com>
 * @copyright 2010 Ennui Design
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */
class Person
{
    /**
     * A public variable for the person's name.
     *
     * @var string
     */
    public $name;

    /**
     * A public variable for the person's age.
     *
     * @var int
     */
    public $age;

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
}

?>
