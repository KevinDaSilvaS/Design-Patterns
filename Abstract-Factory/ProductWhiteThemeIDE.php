<?php

require_once('IDE.php');

class ProductWhiteThemeIDE implements IDE{

    public function __construct()
    {
        echo "Using White Theme IDE: ";
    }

    public function textColor()
    {
        return "text color -> black";
    }

    public function highlightColor()
    {
        return "highlight color -> blue";
    }

    public function backgroundColor()
    {
        return "background color -> white";
    }
}
?>