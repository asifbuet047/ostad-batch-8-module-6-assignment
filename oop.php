<?php
class Book
{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }
    public function burrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook()
    {
        $this->availableCopies++;
    }
};

class Member
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function borrowBook(Book $book)
    {
        if ($book->burrowBook()) {
            echo "Available Copies of '" . $book->getTitle() . "': " . $book->getAvailableCopies() . "\n";
        } else {
            echo $this->name . " could not borrow " . $book->getTitle() . " because no copies available.\n";
        }
    }

    public function returnBook(Book $book)
    {
        $book->returnBook();
        echo $this->name . " returned " . $book->getTitle() . ".\n";
    }
};

$book1 = new Book("The Greate Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");
$member1->borrowBook($book1);
$member1->borrowBook($book1);
$member2->borrowBook($book2);
