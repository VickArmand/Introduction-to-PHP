<?php
class Human{
    public static function feed(){
        return "I feed on nutritious food and take water";
    } 
}
echo (Human::feed()).PHP_EOL;
class Weather{
    // In accessing static properties and methods the self keyword is used 
    // this keyword cannot be used in static methods since instances are not created
    public static $tempcondition=['cold','mild','warm'];
    public static function celciusToFareinheit($c){
        return $c*9/5+32;

    }
    public static function determineTemperature($f){
        if($f<40){
            return self::$tempcondition[0];
        }
        elseif($f<70){
            return self::$tempcondition[1];
        }
        else{
            return self::$tempcondition[2];
        }

    }
}
echo Weather::celciusToFareinheit(40).PHP_EOL;
echo Weather::determineTemperature(30).PHP_EOL;
?>