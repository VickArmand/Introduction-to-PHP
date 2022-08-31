<?php
trait RobotTrait{
    private $maxRunningSpeed=0;
    private $maxWalkingTime;
    public function __construct($maxRunningSpeed,$maxWalkingTime){
        $this->maxWalkingTime=$maxWalkingTime;
        $this->maxRunningSpeed=$maxRunningSpeed;
    }
    public function getMaxSpeed(){
        return $this->maxRunningSpeed;
    }
    public function setMaxSpeed($maxRunningSpeed):void{
        $this->maxRunningSpeed=$maxRunningSpeed;
    }
    public function getMaxWalkingTime(){
        return $this->maxWalkingTime;
    }
}
class Robot{
    use RobotTrait;
}
?>