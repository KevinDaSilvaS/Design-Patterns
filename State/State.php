<?php
require_once("Gate.php");

interface State{

    public function openGate(Gate $actionGate);

    public function closeGate(Gate $actionGate);
}
?>