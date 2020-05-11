<?php
require_once('FreteNormal.php');
require_once('FreteExpresso.php');

class TipoFrete{
    
    public function __construct()
    {
        
    }

    public function getTipo($tipo)
    {
        switch ($tipo) {
            case 1:
                return new FreteNormal();
                break;

             case 2:
                return new FreteExpresso();
                break;
            
            default:
                # code...
                break;
        }
    }
}

?>