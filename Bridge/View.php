<?php


abstract class View{
    private $resource;

    public function __construct(IResource $res)
    {
        $this->resource = $res;
    }

    public abstract function show();
}

?>