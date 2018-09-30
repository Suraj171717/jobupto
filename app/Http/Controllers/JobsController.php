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


class JobsController extends Controller
{


    public function jobsearch(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			$post = $request->post;
			$qual = $request->qual;
			$exp = $request->exp;
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
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));

        }
        if ($loc!="" && $cat!="" && $post!="" && $qual!="" && $exp!="" && $search=="")
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
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));

        }		
        if ($search!="")
		{
            $Jobs = DB::table('myjobs')
						->where(function($q) use($search){	$q	->orWhere('lastdate', 'like','%'.$search.'%')
																->orWhere('job_company', 'like','%'.$search.'%')
																->orWhere('job_status', 'like','%'.$search.'%')
																->orWhere('job_vacancies', 'like','%'.$search.'%');
														})
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
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
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));
		}		
		
	}


	


	/* fetch Left-container  */
		
	public function leftcontu(Request $request)
    {
		
		$Jobs = DB::table('myjobs')->get(); 
					
		$locaccor = $Jobs->implode('jobloc_id', ', ');
		$cataccor = $Jobs->implode('jobcat_id', ', ');
		$postaccor = $Jobs->implode('jobpost_id', ', ');
		$qualaccor = $Jobs->implode('jobqual_id', ', ');
		$expaccor = $Jobs->implode('jobexp_id', ', ');

		
		$locs = DB::table('locations')
					->whereIN('id', explode( ',', $locaccor ))
					->orderby('name', 'ASC')
					->get();
					
		$cats = DB::table('categories')
					->whereIN('id', explode( ',', $cataccor ))
					->orderby('name', 'ASC')
					->get();

		$posts = DB::table('posts')
				->whereIN('id', explode( ',', $postaccor ))
				->orderby('name', 'ASC')
				->get();					

        $quals = DB::table('qualifications')
					->whereIN('id', explode( ',', $qualaccor ))
					->orderby('name', 'ASC')
					->get();

		$exps = DB::table('experiences')
					->whereIN('id', explode( ',', $expaccor ))
					->orderby('name', 'ASC')
					->get();
					
		response()->json($Jobs); //return to ajax
		return view('fetchjob.leftcontainer', compact('locs','cats','posts','quals','exps','Jobs'));
	}



	
	/* Side-Nav auto adjust  */

	public function autocat(Request $request)
    {
		$loc = $request->loc; 
		
		$Jobs = DB::table('myjobs')
					->whereIN('jobloc_id', explode( ',', $loc ))
					->get(); // now we are fetching all jobs

		$cataccor = $Jobs->implode('jobcat_id', ', ');
			
		$cats = DB::table('categories')
					->whereIN('id', explode( ',', $cataccor ))
					->orderby('name', 'ASC')
					->get();
					
		response()->json($Jobs); //return to ajax
		return view('fetchjob.autocat', compact('cats','Jobs'));
	}	
	
	public function autopost(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			
		if ($cat!="" && $loc!="")
		{
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->get(); // now we are fetching all jobs
		}
        else
		{
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->get(); // now we are fetching all jobs			
		}
	       
		$postaccor = $Jobs->implode('jobpost_id', ', ');

		$posts = DB::table('posts')
				->whereIN('id', explode( ',', $postaccor ))
				->orderby('name', 'ASC')
				->get();				 
					 
		response()->json($posts); //return to ajax
		return view('fetchjob.autopost', compact('posts','Jobs')); 
	}
	
	public function autoqual(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			$post = $request->post;

		if ($post!="" && $cat!="" && $loc!="")
		{
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->whereIN('jobpost_id', explode( ',', $post ))
						->get(); // now we are fetching all jobs
		}
		elseif ($cat!="" && $loc!="")
		{
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->get(); // now we are fetching all jobs
		}
        else
		{
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->get(); // now we are fetching all jobs			
		}		
	    
		$qualaccor = $Jobs->implode('jobqual_id', ', ');

        $quals = DB::table('qualifications')
					->whereIN('id', explode( ',', $qualaccor ))
					->orderby('name', 'ASC')
					->get();				 
				 
		response()->json($quals); //return to ajax
		return view('fetchjob.autoqual', compact('quals','Jobs')); 
	}

	public function autoexp(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			$post = $request->post;
			$qual = $request->qual;

		if ($qual!="" && $post!="" && $cat!="" && $loc!="")
		{			
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->whereIN('jobpost_id', explode( ',', $post ))
						->whereIN('jobqual_id', explode( ',', $qual ))
						->get(); // now we are fetching all jobs
		}
		elseif ($post!="" && $cat!="" && $loc!="")
		{
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->whereIN('jobpost_id', explode( ',', $post ))
						->get(); // now we are fetching all jobs
		}
		elseif ($cat!="" && $loc!="")
		{
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->get(); // now we are fetching all jobs
		}
        else
		{
			$Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->get(); // now we are fetching all jobs			
		}					 
	        
		$expaccor = $Jobs->implode('jobexp_id', ', ');

		$exps = DB::table('experiences')
					->whereIN('id', explode( ',', $expaccor ))
					->orderby('name', 'ASC')
					->get();				 
					 
		response()->json($exps); //return to ajax
		return view('fetchjob.autoexp', compact('exps','Jobs')); 
	}	
	

	
	
	
	/* fetch jobs by category  */	

    public function jobfetchloc(Request $request)
    {
			$loc = $request->loc; 
			$search = $request->search;
		
        if ($search!="")
		{

            $Jobs = DB::table('myjobs')
						->where(function($q) use($search){	$q	->orWhere('lastdate', 'like','%'.$search.'%')
																->orWhere('job_company', 'like','%'.$search.'%')
																->orWhere('job_status', 'like','%'.$search.'%')
																->orWhere('job_vacancies', 'like','%'.$search.'%');
														})
						->whereIN('jobloc_id', explode( ',', $loc ))
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));

        }
		else
		{
            $Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','locations.id as locationsid','categories.name as categories','categories.id as categoriesid','posts.name as posts','posts.id as postsid','qualifications.name as qualifications','qualifications.id as qualificationsid','experiences.name as experiences','experiences.id as experiencesid')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
				

				response()->json($Jobs);
				return view('fetchjob.jobs', compact('Jobs'));
		}		
		
	}
	
    public function jobfetchcat(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			$search = $request->search;
		
        if ($search!="")
		{

            $Jobs = DB::table('myjobs')
						->where(function($q) use($search){	$q	->orWhere('lastdate', 'like','%'.$search.'%')
																->orWhere('job_company', 'like','%'.$search.'%')
																->orWhere('job_status', 'like','%'.$search.'%')
																->orWhere('job_vacancies', 'like','%'.$search.'%');
														})
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));

        }
		else
		{
            $Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','locations.id as locationsid','categories.name as categories','categories.id as categoriesid','posts.name as posts','posts.id as postsid','qualifications.name as qualifications','qualifications.id as qualificationsid','experiences.name as experiences','experiences.id as experiencesid')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
				

				response()->json($Jobs);
				return view('fetchjob.jobs', compact('Jobs'));
		}		
		
	}
	
    public function jobfetchpost(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			$post = $request->post;
			$search = $request->search;
		
        if ($search!="")
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
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));

        }
		else
		{
            $Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->whereIN('jobpost_id', explode( ',', $post ))
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','locations.id as locationsid','categories.name as categories','categories.id as categoriesid','posts.name as posts','posts.id as postsid','qualifications.name as qualifications','qualifications.id as qualificationsid','experiences.name as experiences','experiences.id as experiencesid')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
				

				response()->json($Jobs);
				return view('fetchjob.jobs', compact('Jobs'));
		}		
		
	}
	
    public function jobfetchqual(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			$post = $request->post;
			$qual = $request->qual;
			$search = $request->search;
		
        if ($search!="")
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
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));

        }
		else
		{
            $Jobs = DB::table('myjobs')
						->whereIN('jobloc_id', explode( ',', $loc ))
						->whereIN('jobcat_id', explode( ',', $cat ))
						->whereIN('jobpost_id', explode( ',', $post ))
						->whereIN('jobqual_id', explode( ',', $qual ))
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','locations.id as locationsid','categories.name as categories','categories.id as categoriesid','posts.name as posts','posts.id as postsid','qualifications.name as qualifications','qualifications.id as qualificationsid','experiences.name as experiences','experiences.id as experiencesid')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
				

				response()->json($Jobs);
				return view('fetchjob.jobs', compact('Jobs'));
		}		
		
	}

    public function jobfetchexp(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			$post = $request->post;
			$qual = $request->qual;
			$exp = $request->exp;
			$search = $request->search;
		
        if ($search!="")
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
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));

        }
		else
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
						->select('myjobs.job_status','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','locations.id as locationsid','categories.name as categories','categories.id as categoriesid','posts.name as posts','posts.id as postsid','qualifications.name as qualifications','qualifications.id as qualificationsid','experiences.name as experiences','experiences.id as experiencesid')
						->orderBy('updated_at', 'DESC')
						->Paginate(14);
			
			response()->json($Jobs); //return to ajax
			return view('fetchjob.jobs', compact('Jobs'));
		}		
		
	}


	
}
