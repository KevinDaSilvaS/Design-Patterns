<?php
require_once('IObservador.php');
class Observador implements IObservador{

    private $id;
    private $observado;
    private $propriedadeMonitorada;

    public function __construct($observable)
    {
        $this->observado = $observable;
        
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function update()
    {
        $this->propriedadeMonitorada = $this->observado->getpropriedadeMutavel();
        //var_dump($this->propriedadeMonitorada);
    }

    public function __destruct()
    {
        
    }
}
?>