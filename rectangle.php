<?php


class Rectangle {
    private $length;
    // $width;

    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    function getLength() {
        return $this->length;
    }

    function setLength($length) {
        // Verifier que c'est bien un nombre
        $this->length = $length;
    }

    function getPerimeter() {
        return ($this->length + $this->width)*2;
    }

    function getArea() {
        return $this->length * $this->width;
    }

    function isSquare() {
        return $this->length === $this->width;
    }

    function show() {
        echo "Longueur: ".$this->length.PHP_EOL
        ."Largeur: ".$this->width.PHP_EOL
        ."Périmètre: ".$this->getPerimeter().PHP_EOL
        ."Aire: ".$this->getArea().PHP_EOL
        .($this->isSquare() ? "C'est un carré" : "Ce n'est pas un carré");

        // if($this->isSquare())
        // {
        //     echo "C'est un carré";
        // }
        // else {
        //     echo "Ce n'est pas un carré";
        // }

    }
}

$rectangle1 = new Rectangle(10,12);
$rectangle1->show();

//echo $rectangle1->length;
echo $rectangle1->getLength();

// $rectangle1->length = 17;
$rectangle1->setLength(17);

echo $rectangle1->length;