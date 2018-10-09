<?php

namespace TireManager;

use Illuminate\Database\Eloquent\Model;

class Tspeed extends Model
{
    public function tyres()
    {
        return $this->hasMany('TireManager\Tyre','tspeedId');
    }
}
