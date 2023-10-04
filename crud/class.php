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
  * A public variable 
  * 
  * @var string
  */
  public $name;
  public $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

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
?>
