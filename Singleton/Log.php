<?php

class Log
{
    private static $instance;
    //in this example, there is no use for private construct
    private function __construct() {}

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new Log();
        }
        return self::$instance;
    }

    public function saveLog($message, $path) {
        print($message . ' message was saved in the ' . $path);
    }
}