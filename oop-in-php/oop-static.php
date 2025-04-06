<?php
class Niit{
    public static $name ="Sammy";
    public static function BrandColor(){
        return "Blue";
    }
    public function center(){
        echo "Ikorodu Center Also uses same ". self::BrandColor()." Color" ;
    }
}

Niit::BrandColor();
echo Niit::$name ."<br>";
$obj = new Niit;
$obj->center();


class A {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class B {
    public function message() {
      A::welcome();
    }
  }
  
  $obj = new B();
  
  echo $obj -> message();
?>