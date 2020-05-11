<?php
require_once("Chest.php");

class Map{
    private $mapChest;

    public function __construct(Chest $chest)
    {
        $this->mapChest = $chest;
    }

    public function open()
    {
        $this->mapChest->openChest($this);
    }

    public function updateChest(Chest $newChest)
    {
        $this->mapChest = $newChest;
    }
}
?>