<?php 

class MyTime {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour=0, $minute=0, $second=0) {
        $this->setHour($hour);
        $this->setMinute($minute);
        $this->setSecond($second);
    }

    public function getHour() {
        return $this->hour."h";
    }

    public function setHour($hour) {
        if($hour >= 0 && $hour < 24) {
            $this->hour = $hour;
        }
        else {
            echo "Heure invalide";
        }

    }

    public function getMinute() {
        return $this->minute."min";
    }

    public function setMinute($minute) {
        if($minute >= 0 && $minute < 60) {
            $this->minute = $minute;
        }
        else {
            echo "Minute invalide";
        }
    }

    public function getSecond() {
        return $this->second."s";
    }

    public function setSecond($second) {
        if($second >= 0 && $second < 60) {
            $this->second = $second;
        }
        else {
            echo "Seconde invalide";
        }
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

$timer1 = new MyTime(23,23,23);
$timer1->show();
$timer1->nextSecond();
$timer1->show();