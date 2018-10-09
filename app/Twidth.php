<?php

namespace TireManager;

use Illuminate\Database\Eloquent\Model;

class Twidth extends Model
{
   public function tyres()
    {
        return $this->hasMany('TireManager\Tyre','twidthId');
    }
}
