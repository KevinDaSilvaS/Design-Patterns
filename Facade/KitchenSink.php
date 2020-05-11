<?php
require_once('AcessPipes.php');

class KitchenSink{

    public function openKitchenSink()
    {
        $pipes = new AcessPipes();
        $pipes->acessHousePipes("Kitchen");
    }
}
?>