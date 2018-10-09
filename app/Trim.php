<?php

namespace TireManager;

use Illuminate\Database\Eloquent\Model;

class Trim extends Model
{
    public function tyres()
    {
        return $this->hasMany('TireManager\Tyre','trimId');
    }
}
