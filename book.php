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
}

$book1 = new Book("Clean Code","Robert C Martin",28.67);
$book2 = new Book("JavaScript: the definitive guide", "David Flanagan",51.04);
$book3 = new Book("Les chevaliers d'émeraude 1", "Anne Robillard", 15.30);

var_dump($book1);
var_dump($book2);
var_dump($book3);