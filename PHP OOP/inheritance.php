<?php
// A class that is derived from another class is called a subclass (also a derived class, extended class, or child class). The class from which the subclass is derived is called a superclass (also a base class or a parent class).
class Fruit{
    public $name;
    public $color;
    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    function intro(){
       return "<br>A $this->name is a fruit and its color is $this->color<br>";
    }
}
class Cherry extends Fruit{
    public function message(){
        return "<br>Is cherry a fruit or a berry<br>";
    }

}
$cherry=new Cherry('Cherry','red');
echo $cherry->message();
echo $cherry->intro();
?>