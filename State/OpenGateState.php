<?php
require_once("State.php");
require_once("CloseGateState.php");

class OpenGateState implements State{

    public function openGate(Gate $actionGate)
    {
        var_dump("Gate opened");
        $actionGate->changeState(new CloseGateState);
    }

    public function closeGate(Gate $actionGate)
    {
        var_dump("Cannot close the gate,gate already closed");
    }
}
?>