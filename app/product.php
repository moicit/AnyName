<?php

namespace MOIC;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function product_cart()
    {
        return $this->hasMany('MOIC\Cart');
    }

  
}
