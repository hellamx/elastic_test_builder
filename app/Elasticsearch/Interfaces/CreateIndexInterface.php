<?php

namespace App\Elasticsearch\Interfaces;

use Closure;

interface CreateIndexInterface
{
    public function createIndex(string $name, Closure $closure);
}
