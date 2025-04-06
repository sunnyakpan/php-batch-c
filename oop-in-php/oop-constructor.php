<?php

class Person {
    private $name;
    private $age;
    //  constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    //  method to display details
    public function displayDetails() {
        echo "Name: $this->name <br>";
        echo "Age: $this->age <br>";
    }
}

//  create an object of Person class
$person = new Person("John Doe", 30);
$person->displayDetails();

?>