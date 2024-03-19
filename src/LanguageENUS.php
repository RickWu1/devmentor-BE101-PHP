<?php

namespace App;

use App\Language;
use App\CancelCourseEvent;
use App\ReserveClassEvent;
use App\RegisterSuccessEvent;

class LanguageENUS extends Language
{
    public function getContent($eventName): string
    {
        $map = [
            RegisterSuccessEvent::class => 'register success',
            ReserveClassEvent::class => 'reserve class',
            CancelCourseEvent::class => 'cancel class',
        ];

        return $map[$eventName];
    }
}