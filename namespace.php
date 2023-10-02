<?php

namespace YourNamespace;

/**
 * Class Person
 *
 * Represents a person with a name and age.
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
     * Person constructor.
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
}

/**
 * Class Employee
 *
 * Represents an employee, extending Person class and adding position and salary.
 */
class Employee extends Person
{
    /**
     * @var string 
     */
    private $position;

    /**
     * @var int 
     */
    private $salary;

    /**
     * Employee constructor.
     *
     * @param string $employee_name
     * @param int $employee_age
     * @param string $position
     * @param int $salary
     */
    public function __construct($employee_name, $employee_age, $position, $salary)
    {
        parent::__construct($employee_name, $employee_age);
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
}

$employee1 = new Employee('Mueez Bolaji', 24, 'Software Developer', 200000);
$employee2 = new Employee('Mat Isac', 34, 'Fullstack Developer', 400000);

echo 'I am a new ' . $employee1->getName() . ', I am a ' . $employee1->getPosition() . ' and earn ' . 'N' . $employee1->getSalary() . '<br>' . '<br>';
echo 'I am a new ' . $employee2->getName() . ', I am a ' . $employee2->getPosition() . ' and earn ' . 'N' . $employee2->getSalary();
