<?php
require_once('TaskToDo.php');

class Project implements TaskToDo{
    private $tasks = array();

    public function createToDo( $projectTasks)
    {
        $this->tasks[] = $projectTasks;
    }

    public function printToDo()
    {
        $toDo = "<ul>";
        foreach ($this->tasks as $key => $value) {
            $toDo .= "<li>";
            $toDo .= $value->printToDo();
            $toDo .= "</li>";
        }
        $toDo .= "</ul>";

        return $toDo;
    }

    public function remove(int $task)
    {
        array_splice($this->tasks,$task,1);
        return true;
    }

}
?>