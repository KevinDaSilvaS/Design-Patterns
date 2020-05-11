<?php

require_once('Observado.php');
require_once('Observador.php');

$estacaoDeRadio = new Observado();

$radio = new Observador($estacaoDeRadio);
$radio->setId($estacaoDeRadio->Add($radio));

$receptor = new Observador($estacaoDeRadio,1);
$receptor->setId($estacaoDeRadio->Add($receptor));

//$estacaoDeRadio->Add($radio);
//$estacaoDeRadio->Add($receptor);

$estacaoDeRadio->displayObservadores();
//$estacaoDeRadio->Remove($radio);
$estacaoDeRadio->setProps(30);
$estacaoDeRadio->Notify();
var_dump($radio)
?>