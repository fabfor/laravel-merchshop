<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'is_active'];

    //Una categoria avrà tanti prodotti
    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
