<?php
trait Flyable{
    abstract public function flying();
}
trait Drivable{
    public function drive(){
        echo "I am driven".PHP_EOL;
    }
}

class Birds{
    use Flyable;
    public function flying(){
        echo "I am flying at 800km/h speed".PHP_EOL;
    }
}
class Plane{
    use Flyable;
    public function flying(){
        echo "I am flying at 300km/h speed".PHP_EOL;
    }
}
class Car{
    use Drivable;
}
$sparrow=new Birds();
$sparrow->flying();
$jetfighter=new Plane();
$jetfighter->flying();
$suv=new Car();
$suv->drive();
?>