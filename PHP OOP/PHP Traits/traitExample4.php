<?php
trait FlyableTrait{
    abstract public function flying();
    public function hello(){
        echo "Hello i can fly";
    }
}
trait EngineTrait{
    public function hello(){
        echo "I have an engine";
    }
}


class Plane{
    use FlyableTrait,EngineTrait{
        FlyableTrait::hello insteadof EngineTrait;
        EngineTrait::hello as engineHello;
        // The above 2 lines mean that when u using hello method on this class the flyabletrait's hello method will be used instead of the Enginetrait's hello method
        // The EngineTrait's hello method will be accessed as enginehello
    }
    public function flying(){
        echo "I am flying at 300km/h speed".PHP_EOL;
    }
}


$jetfighter=new Plane();
$jetfighter->hello();
$jetfighter->enginehello();
?>