<?php

namespace Nata;


class Log
{
    protected static $logger;

    public static function setLogger(Logger $logger)
    {
        static::$logger = $logger;
    }

    Public static function info($message)
    {
        static::$logger->info($message);
    }

}