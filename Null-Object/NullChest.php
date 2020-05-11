<?php
require_once("Chest.php");

class NullChest implements Chest{

    public function openChest(Map $map)
    {
        var_dump("You collected everything in the chest.The chest is empty");
    }
}
?>