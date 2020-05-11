<?php
require_once('Wardrobe.php');
require_once('IModel.php');

class Look implements Wardrobe{

    private $shirt;
    private $pants;
    private $shoes;

    public function __construct($pickedShirt,$pickedPants,$pickedShoes)
    {
        $this->setShirt($pickedShirt);
        $this->setPants($pickedPants);
        $this->setShoes($pickedShoes);
    }

    public function getShirt()
    {
        return $this->shirt;
    }

    public function setShirt($value)
    {
        $this->shirt = $value;
    }

    public function getPants()
    {
        return $this->pants;
    }

    public function setPants($value)
    {
        $this->pants = $value;
    }

    public function getShoes()
    {
        return $this->shoes;
    }

    public function setShoes($value)
    {
        $this->shoes = $value;
    }

    public function getModel()
    {
        return new Model($this);
    }
}
?>