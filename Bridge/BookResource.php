<?php
require_once('IResource.php');

class BookResource implements IResource{
    private $book;

    public function __construct(Book $bookObject)
    {
        $this->book = $bookObject;
    }

    public function title()
    {
        return $this->book->bookTitle();
    }

    public function bodyMessage()
    {
        return $this->book->synopsis();
    }

    public function image()
    {
        return $this->book->cover();
    }

    public function url()
    {
        return $this->book->linkStore();
    }

}
?>