<?php
require_once('Task.php');
require_once('Project.php');

$task1 = new Task("create TaskToDo interface");
$task2 = new Task("create Task class");
$task3 = new Task("create Project class");

$project = new Project();
$project->createToDo($task1);
$project->createToDo($task2);
$project->createToDo($task3);

echo $project->printToDo();
$project->remove(2);
echo $project->printToDo();
?>