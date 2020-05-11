<?php
require_once('Command.php');
require_once('Invoker.php');
require_once('LightBulb.php');

$light = new LightBulb();
$command = new Command($light);
$invoker = new Invoker($command);
$invoker->turnOn();
$invoker->turnOff();

?>