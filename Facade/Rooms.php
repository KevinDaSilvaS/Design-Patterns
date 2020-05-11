<?php
require_once('KitchenSink.php');
require_once('BathroomSink.php');

class Rooms{

    public function getRoom($roomId)
    {
        switch ($roomId) {
            case 1:
                $object = new BathroomSink();
                $object->openBathroomSink();
                break;

            case 2:
                $object = new KitchenSink();
                $object->openKitchenSink();
                break;
            
            default:
                echo "room id not defined";
                exit;
                break;
        }
    }
}
?>