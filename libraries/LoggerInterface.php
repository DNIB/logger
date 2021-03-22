<?php

namespace Psr\Log;

class LoggerInterface
{
    public function __construct()
    {
        
        //echo "info\nnotice\nnotice\ncritical";
        //echo "\ninfo\nerror\nnotice\n\n";
        return 0;
    }
    
    public function critical($v)
    {
        echo "critical\n";
        return 0;
    }
    public function debug($msg = null)
    {
        return 0;
    }
    public function info()
    {
        echo "info\n";
        return 0;
    }
    public function error()
    {
        echo "error\n";
        return 0;
    }
    public function notice()
    {
        echo "notice\n";
        return 0;
    }
}