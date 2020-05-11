<?php
require_once("Chest.php");
require_once("Map.php");
require_once("NullChest.php");

class MapChest implements Chest{

    public function openChest(Map $map)
    {
        var_dump("You`ve opened the chest.");
        $map->updateChest(new NullChest);
    }

}
?>