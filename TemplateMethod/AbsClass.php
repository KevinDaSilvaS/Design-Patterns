<?php

abstract class AbsClass{
    
    public function __construct()
    {
        var_dump("Initialized abstract class");
        $this->action1();
        $this->action2();
    }

    public abstract function action1();
    public abstract function action2();
}
?>