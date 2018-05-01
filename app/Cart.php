<?php

namespace MOIC;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "carts";
    protected $primaryKey=array("userId","productId");

    public function user()
    {
        return $this->belongsTo('MOIC\User');
    }

    public function product()
    {
        return $this->belongsTo('MOIC\Product');
    }
    
}
