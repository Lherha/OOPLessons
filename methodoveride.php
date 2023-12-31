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
     * 
    */
    public $name;

    /** 
     * @var int 
     * 
    */
    private $age;

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
     * Set the age of the person.
     *
     * @param int $newAge
     */
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

    /**
     * Get a message about the person.
     *
     * @return string
     */
    public function sendMessage()
    {
        return $this->name . ' is ' . $this->age . ' years old.';
    }
}

/**
 * Class Employee
 * 
 * Represents an employee, extending the Person class, with additional properties like position and salary.
 * Overrides the sendMessage() method to provide employee-specific message.
 * 
 * @author Ajao Mueez <mueezlherha@gmail.com>
 * @copyright 2010 Ennui Design
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */
class Employee extends Person
{
    /** 
     * @var string 
     * 
    */
    private $position;

    /** 
     * @var int
    */
    private $salary;

    /**
     * Constructor to initialize properties.
     *
     * @param string $employee_name
     * @param int $employee_age
     * @param string $position
     * @param int $salary
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
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the position of the employee.
     *
     * @param string $newPosition
     */
    public function setPosition($newPosition)
    {
        $this->position = $newPosition;
    }

    /**
     * Get the salary of the employee.
     *
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the salary of the employee.
     *
     * @param int $newSalary
     */
    public function setSalary($newSalary)
    {
        $this->salary = $newSalary;
    }

    /**
     * Get a message about the employee.
     * Overrides the parent's sendMessage method to provide employee-specific message.
     *
     * @return string
     */
    public function sendMessage()
    {
        return $this->name . ' is a ' . $this->position;
    }
}

$personOne = new Person('Bolaji Isaac', 27);
$employeeOne = new Employee('Bolaji Isaac', 24, 'Software Developer', 200000);

echo $personOne->sendMessage() . '<br>';
echo $employeeOne->sendMessage();
