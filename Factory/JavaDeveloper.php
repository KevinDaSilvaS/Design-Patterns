<?php
require_once('JavaRequirements.php');
require_once('ProgrammerJobs.php');

class JavaDeveloper implements ProgrammerJobs{

    public function CreateJob()
    {
        return new JavaRequirements;
    }
}

?>