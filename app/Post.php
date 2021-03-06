<?php

namespace MOIC;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table  = 'posts';

    //primaryKey
    public $primaryKey = 'id';

    public $timestamps  = true;

    public function writer()
    {
        return $this->belongsTo('MOIC\Writer');
    }

    
}
