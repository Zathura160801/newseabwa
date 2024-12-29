<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductKeyPoint extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'product_id',
    ];
}
