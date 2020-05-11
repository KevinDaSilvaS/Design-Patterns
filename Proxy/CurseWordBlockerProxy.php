<?php
require_once('ICurseWordBlocker.php');
require_once('CurseWordBlocker.php');

class CurseWordBlockerProxy implements ICurseWordBlocker{

    private $wordBlocker = null;
    private $message = null;

    public function __construct(string $msg)
    {
        $this->message = $msg;
    }

    public function filterMessage()
    {
        if ($this->wordBlocker === null) {
            $this->wordBlocker = new CurseWordBlocker($this->message);
        }

        return $this->wordBlocker->filterMessage();
    }
}
?>