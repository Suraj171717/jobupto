<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['name'];
	
	
	public function myjobs()
	{
		return $this->hasMany(Myjob::class);
	
	}
}
