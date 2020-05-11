<?php
require_once("MapChest.php");
require_once("Map.php");

$chest = new MapChest;
$map = new Map($chest);

$map->open();
$map->open();
$map->open();
?>