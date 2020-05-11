<?php

class Singleton{

    static private $instance;

    private function __construct()
    {

    }

    static public function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Singleton;
        }

        return self::$instance;
    }

    public function sayHi()
    {
        return "Hi i`m a Singleton Pattern";
    }
}
?>