<?php
require_once('ConcreteIDE.php');

$IDE = new ConcreteIDE;

$IDE->createWhiteThemeIde();
var_dump($IDE->createWhiteThemeIde()->textColor());
var_dump($IDE->createWhiteThemeIde()->highlightColor());
var_dump($IDE->createWhiteThemeIde()->backgroundColor());

$IDE->createDarkThemeIde();
var_dump($IDE->createDarkThemeIde()->textColor());
var_dump($IDE->createDarkThemeIde()->highlightColor());
var_dump($IDE->createDarkThemeIde()->backgroundColor());

?>