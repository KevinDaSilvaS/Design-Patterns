<?php

class NaturalPhenomena{

    private $headTitle;

    private $descriptionPhenomena;

    private $coverImage;

    private $additionalInfo;

    public function __construct($title,$description,$cover,$info = '')
    {
        $this->headTitle = $title;
        $this->descriptionPhenomena = $description;
        $this->coverImage = $cover;
        $this->additionalInfo = $info;
    }
    
    public function head()
    {
        return $this->headTitle;
    }

    public function description()
    {
        return $this->descriptionPhenomena;
    }

    public function cover()
    {
        return $this->coverImage;
    }

    public function moreInfo()
    {
        return $this->additionalInfo;
    }
}
?>