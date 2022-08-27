<?php
class Fruit1{
    public $name;
    public $color;
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}
$apple= new Fruit1();
$banana=new Fruit1();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo $banana->get_name();
echo $apple->get_name();
?>