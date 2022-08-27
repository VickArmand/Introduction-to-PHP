<?php
namespace app\PHPnamespaces;
const isInSchool=true;
class Student{
    public $isInClass;
    public function isMealTime(){
        $this->isInClass=false;
        print('Student is not in class');
    }
    public function isLessonTime(){
        $this->isInClass=true;
        print('Student is not in class');
    }
    public function isPrepsTime(){
        $this->isInClass=true;
        print('Student is not in class');
    }
    public function isRestTime(){
        $this->isInClass=false;
        print('Student is not in class');
    }
}
function absent(){
    print('Student is out of school');
}
?>