<?php
require_once('Adapter.php');
require_once('Adaptee.php');

$target = new Adapter(new Adaptee);
$target->request();
?>