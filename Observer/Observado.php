<?php
require_once('IObservado.php');

class Observado implements IObservado{

    private $propriedadeMutavel;
    private $observadores;

    public function add($observador)
    {
        $this->observadores[] = $observador;
        return count($this->observadores)-1;
    }

    public function remove($observador)
    {
        unset($this->observadores[$observador->getId()]);
        $observador->__destruct();
    }

    public function notify()
    {
        foreach ($this->observadores as $key => $value) {
            $value->update();
        }
    }

    public function setProps($val)
    {
        $this->propriedadeMutavel = $val;
        $this->notify();
    }

    public function displayObservadores()
    {
        var_dump($this->observadores);
    }

    public function getpropriedadeMutavel()
    {
        return $this->propriedadeMutavel;
    }
}
?>