<?php
require_once("Beverage.php");

class Expresso extends Beverage{

    public function cost()
    {
        return 3;
    }

    public function orderDescription()
    {
        return "Expresso with ";
    }
}
?>