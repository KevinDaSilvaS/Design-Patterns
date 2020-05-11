<?php
require_once('AbsClass.php');

class Concrete1 extends AbsClass{

    public function action1()
    {
        var_dump("Action 1 in concrete 1 called.");
    }

    public function action2()
    {
        var_dump("Action 2 in concrete 1 called.");
    }
    
}
?>