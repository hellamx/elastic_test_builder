<?php

namespace App\Elasticsearch\Interfaces;

interface UpdateIndexInterface
{
    public function updateIndex(string $name);
}
