<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Conner\Tagging\Taggable;
    protected $table = 'products';
    protected $fillable = [
        'name', 'category', 'price', 'new_price', 'spec', 'qty', 'sold', 'view', 'status', 'img', 'desc', 'color'
    ];
}
