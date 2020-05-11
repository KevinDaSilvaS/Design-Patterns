<?php
require_once('PhpRequirements.php');
require_once('ProgrammerJobs.php');

class PhpDeveloper implements ProgrammerJobs{

    public function CreateJob()
    {
        return new PhpRequirements;
    }
}

?>