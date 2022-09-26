<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [ 'url', 'name', 'product_id' ];

    public $timestamps = false;
}
