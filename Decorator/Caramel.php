<?php
require_once("Beverage.php");
require_once("AddOnDecorator.php");

class Caramel extends AddOnDecorator{
    private $b;
    
    public function __construct(Beverage $beverage)
    {
        $this->b = $beverage;
        $this->cost();
    }

    public function cost()
    {
        return $this->b->cost() + 2;
    }

    public function orderDescription()
    {
        return $this->b->orderDescription() . " - Caramel";
    }
}
?>