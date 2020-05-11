<?php
require_once('IResource.php');

class NatureResource implements IResource{
    private $natureBehavior;

    public function __construct(NaturalPhenomena $naturalPhenomena)
    {
        $this->natureBehavior = $naturalPhenomena;
    }

    public function title()
    {
        return $this->natureBehavior->head();
    }

    public function bodyMessage()
    {
        return $this->natureBehavior->description();
    }

    public function image()
    {
        return $this->natureBehavior->cover();
    }

    public function url()
    {
        return $this->natureBehavior->moreInfo();
    }

}
?>