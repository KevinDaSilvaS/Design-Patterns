<?php

interface IObservado{

    public function Add($observador);

    public function Remove($observador);

    public function Notify();
}
?>
