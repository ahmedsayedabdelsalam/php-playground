<?php


namespace App;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class User
{
    /**
     * @param string $val
     * @throws \Exception
     */
    public static function log(string $val)
    {
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::INFO));
        $log->info($val);
    }
}