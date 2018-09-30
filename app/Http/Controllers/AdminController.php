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
use Illuminate\Support\Facades\Storage;
use File;
use Mail;
use Session;
use App\Mail\SendEmailMailable;
use App\Http\Controllers\Controller;



class AdminController extends Controller
{
	
	
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

	public function searchempty(Request $request)
    {
		$search = $request->search;
		
			$Jobs = DB::table('myjobs')
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.id','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_status','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->paginate(16);

			response()->json($Jobs);
			return view('admin.job.Admin_job_table', compact('Jobs'));		
	}
	
	public function admin(Request $request)
    {	
		$search = $request->search;
		$myvr = $request->myvr;
		
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
						->select('myjobs.id','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_status','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->paginate(16);

				if($myvr!="")
				{
					return[
						'Jobs' => view('admin.job.Admin_pagination')->with(compact('Jobs'))->render()
					];
				}

			response()->json($Jobs);
			return view('admin.job.Admin_job_table', compact('Jobs'));
		}
	
		else
		{
		
			$Jobs = DB::table('myjobs')
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.id','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_status','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->paginate(16);

				if($myvr!="")
				{
					return[
						'Jobs' => view('admin.job.Admin_pagination')->with(compact('Jobs'))->render()
					];
				}
				
			response()->json($Jobs);
			return view('admin.layout.admin', compact('Jobs'));		
		}
	}

	public function addjob(Request $request)
    {
			$Jobs = DB::table('myjobs')
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.id','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.job_vacancies','myjobs.job_status','myjobs.job_company','myjobs.updated_at', 'locations.name as locations','categories.name as categories','posts.name as posts','qualifications.name as qualifications','experiences.name as experiences')
						->orderBy('updated_at', 'DESC')
						->paginate(6);

						
			response()->json($Jobs);
			return view('admin.job.create', compact('Jobs'));		
	}
	
	public function jobedit(Request $request)
    {
		$jobid = $request->jobid;
		
			$Jobs = DB::table('myjobs')
						->join('locations', 'myjobs.jobloc_id', '=', 'locations.id')
						->join('categories', 'myjobs.jobcat_id', '=', 'categories.id')
						->join('posts', 'myjobs.jobpost_id', '=', 'posts.id')
						->join('qualifications', 'myjobs.jobqual_id', '=', 'qualifications.id')
						->join('experiences', 'myjobs.jobexp_id', '=', 'experiences.id')
						->select('myjobs.id','myjobs.applynow','myjobs.advt','myjobs.lastdate','myjobs.final_date','myjobs.online_fillable','myjobs.job_vacancies','myjobs.job_status','myjobs.job_company','myjobs.updated_at', 
									'locations.id as locationsid', 'locations.name as locations','categories.id as categoriesid','categories.name as categories','posts.id as postsid','posts.name as posts','qualifications.id as qualificationsid','qualifications.name as qualifications','experiences.id as experiencesid','experiences.name as experiences')
						->where('myjobs.id','=', $jobid)
						->get();

						
			response()->json($Jobs);
			return view('admin.job.edit', compact('Jobs'));		
	}	
	
    public function store(Request $request)
    {	
			
		$token = $request->token;
			
		if(isset($request->id)){
			
			$id = $request->id; 

			$jobold = Myjob::find($id);
			
			if($request->hasFile('advt')){
			
				$oldadv = public_path("storage/advts/{$jobold->advt}"); 
			
				if (is_file($oldadv)) { 
					unlink($oldadv);	
				}
			
				$file = $request->file('advt');
				$fileName = $file->getClientOriginalName();
				$fileName = time().$fileName;
				$request->advt->storeAs('advts',$fileName);
	 		}
			else{
				$fileName = $jobold->advt;
			}

				$job = DB::table('myjobs')->where('id', $id)
						->update([
								'jobloc_id' => $request->jobloc_id,
								'jobcat_id' => $request->jobcat_id,
								'jobpost_id' => $request->jobpost_id,
								'jobqual_id' => $request->jobqual_id,
								'jobexp_id' => $request->jobexp_id,
								
								'job_company' => $request->job_company,
								'job_vacancies' => $request->job_vacancies,
								'job_status' => $request->job_status,
								'lastdate' => $request->lastdate,
								'final_date' => $request->final_date,
								'online_fillable' => $request->online_fillable,								
								'advt' => $fileName,
								'applynow' => $request->applynow,							
								]);
		}
		else
		{

			$file = $request->file('advt');
			$fileName = $file->getClientOriginalName();
			$fileName = time().$fileName;
			$request->advt->storeAs('advts',$fileName);

			$job = new Myjob;
			$job->jobloc_id = $request->jobloc_id;
			$job->jobcat_id = $request->jobcat_id;
			$job->jobpost_id = $request->jobpost_id;
			$job->jobqual_id = $request->jobqual_id;
			$job->jobexp_id = $request->jobexp_id;
			
			$job->job_company = $request->job_company;
			$job->job_vacancies = $request->job_vacancies;
			$job->job_status = $request->job_status;
			$job->lastdate = $request->lastdate;
			$job->final_date = $request->final_date;
			$job->online_fillable = $request->online_fillable;
			$job->advt = $fileName;
			$job->applynow = $request->applynow;
			
			$job->save();
		}
			return response()->json($job);
	
    }	
	
	public function edit()
    {
        return view('admin.job.edit');
    }
	
    public function destroy($id)
    {
        $job = Myjob::find($id);
		
		$oldadv = public_path("storage/advts/{$job->advt}"); 
			
		if (is_file($oldadv)) { 
			unlink($oldadv);	
		}
		$job->destroy($id);
    }			

    public function deleteAll(Request $request)
    {
		$ids = $request->ids;
		
		$jobs = DB::table("myjobs")->whereIn('id',explode(",",$ids))->get();
		
		foreach ($jobs as $job) {
			$oldadv = public_path("storage/advts/{$job->advt}"); 
				
			if (is_file($oldadv)) { 
				unlink($oldadv);	
			}
		}
			
		DB::table("myjobs")->whereIn('id',explode(",",$ids))->delete();	
    }	

	public function fetchusertomail(Request $request)
    {	
		$loc = $request->loc; 
		$cat = $request->cat;
		$post = $request->post;
		$qual = $request->qual;

			$Users = DB::table('notifications')
						->where('location', 'like','%'.$loc.'%')
						->where('category', 'like','%'.$cat.'%')
						->where('post', 'like','%'.$post.'%')
						->where('qualification', 'like','%'.$qual.'%')
						->get()
						->toArray();
			
			$data = array(
				'company' => $request->company,
				'package' => $request->package,
				'lastdate' => $request->lastdate,
			);	
			
			foreach ($Users as $user) {
					Mail::to($user)->send(new SendEmailMailable($data));
				}	
	}


}

