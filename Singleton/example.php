<?php

require_once("Singleton.php");

$mySingleton = Singleton::getInstance();

echo $mySingleton->sayHi();
?>