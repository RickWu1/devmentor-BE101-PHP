<?php

namespace App;

class Sms extends NotifyChannel
{
    public function notify(string $message)
    {
        echo '[SMS]' . $message . PHP_EOL;
    }
}