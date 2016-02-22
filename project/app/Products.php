<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    protected $fillable = [
    			'cst_id',
    			'itemno',
    			'producttype',
    			'productname',
    			'description',
    			'price'
    ];
}
