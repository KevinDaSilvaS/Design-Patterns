<?php
require_once('PhpDeveloper.php');
require_once('JavaDeveloper.php');

$newJob = new PhpDeveloper;
echo $newJob->CreateJob()->requirements();

$newJobJava = new JavaDeveloper;
echo $newJobJava->CreateJob()->requirements();
?>