<?php
require_once("Expresso.php");
require_once("Chocolate.php");
require_once("Caramel.php");

$order = array();

$expresso = new Expresso;

$order[] = array( "elem" => $expresso,
"next" => null,
);

$caramel = new Caramel($order[count($order)-1]['elem']);

$order[] = array( "elem" => $caramel,
"next" => count($order)-1,
);

$chocolate = new Chocolate($order[count($order)-1]['elem']);

$order[] = array( "elem" => $chocolate,
"next" => count($order)-1,
);

echo $order[count($order)-1]['elem']->cost();

echo $order[count($order)-1]['elem']->orderDescription();

?>