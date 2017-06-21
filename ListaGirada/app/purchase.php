<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $table='purchases';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    //

    public function cp()
    {
        return $this->hasOne('App/product');
    }
}
