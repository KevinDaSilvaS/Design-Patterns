<?php

require_once('ICommand.php');
require_once('LightBulb.php');

class Command implements ICommand{

    private $lightBulb;

    public function __construct(LightBulb $light)
    {
        $this->lightBulb = $light;
    }

    public function execute()
    {
        $this->lightBulb->turnOn();
    }

    public function unexecute()
    {
        $this->lightBulb->turnOff();
    }
}
?>