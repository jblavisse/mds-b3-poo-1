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
}

$timer1 = new MyTime();
var_dump($timer1);

$timer2 = new MyTime(15,27,12);
var_dump($timer2);