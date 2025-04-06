<?php
class Greeting{
    const GOODBYE_MESSAGE = 'Thanks for banking with us.';

    public function byebyetext(){
        return self::GOODBYE_MESSAGE;
    }
}
// echo Greeting::GOODBYE_MESSAGE;
$obj = new Greeting;
echo $obj->byebyetext();


?>