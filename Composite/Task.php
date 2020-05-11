<?php
require_once('TaskToDo.php');

class Task implements TaskToDo{
    private $taskName;

    public function __construct($task)
    {
        $this->createToDo($task);
    }

    public function createToDo($task)
    {
        $this->taskName = $task;
    }

    public function printToDo()
    {
        return $this->taskName;
    }

}
?>