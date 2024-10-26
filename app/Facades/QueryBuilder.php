<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use Closure;

/**
 * @method static \App\Elasticsearch\QueryBuilder createIndex(string $name, Closure $closure)
 */
class QueryBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return __CLASS__;
    }
}
