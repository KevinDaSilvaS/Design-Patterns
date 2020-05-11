<?php
require_once('Frete.php');

class FreteExpresso implements Frete{

    public function CalculaCustoFrete(int $distance)
    {
        if ($distance > 0) {
            return $distance * 7 / ($distance - 1) * 3;
        }
        
        return 0;

    }
}
?>