<?php
class Person {
    public $firstName;
    public $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

   
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

class Car {
    public $make;
    public $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo() {
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }
}

$person = new Person('John', 'Doe', 30);

echo "Full Name: " . $person->getFullName() . "<br>";
echo "Age: " . $person->getAge() . "<br>";

$car = new Car('Toyota', 'Camry', 2020);

echo "Car Info: " . $car->getCarInfo() . "<br>";
?>