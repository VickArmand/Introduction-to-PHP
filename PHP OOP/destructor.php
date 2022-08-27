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
    function __destruct()
    {
        echo "<br>Fruit created is {$this->name} and the color is {$this->color}<br>";
    }
}

$strawberry=new Fruit('Strawberry', 'Red');

?>