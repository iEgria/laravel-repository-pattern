<?php

namespace Ainur\Repository\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ainur\Repository\Repository
 */
class Repository extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ainur\Repository\Repository::class;
    }
}
