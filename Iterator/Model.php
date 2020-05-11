<?php
require_once('IModel.php');

class Model implements IModel{

    private $index = 0;

    private $clothes;

    public function __construct($pickedClothes)
    {
        $this->clothes = $pickedClothes;
    }

    public function isDressed()
    {
        if ($this->index == 3) {
            return true;
        }

        return false;
        
    }

    public function next()
    {
        $this->index = $this->index + 1;
    }

    public function current()
    {
        switch ($this->index) {
            case 0:
                return $this->clothes->getShirt();
                break;

            case 1:
                return $this->clothes->getPants();
                break;

            case 2:
                return $this->clothes->getShoes();
                break;
            
            default:
                return "The model is fully dressed";
                break;
        }
    }
}
?>