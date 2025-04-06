<?php
trait MessageTrait
{
    public function message()
    {
        return "Hello, World!";
    }
    public function welcomeText()
    {
        return "Welcome to my website!";
    }
    public function generatePhoneNumber($prefix = "070")
    {
        $number = rand(100000000, 999999999);
        return $prefix . $number;
    }
}
trait CountryData
{
    public function country($name)
    { 
        $name = ucwords($name);
        if ($name == 'Nigeria') {
            $data = [
                'name' => 'Nigeria',
                'capital' => 'Abuja',
                'population' => 200000000,
                'currency' => 'Naira'
            ];
            return $data;
        } elseif ($name == "Ghana") {
            $data = [
                'name' => 'Ghana',
                'capital' => 'Accra',
                'population' => 30000000,
                'currency' => 'Cedi'
            ];
            return $data;
        } else {
            return "Country not found";
        }
    }
}
class User
{
    use MessageTrait, CountryData;
}
$obj = new User;
// echo $obj->welcomeText();
echo $obj->generatePhoneNumber();
echo "<br>";
echo $obj->generatePhoneNumber("090");
echo "<br>";
var_dump($obj->country("nigeria"));
