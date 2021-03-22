<?php
// Used to test

namespace snic104\logger\main;

class HelloWorldClass {
    public $s = "Hello Dear";

    public function index()
    {
        echo $this->s;
        return $this->s;
    }
}