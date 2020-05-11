<?php

require_once('TipoFrete.php');

$tipoFrete = new TipoFrete();

$frete = $tipoFrete->getTipo(2);

var_dump($frete->CalculaCustoFrete(1200));
?>