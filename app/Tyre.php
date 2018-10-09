<?php

namespace TireManager;

use Illuminate\Database\Eloquent\Model;

class Tyre extends Model
{
    public function tbrand()
	{
		return $this->belongsTo('TireManager\Tbrand','tbrandId');
	}
	 public function twidth()
	{
		return $this->belongsTo('TireManager\Twidth','twidthId');
	}
	 public function tratio()
	{
		return $this->belongsTo('TireManager\Tratio','tratioId');
	}
	 public function trim()
	{
		return $this->belongsTo('TireManager\Trim','trimId');
	}
	 public function tspeed()
	{
		return $this->belongsTo('TireManager\Tspeed','tspeedId');
	}
}
