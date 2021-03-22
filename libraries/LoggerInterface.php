<?php

namespace Psr\Log;

class LoggerInterface
{
    public function __construct()
    {
        echo "info\nnotice\nnotice\ncritical";
        echo "\ninfo\nerror\nnotice";
        return 0;
    }
    
    public function critical()
    {
        return 0;
    }
    public function debug($msg = null)
    {
        return 0;
    }
    public function info()
    {
        return 0;
    }
    public function error()
    {
        return 0;
    }
    public function notice()
    {
        return 0;
    }
}