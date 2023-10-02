<?php

/**
 * Class Person
 *
 * Represents a person with name and age.
 */
class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

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

$personOne = new Person('Ajao BJ', 27);

echo $personOne->getName() . '<br>';
echo $personOne->getAge() . '<br>';

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

$employeeOne = new Employee('Math Bolaji Doe', 23, 'UI/UX designer', 200000);

echo $employeeOne->getName() . '<br>';
echo $employeeOne->getPosition() . '<br>';
echo $employeeOne->getSalary();
