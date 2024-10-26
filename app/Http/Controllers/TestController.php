<?php

namespace App\Http\Controllers;

use App\Elasticsearch\Migration\ElasticPrint;
use App\Facades\QueryBuilder;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function index()
    {

        $t = QueryBuilder::createIndex('test', function (ElasticPrint $index) {
            $index->setBoolean('testik', true);
            $index->setBoolean('testik2', true);

            return $index;
        });

        /*
        try {
            $t = Http::contentType('application/json')->send('put', 'http://elasticsearch:'. env('ELASTICSEARCH_PORT') .'/books2');

        } catch (\Exception $e) {
            dd($e);
        }
        dd(json_decode($t->body(), true));*/
       // QueryBuilder::getFacadeApplication();
    }
}
