<?php
class A{
    public function hello(){
        echo "Hello from Class A";
    }

}

class B extends A{
    public function x(){
        // parent is used to access anything in thie parent class
        return parent::hello();
    }
}
class C extends B{
    public function y()
  {
    return  parent::class;
  }  
}
$a =new B();
$b =new C();
echo $a->x().PHP_EOL;
echo $b->y().PHP_EOL;
?>