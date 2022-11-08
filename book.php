<?php

class Book {
    // $title
    // $price
    // $author

    function __construct($title,$author,$price) {
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
    }

    function describe() {
        echo "Le livre ".$this->title." écrit par ".$this->author." coûte ".$this->price."€".PHP_EOL;
    }
}

$book1 = new Book("Clean Code","Robert C Martin",28.67);
$book2 = new Book("JavaScript: the definitive guide", "David Flanagan",51.04);
$book3 = new Book("Les chevaliers d'émeraude 1", "Anne Robillard", 15.30);

$book1->describe();
$book2->describe();
$book3->describe();