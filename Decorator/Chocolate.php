<?php
require_once("Beverage.php");
require_once("AddOnDecorator.php");

class Chocolate extends AddOnDecorator{
    private $b;
    
    public function __construct(Beverage $beverage)
    {
        $this->b = $beverage;
        $this->cost();
    }

    public function cost()
    {
        return $this->b->cost() + 1;
    }

    public function orderDescription()
    {
        return $this->b->orderDescription() . " - Chocolate";
    }
}
?>