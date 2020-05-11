<?php
require_once("Gate.php");
require_once("OpenGateState.php");

$newState = new OpenGateState;
$gate = new Gate($newState);

$gate->close();
$gate->open();
$gate->open();
$gate->close();

?>