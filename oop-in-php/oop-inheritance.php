<?php
  class Car{
    public $color;
    public $model;
    public $year;
    public $speed;
    public $price;
    public $isSold;
    public $isRented;

    public function __construct($color, $model,  $price )
    {
        $this->color = $color;
        $this->model = $model;
        $this->price = $price;
    }
    // final keyword makes a class not to be inherited and methods not to overridden
    final public function setYear($year){
        $this->year = $year;
    }

    public function setSpeed($speed){
        $this->speed = $speed;
    }

    public function getColor(){
        echo $this->color;
    }
    protected function getModel($model){
        echo $this->model;
    }
}

class Volvo extends Car{
    public function __construct($color, $model, $price, $year, $speed){
        $this->color = $color;
        $this->model = $model;
        $this->price = $price;
        $this->year = $year;
        $this->speed = $speed;
    }
    public $name = "Volvo";
    public function getPrice($price){
        $this->price = $price;
    }
    public function carDetails(){
        echo "The car is a $this->color, $this->model $this->name from $this->year
        ";
    }
    public function getModelDetails(){
        $this->getModel($this->model);
    }

    // public function setYear($year){
    //     $this->year = $year;
    // }
}

$car1 = new Volvo("red", "Vx-2023",20000,20023,120);
$car1->carDetails();

?>