<?php
// php is a loosely typed language since it allows declaring variables without stating their datatypes but the type is consdered during initialisation(assigning values)
$num=7.6;
$str='Hello World';
echo "<h3>".$str."</h3>";
$laptop_brands=array('Asus','HP','DELL','Lenovo');
echo $laptop_brands[0].'<br>';

// single line comments
/*
Multi line comments
*/
echo var_dump($laptop_brands).'<br>';
echo var_dump($laptop_brands[3]).'<br>';
// constants
define('laptops',['HP','Lenovo','Asus']);
echo laptops[2];
$var=9;
if(($var%2==0)&&($var%3==0)){
    echo "Divisible by both 3 and 2";
}
elseif($var>7){
    echo "Value greater than 7";
}
else{
    echo 'Not divisible by both 3 and 2';
}
$level=3;
switch($level){
    case 1:
        echo "You are playing an easy level";
        break;
    case 2:
        echo "You are playing a medium level";
        break;
    case 3:
        echo "You are playing a hard level";
        break;
    case 4:
        echo "You are playing a extreme hard level";
        break;
    default:
        echo "Unknown level";

}
$option=1;
print('<br> While loop result: <br>');
while($option<=5){
    print('<br> Hey There!: '.$option.' <br>');
    $option++;

}
$option=1;
print('Do While loop result: <br>');

do{
    print('<br> Hey There!: '.$option.' <br>');
    $option++;  
}
while($option<=5);
print('<br> For loop result: <br>');

for($var=1;$var<=5;$var++){
    print('<br> Hey There!: '.$var.' <br>');
 
}
function name(){
    print('<br> Function call result: <br>');

    for($var=1;$var<=5;$var++){
        print('<br> Hey There!: '.$var.' <br>');
     
    } 
}
name();
?>