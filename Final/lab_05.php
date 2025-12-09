<?php

class Book {
    public $title;
    public $author;
    public $year;


    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }


    public function getDetails() {
        return "Title: $this->title, Author: $this->author, Year: $this->year";
    }


    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setYear($year) {
        $this->year = $year;
    }
}


$book1 = new Book("The Man", "Tommy Bane", 1969);


echo $book1->getDetails() . "<br>";


$book1->setTitle("Rich Dad Poor Dad");
$book1->setAuthor("Robert Kiyosaki");
$book1->setYear(1997);


echo $book1->getDetails();
?>