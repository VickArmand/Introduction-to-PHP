<?php
class Fruit{
    public $name;
    public $color;
    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    function get_color(){
       return $this->color;
    }
    function get_name(){
        return $this->name;
    }
}

$strawberry=new Fruit('Strawberry', 'Red');
echo $strawberry->get_name().PHP_EOL;
echo $strawberry->get_color().PHP_EOL;

?>