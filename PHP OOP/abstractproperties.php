<?php
abstract class Mammal{

    abstract public function move():string;
    abstract public function communicate();
}
class Human extends Mammal{
    public function move():string{
        return "Movement by walking";
    }
    public function communicate()
    {
        return "Communicate by talking";   
    }

}
$joseph=new Human();
echo ($joseph->move()).PHP_EOL;
echo ($joseph->communicate()).PHP_EOL;
?>