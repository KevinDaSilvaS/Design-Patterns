<?php
require_once("State.php");

class Gate{

    private $state;

    public function __construct(State $initialState)
    {
        $this->state = $initialState;
    }

    public function open()
    {
        $this->state->openGate($this);
    }

    public function close()
    {
        $this->state->closeGate($this);
    }

    public function changeState(State $newState)
    {
        $this->state = $newState;
    }
}
?>