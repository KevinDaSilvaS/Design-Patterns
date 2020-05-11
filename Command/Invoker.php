<?php
require_once('ICommand.php');

class Invoker{

    private $lightCommander;
    
    public function __construct(ICommand $commander)
    {
        $this->lightCommander = $commander;
    }

    public function turnOn()
    {
        $this->lightCommander->execute();
    }

    public function turnOff()
    {
        $this->lightCommander->unexecute();
    }
}
?>