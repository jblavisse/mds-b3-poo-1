<?php 

class MyTime {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour=0, $minute=0, $second=0) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function getHour() {
        return $this->hour;
    }

    public function setHour($hour) {
        $this->hour = $hour;
    }

    public function getMinute() {
        return $this->minute;
    }

    public function setMinute($minute) {
        $this->minute = $minute;
    }

    public function getSecond() {
        return $this->second;
    }

    public function setSecond($second) {
        $this->second = second;
    }
}

$timer1 = new MyTime();
var_dump($timer1);

$timer2 = new MyTime(15,27,12);
var_dump($timer2);