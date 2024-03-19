<?php

namespace App;


class Email extends Notifychannel
{
    public function notify(string $message)
    {
        echo '[Email]' . $message . PHP_EOL;
    }
}