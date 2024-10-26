<?php

namespace App\Elasticsearch;

use App\Elasticsearch\Interfaces\CreateIndexInterface;
use App\Elasticsearch\Migration\ElasticPrint;
use Closure;

class QueryBuilder implements CreateIndexInterface
{
    public function createIndex(string $name, Closure $closure)
    {
        $index = $closure(new ElasticPrint());

        dd($index);
    }

    public function updateIndex(string $name, Closure $closure)
    {

    }
}
