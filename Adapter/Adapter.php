<?php
require_once('ITarget.php');
require_once('Adaptee.php');

class Adapter implements ITarget{
    private $adaptee;

    public function __construct(Adaptee $adapt)
    {
        $this->adaptee = $adapt;
        var_dump("Receiving Brazilian Plug pattern");
    }

    public function request()
    {
        $this->adaptee->specificRequest();
    }
}
?>