<?php

class Stylo {
    // $couleur;
    // $marque;
    // $dureeUtilisation;

    function __construct($couleurDonnee, $marqueDonnee, $dureeUtilisationDonnee) {
        $this->couleur = $couleurDonnee;
        $this->marque = $marqueDonnee;
        $this->dureeUtilisation = $dureeUtilisationDonnee;
    }

    function ecrire() {
        echo "Mon stylo ".$this->marque." écrit en ".$this->couleur.PHP_EOL;
    }
}

$stylo1 = new Stylo("rouge","bic",200);
// var_dump($stylo1);
$stylo1->ecrire();
$stylo1->ecrire();
echo $stylo1->couleur;

$stylo2  = new Stylo("bleu","Mont Blanc",350);
$stylo2->ecrire();
