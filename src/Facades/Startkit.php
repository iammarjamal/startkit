<?php

namespace Iammarjamal\Startkit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iammarjamal\Startkit\Startkit
 */
class Startkit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Iammarjamal\Startkit\Startkit::class;
    }
}
