<?php

class HelloWorldClass {
    public $s = "Hello Dear";

    public function index()
    {
        echo $this->s;
        return $this->s;
    }
}