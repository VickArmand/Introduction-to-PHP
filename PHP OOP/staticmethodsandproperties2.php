<?php
class Person{
    public static $drinkingAge=18;
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getDrinkingAge(){
        return self::$drinkingAge;
    }
    public static function setDrinkingAge($DA){
         self::$drinkingAge=$DA;
    }
}
$joe=new Person("Joe");
Person::setDrinkingAge(21);

echo $joe->getDrinkingAge();

?>