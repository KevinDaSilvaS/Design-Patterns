<?php
require_once('Rooms.php');

class Facade{
    
    public function managePlumber($id)
    {
        $r = new Rooms();
        $r->getRoom($id);
    }

    public function manageEletricCircuit()
    {
        
    }
}
?>