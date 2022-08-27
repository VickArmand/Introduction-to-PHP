<?php
// same function is utilised for the same purpose
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
    public $weight;
    // Here we are overloading the constructor and overriding the intro method
    public function __construct($name,$color,$weight){
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;

    }
    public function intro(){
        return "<br>This fruit is $this->name, whose color is $this->color and weight is $this->weight grams<br>";
    }

}
$cherry=new Cherry('Cherry','pink',50);
echo $cherry->intro();

?>
