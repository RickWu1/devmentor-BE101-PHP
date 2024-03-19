<?php

namespace App;

abstract class Language
{
    public abstract function getContent($eventName): string;
}