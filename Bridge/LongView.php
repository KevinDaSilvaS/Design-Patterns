<?php
require_once('View.php');

class LongView extends View{

    private $resource;

    public function __construct(IResource $res)
    {
        $this->resource = $res;
    }

    public function show()
    {
        var_dump($this->resource->title());
        var_dump($this->resource->bodyMessage());
        echo "-----------------------------------";
        var_dump($this->resource->image());
        echo "-----------------------------------";
        var_dump("More information: " . $this->resource->url());
    }
}
?>