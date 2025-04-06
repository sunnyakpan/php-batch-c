<?php

class Fruit{
    private $name;
    private $color;

    public function __construct($name, $color )
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function getName(){
        echo "Name is: ". $this->name."<br>";
    }
    public function getColor(){
        echo "Color is: ". $this->color ."<br>";
    }
    // destructor
    public function __destruct(){
        echo "Object is destroyed";
    }
}
// initailize Fruit
$fruit = new Fruit("Apple", "Red");
$fruit->getName();
$fruit->getColor();
// destroy object
?>