<?php

namespace App;

class Telegram extends NotifyChannel
{
    public function notify(string $message)
    {
        echo '[Telegram]' . $message . PHP_EOL;
    }
}