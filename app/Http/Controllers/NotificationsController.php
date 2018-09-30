<?php

namespace App\Http\Controllers;


use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Location;
use App\Post;
use App\Qualification;
use App\Experience;
use App\Myjob;
use App\notifications;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\UploadedFile;
use Storage;
use File;
use Mail;
use Session;
use App\Mail\SendUserEmailMailable;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }	 
	 
    public function notification(Request $request)
    {
		return view('home.notificationform');
	}


    public function inbox(Request $request)
    {
		$nid = $request->nid;
		$search = $request->search;
		$myvr = $request->myvr;
		
		if ($nid!="")
		{
			$notes = DB::table('notifications')->where('user_id',$nid)->get();
			
			foreach ($notes as $note) {
				
				$loc = $note->location;
				$cat = $note->category;
				$qual = $note->qualification;
				$post = $note->post;
			}	
			
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
				
					if($myvr!="")
					{
						return[
							'Jobs' => view('fetchjob.pagination')->with(compact('Jobs'))->render()
						];
					}			
				
					response()->json($Jobs); //return to ajax
					return view('notification.jobs', compact('Jobs')); 
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
			
					if($myvr!="")
					{
						return[
							'Jobs' => view('fetchjob.pagination')->with(compact('Jobs'))->render()
						];
					}
					
					response()->json($Jobs); //return to ajax
					return view('notification.inbox', compact('Jobs'));
			}
		}

		return view('home.notificationjob');
	}

    public function notificationform(Request $request)
    {
		$uid = $request->uid; 

		$note = DB::table('notifications')->whereIN('user_id', explode( ',', $uid ) )->get();
		
	    response()->json($note); //return to ajax
		return view('notification.create', compact('note'));
	}	

    public function store(Request $request)
    {
			$loc = $request->loc; 
			$cat = $request->cat;
			$post = $request->post;
			$qual = $request->qual;
			$email = $request->email;
			$name = $request->name;
			// $mobile = $request->mobile;
			$user_id = $request->user_id;
			$token = $request->token;
				
        $note = DB::table("notifications")->insert([
									'user_id' => $user_id,
									'location' => $loc,
									'category' => $cat,
									'post' => $post,
									'qualification' => $qual,
									'name' => $name,
									'email' => $email,
									// 'mobile_no' => $mobile,
									'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
									'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
								]);
		
		return redirect('/notification');
	}


    public function destroy($id)
    {

		$note = notifications::find($id);
		$note->delete();
		
		 return redirect('/notification');
    }
	
    public function acknowledgeus(Request $request)
    {	
		$admin = $request->admin; 
			
		$data = array(
				'loc' => $request->loc,
				'cat' => $request->cat,
				'post' => $request->post,
				'qual' => $request->qual,
				'email' => $request->email,
			);
		
		Mail::to($admin)->send(new SendUserEmailMailable($data));
		return redirect('/notification')->with('alert-success', 'You have successfully Created!');
    }	
	
	
	
}
