<?php

namespace App\Traits;

trait Loggable
{
    public static array $changes = [];

    public function logg($message): void
    {
        echo '<br />';
        echo $message;
        self::$changes[] = $message;
    }
}

