<?php
require_once('Frete.php');

class FreteNormal implements Frete{

    public function CalculaCustoFrete(int $distance)
    {
        if ($distance > 0) {
            return $distance * 5 / ($distance/2);
        }
        
        return 0;

    }
}
?>