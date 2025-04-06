<?php

abstract class Phone{
    protected $brand;
    protected $model;
    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
        
    }
    abstract public function introduction():string;
}

class Iphone extends Phone{
    public function introduction():string{
        return "This is an $this->brand and the model is $this->model";
    }
}
$obj = new Iphone("Iphone","13 pro max");
echo $obj->introduction();
?>