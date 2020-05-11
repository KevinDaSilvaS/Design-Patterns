<?php

require_once('CreateIDE.php');
require_once('ProductDarkThemeIDE.php');
require_once('ProductWhiteThemeIDE.php');

class ConcreteIDE implements CreateIDE{

    public function createWhiteThemeIde()
    {
        return new ProductWhiteThemeIDE;
    }

    public function createDarkThemeIde()
    {
        return new ProductDarkThemeIDE;
    }
}
?>