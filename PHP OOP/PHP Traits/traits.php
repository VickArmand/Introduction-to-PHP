<?php
// Traits are used in solving the problem of code duplication and the problem of PHP not allowing for a class inheriting multiple classes
trait HammerLift{
    public function liftHammer(){
        print(self::class.' can lift the hammer'.PHP_EOL);
    }
}


?>