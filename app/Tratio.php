<?php

namespace TireManager;

use Illuminate\Database\Eloquent\Model;

class Tratio extends Model
{
    public function tyres()
    {
        return $this->hasMany('TireManager\Tyre','tratioId');
    }
}
