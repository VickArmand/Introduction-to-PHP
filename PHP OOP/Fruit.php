<?php
namespace app;
// A class is a template for objects, and an object is an instance of class.
// Objects are created using the new keyword
class Fruit{
    public $name;
    public $color;
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}

?>