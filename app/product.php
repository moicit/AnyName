<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function product_cart()
    {
        return $this->hasMany('App\Cart');
    }

    public function admin()
    {
        return $this->belongsTo("App\Admin");
    }
}
