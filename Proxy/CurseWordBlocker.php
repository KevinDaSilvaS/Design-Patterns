<?php
require_once('ICurseWordBlocker.php');

class CurseWordBlocker implements ICurseWordBlocker{

    private $msg = null;

    public function __construct(string $message)
    {
        $this->msg = $message;
    }

    public function filterMessage()
    {
        return "filtered message output based on the message: " . $this->msg;
    }
}
?>