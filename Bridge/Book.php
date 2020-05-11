<?php

class Book{

    private $bookName;

    private $bookSynopsis;

    private $coverImage;

    private $purchaseLink;

    public function __construct($bookTitle,$synopsis,$cover,$link = '')
    {
        $this->bookName = $bookTitle;
        $this->bookSynopsis = $synopsis;
        $this->coverImage = $cover;
        $this->purchaseLink = $link;
    }
    
    public function bookTitle()
    {
        return $this->bookName;
    }

    public function synopsis()
    {
        return $this->bookSynopsis;
    }

    public function cover()
    {
        return $this->coverImage;
    }

    public function linkStore()
    {
        return $this->purchaseLink;
    }
}
?>