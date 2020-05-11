<?php
require_once("Beverage.php");

abstract class AddOnDecorator extends Beverage{

    public abstract function cost();

    public abstract function orderDescription();
}
?>
