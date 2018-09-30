<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable=['name'];
	
	
	public function myjobs()
	{
		return $this->hasMany(Myjob::class);
	
	}
}
