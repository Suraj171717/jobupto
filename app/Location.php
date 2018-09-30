<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Post;
use App\Qualification;
use App\Experience;
use App\Myjob;


class Location extends Model
{
    protected $fillable=['name'];
	
	
	public function myjobs()
	{
		return $this->hasMany(Myjob::class);
	
	}
}
