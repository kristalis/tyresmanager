<?php

namespace TireManager;

use Illuminate\Database\Eloquent\Model;

class Tbrand extends Model
{
	protected $guarded = [];
	
    public function tyres()
    {
        return $this->hasMany('TireManager\Tyre','tbrandId');
    }
}
