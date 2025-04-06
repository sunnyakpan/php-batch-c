<?php

// Access Modifiers
// Access modifiers are used to control the accessibility of classes, methods, and variables in PHP.
// There are four types of access modifiers in PHP: public, private, protected, and static.

class Fruits{
   protected $name;

   public function setName($name){
    $this->name = $name;
   }
   public function getName(){
    return $this->name;
   }
}
class Apple extends Fruits{
    public function displayFruitName(){
        echo $this->name;
    }
}
$apple = new Apple();
$apple->setName("Apple");
$apple->displayFruitName();

$obj = new Fruits();
// $obj->name = "Sampson";
// echo $obj->name;
// $obj = "object";
// if($obj instanceof Fruits){
//     $obj->name = "Apple";
//      $apple = $obj->getName();
//      echo $apple ."<br>";

// }else{
//     echo "This is not an instance of Fruits";
// }

// $obj = new Fruits;
// $obj->name = "Mango";
// $mango = $obj->getName();
// echo $mango ."<br>";



?>