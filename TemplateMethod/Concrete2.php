<?php
require_once('AbsClass.php');

class Concrete2 extends AbsClass{

    public function action1()
    {
        var_dump("Action 1 in concrete 2 called.");
    }

    public function action2()
    {
        var_dump("Action 2 in concrete 2 called.");
    }
    
}
?>