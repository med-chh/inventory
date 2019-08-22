<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name','quantity','buy_price','sale_price','category_id','media_id'];

    public $timestamps = true;
}
