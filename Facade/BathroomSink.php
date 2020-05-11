<?php

class BathroomSink{

    public function openBathroomSink()
    {
        $pipes = new AcessPipes();
        $pipes->acessHousePipes("Bathroom");
    }
}
?>