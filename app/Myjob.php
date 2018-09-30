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

class Myjob extends Model
{
	// protected $dateFormat = 'dd/mm/yyyy';
    protected $fillable=['jobloc_id','jobcat_id','job_company','jobpost_id','job_vacancies','jobqual_id',
		'jobexp_id','lastdate','advt','applynow','job_status','created_at','updated_at','final_date','online_fillable','job_description'];

	
	
		public function category()
	{
		return $this->belongsTo(Category::class);
	}


	
		public function post()
	{
		return $this->belongsTo(Post::class);
	}
	
	
	
		public function location()
	{
		return $this->belongsTo(Location::class);
	}
	
	
	
		public function qualification()
	{
		return $this->belongsTo(Qualification::class);
	}
	
	
	
		public function experience()
	{
		return $this->belongsTo(Experience::class);
	}
	
	
	
}
