<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'category_id', 'slug', 'price', 'description'];

    //Un prodotto avrà una sola categoria
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function order()
    {
        return $this->belongsToMany('App\Order');
    }

}
