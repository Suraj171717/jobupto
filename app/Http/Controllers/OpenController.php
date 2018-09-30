<?php

namespace App\Http\Controllers;

use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Post;
use App\Qualification;
use App\Experience;
use App\Myjob;
use Illuminate\Database\Query\Builder;



class OpenController extends Controller
{

    public function index(Request $request)
    {
        
			$loc = $request->loc; 
			$cat = $request->cat;
			$post = $request->post;
			$qual = $request->qual;
			$exp = $request->exp;
			$myvr = $request->myvr;
			$search = $request->search;
			
        if ($loc!="" && $cat!="" && $post!="" && $qual!="" && $exp!="" && $search!="")
		{

            $Jobs = DB::table('myjobs')
						->where(function($q) use($search){	$q	->orWhere('lastdate', 'like','%'.$search.'%')
																->orWhere('job_company', 'like','%'.$search.'%')
																->orWhere('job_status', 'like','%'.$search.'%')
																->orWhere('job_vacancies', 'like','%'.$search.'%');
														})
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->whereIN('jobpost_id', explode( ',', $post ))
						->whereIN('jobqual_id', explode( ',', $qual ))
						->whereIN('jobexp_id', explode( ',', $exp ))
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
				if($myvr!="")
				{
					return[
						'Jobs' => view('fetchjob.pagination')->with(compact('Jobs'))->render()
					];
				}			
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs')); 
        }
		
        if ($loc!="" && $cat!="" && $post!="" && $qual!="" && $exp!="")
		{

            $Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->whereIN('jobpost_id', explode( ',', $post ))
						->whereIN('jobqual_id', explode( ',', $qual ))
						->whereIN('jobexp_id', explode( ',', $exp ))
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
			if($myvr!="")
				{
					return[
						'Jobs' => view('fetchjob.pagination')->with(compact('Jobs'))->render()
					];
				}			
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs')); 
        }		

		if ($search!="")
		{
			$Jobs = DB::table('myjobs')
					->where('job_company', 'like','%'.$search.'%')
					->orWhere('job_vacancies', 'like','%'.$search.'%')
					->orWhere('lastdate', 'like','%'.$search.'%')
					->orWhere('job_status', 'like','%'.$search.'%')
					->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
					->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
					->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
					->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
					->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
					->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','locations.id as locationsid','categories.name as categories','categories.id as categoriesid','posts.name as posts','posts.id as postsid','qualifications.name as qualifications','qualifications.id as qualificationsid','experiences.name as experiences','experiences.id as experiencesid')
					->orderBy('updated_at', 'DESC')
					->paginate(14); // now we are fetching all jobs
			
			
			if($myvr!="")
				{
					return[
							'Jobs' => view('fetchjob.pagination')->with(compact('Jobs'))->render()
						];
				}			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));		
		}

		else
		{
			$Jobs = DB::table('myjobs')
					->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
					->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
					->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
					->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
					->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
					->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','locations.id as locationsid','categories.name as categories','categories.id as categoriesid','posts.name as posts','posts.id as postsid','qualifications.name as qualifications','qualifications.id as qualificationsid','experiences.name as experiences','experiences.id as experiencesid')
					->orderBy('updated_at', 'DESC')
					->paginate(14); // now we are fetching all jobs
			

			if($request->ajax())
				{
					return[
							'Jobs' => view('fetchjob.pagination')->with(compact('Jobs'))->render()
						];
				} 
			return view('open.main', compact('Jobs'));
		} 	
	}

    public function aboutus(Request $request)
    {
		return view('front.aboutus'); 
	}
	
    public function contactus(Request $request)
    {
		return view('front.contactus'); 
	}
	
    public function privacy(Request $request)
    {	
		return view('front.privacy'); 
	}
	
}

