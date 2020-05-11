<?php

require_once('IDE.php');

class ProductDarkThemeIDE implements IDE{

    public function __construct()
    {
        echo "Using Dark Theme IDE: ";
    }

    public function textColor()
    {
        return "text color -> white";
    }

    public function highlightColor()
    {
        return "highlight color -> green";
    }

    public function backgroundColor()
    {
        return "background color -> black";
    }
}
?>