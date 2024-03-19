<?php

namespace App;

use App\Language;
use App\CancelCourseEvent;
use App\ReserveClassEvent;
use App\RegisterSuccessEvent;

class LanguageZHTW extends Language
{
    public function getContent($eventName): string
    {
        $map = [
            RegisterSuccessEvent::class => '註冊成功',
            ReserveClassEvent::class => '預約課程',
            CancelCourseEvent::class => '取消課程',
        ];

        return $map[$eventName];
    }
}

