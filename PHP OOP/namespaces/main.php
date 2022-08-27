<?php
require_once '../../PHP OOP/namespaces/namespaces.php';
use \app\PHPnamespaces\Student;
use function \app\PHPnamespaces\absent;
use const \app\PHPnamespaces\isInSchool;

$student1=new Student();
echo $student1->isMealTime().PHP_EOL;
echo absent().PHP_EOL;
echo isInSchool;
?>