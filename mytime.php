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
        return $this->hour."h";
    }

    public function setHour($hour) {
        $this->hour = $hour;
    }

    public function getMinute() {
        return $this->minute."min";
    }

    public function setMinute($minute) {
        $this->minute = $minute;
    }

    public function getSecond() {
        return $this->second."s";
    }

    public function setSecond($second) {
        $this->second = $second;
    }

    public function show() {
        echo $this->getHour()." ".$this->getMinute()." ".$this->getSecond().PHP_EOL; 
    }

    public function nextSecond() {
        $this->second++;

        if($this->second === 60) {
            $this->minute++;
            $this->second = 0;
        }

        if($this->minute === 60) {
            $this->hour++;
            $this->minute = 0;
        }

        if($this->hour === 24) {
            $this->hour = 0;
        }

    }
}

$timer1 = new MyTime(23,59,59);
$timer1->show();
$timer1->nextSecond();
$timer1->show();