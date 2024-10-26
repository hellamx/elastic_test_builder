<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'sku',
        'param_1',
        'param_2',
        'param_3',
        'param_4',
        'param_5',
        'param_6',
        'param_7',
        'param_8',
        'param_9',
        'param_10',
    ];
}
