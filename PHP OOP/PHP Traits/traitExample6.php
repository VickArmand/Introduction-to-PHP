<?php
class A{
    public function hello(){
        echo "Hello from Class A";
    }
}
trait TraitA{
    public function hello(){
        echo "Hello from trait A";
    }
}
class B extends A{
    use TraitA;
}
$a =new B();
echo $a->hello(); 
?>