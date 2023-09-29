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

/**
 * Class Employee
 * 
 * Represents an employee, extending the Person class, with additional properties like position and salary.
 * 
 * @author Ajao Mueez <mueezlherha@gmail.com>
 * @copyright 2010 Ennui Design
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */
class Employee extends Person
{
    /** @var string The position of the employee. */
    private $position;

    /** @var int The salary of the employee. */
    private $salary;

    /**
     * Constructor to initialize properties.
     *
     * @param string $employee_name The name of the employee.
     * @param int $employee_age The age of the employee.
     * @param string $position The position of the employee.
     * @param int $salary The salary of the employee.
     */
    public function __construct($employee_name, $employee_age, $position, $salary)
    {
        // Call the parent class constructor
        parent::__construct($employee_name, $employee_age);

        // Add additional properties specific to Employee
        $this->position = $position;
        $this->salary = $salary;
    }

    /**
     * Get the position of the employee.
     *
     * @return string The position of the employee.
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the position of the employee.
     *
     * @param string $newPosition The new position of the employee.
     */
    public function setPosition($newPosition)
    {
        $this->position = $newPosition;
    }

    /**
     * Get the salary of the employee.
     *
     * @return int The salary of the employee.
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the salary of the employee.
     *
     * @param int $newSalary The new salary of the employee.
     */
    public function setSalary($newSalary)
    {
        $this->salary = $newSalary;
    }
}

$employee1 = new Employee('Mueez Bolaji', 24, 'Software Developer', 200000);
$employee2 = new Employee('Mat Isac', 34, 'Fullstack Developer', 400000);

echo 'I am a new employee and my name is ' . $employee1->name . ', I am a ' . $employee1->getPosition() . ' and earn ' . 'N' . $employee1->getSalary() . '<br>' . '<br>';

echo 'I am a new employee and my name is ' . $employee2->name . ', I am a ' . $employee2->getPosition() . ' and earn ' . 'N' . $employee2->getSalary();

