<?php

namespace MOIC;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //
    protected $table  = 'writers';

    //primaryKey
    public $primaryKey = 'id';

    public $timestamps  = true;

    public function posts()
    {
        return $this->hasMany('MOIC\Post');
    }
    
}
