<?php
require_once("State.php");
require_once("OpenGateState.php");

class CloseGateState implements State{

    public function openGate(Gate $actionGate)
    {
        var_dump("Cannot open the gate,gate already opened");
    }

    public function closeGate(Gate $actionGate)
    {
        
        var_dump("Gate closed");
        $actionGate->changeState(new OpenGateState);
    }
}
?>