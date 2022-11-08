<?php 

class Animal {
    private $nom;

    function __construct($nom) {
        $this->nom = $nom;
    }
}

class Chien extends Animal {
    function aboyer() {
        echo "OUAF OUAF";
    }
}

class Chat extends Animal {
    function miauler() {
        echo "Miaouuuuuu";
    }
}

$bestiole = new Animal("bébéte");
var_dump($bestiole);


$marty = new Chien("Marty");
var_dump($marty);
$marty->aboyer();

$mulan = new Chat("Mulan");
$mulan->miauler();
