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
use App\Mail\SendEmailMailable;
use App\Http\Controllers\Controller;



class AdminControllerAddCat extends Controller
{
	
	
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

	public function addcat(Request $request)
    {
		$search = $request->search;
		
		$locs = DB::table('locations')
					->select('locations.name','locations.id')
					->orderBy('updated_at', 'DESC')
					->Paginate(6);
					
		$cats = DB::table('categories')
					->select('categories.name','categories.id')
					->orderBy('updated_at', 'DESC')
					->Paginate(6);

		$posts = DB::table('posts')
					->select('posts.name','posts.id')
					->orderBy('updated_at', 'DESC')
					->Paginate(6);					

        $quals = DB::table('qualifications')
					->select('qualifications.name','qualifications.id')
					->orderBy('updated_at', 'DESC')
					->Paginate(6);

		$exps = DB::table('experiences')
					->select('experiences.name','experiences.id')
					->orderBy('updated_at', 'DESC')
					->Paginate(6);
					
		response()->json();
		return view('admin.job.Admin_add_cat', compact('locs','cats','posts','quals','exps'));	
	}


	
/* 	ADD--> location,categories,Qualification,Post,Experience */	
	
    public function storeloc(Request $request)
    {	
			
		$token = $request->token;
			
		if(isset($request->id)){
			
			$id = $request->id; 

			$locs = DB::table('locations')->where('id', $id)
					->update([
							'name' => $request->name,
							]);				
		}
		else
		{

			$locs = new Location;
			$locs->name = $request->name;
			$locs->save();
		}
			return response()->json($locs);
	
    }
	
    public function storecat(Request $request)
    {	
			
		$token = $request->token;
			
		if(isset($request->id)){
			
			$id = $request->id; 

			$cats = DB::table('categories')->where('id', $id)
					->update([
							'name' => $request->name,
							]);				
		}
		else
		{

			$cats = new Category;
			$cats->name = $request->name;
			$cats->save();
		}
			return response()->json($cats);
	
    }
	
	public function storepos(Request $request)
    {	
			
		$token = $request->token;
			
		if(isset($request->id)){
			
			$id = $request->id; 

			$posts = DB::table('posts')->where('id', $id)
					->update([
							'name' => $request->name,
							]);				
		}
		else
		{

			$posts = new Post;
			$posts->name = $request->name;
			$posts->save();
		}
			return response()->json($posts);
	
    }
	
	public function storequal(Request $request)
    {	
			
		$token = $request->token;
			
		if(isset($request->id)){
			
			$id = $request->id; 

			$quals = DB::table('qualifications')->where('id', $id)
					->update([
							'name' => $request->name,
							]);				
		}
		else
		{

			$quals = new Qualification;
			$quals->name = $request->name;
			$quals->save();
		}
			return response()->json($quals);
	
    }
	
    public function storeexp(Request $request)
    {	
			
		$token = $request->token;
			
		if(isset($request->id)){
			
			$id = $request->id; 

			$exps = DB::table('experiences')->where('id', $id)
					->update([
							'name' => $request->name,
							]);				
		}
		else
		{

			$exps = new Experience;
			$exps->name = $request->name;
			$exps->save();
		}
			return response()->json($exps);
	
    }
	

	
/* 	EDIT--> location,categories,Qualification,Post,Experience */
	
	public function locedit(Request $request)
    {
		$locid = $request->locid;
		
			$locs = DB::table('locations')
						->where('locations.id','=', $locid)
						->get();
					
			response()->json($locs);
			return view('admin.edit_cats.edit_loc', compact('locs'));		
	}	
	
	public function catedit(Request $request)
    {
		$catid = $request->catid;
		
			$cats = DB::table('categories')
						->where('categories.id','=', $catid)
						->get();
					
			response()->json($cats);
			return view('admin.edit_cats.edit_cat', compact('cats'));		
	}	
	
	public function posedit(Request $request)
    {
		$posid = $request->posid;
		
			$posts = DB::table('posts')
						->where('posts.id','=', $posid)
						->get();
					
			response()->json($posts);
			return view('admin.edit_cats.edit_pos', compact('posts'));		
	}	
	
	public function qualedit(Request $request)
    {
		$qualid = $request->qualid;
		
			$quals = DB::table('qualifications')
						->where('qualifications.id','=', $qualid)
						->get();
					
			response()->json($quals);
			return view('admin.edit_cats.edit_qual', compact('quals'));		
	}	
	
	public function expedit(Request $request)
    {
		$expid = $request->expid;
		
			$exps = DB::table('experiences')
						->where('experiences.id','=', $expid)
						->get();
					
			response()->json($exps);
			return view('admin.edit_cats.edit_exp', compact('exps'));		
	}	


	
/* 	DELETE --> location,categories,Qualification,Post,Experience */

    public function destroyloc($id)
    {
        $loc = Location::find($id);
		$loc->destroy($id);
    }	
	
    public function destroycat($id)
    {
        $cat = Category::find($id);
		$cat->destroy($id);
    }	
	
    public function destroypos($id)
    {
        $pos = Post::find($id);
		$pos->destroy($id);
    }	

    public function destroyqual($id)
    {
        $qual = Qualification::find($id);
		$qual->destroy($id);
    }	

    public function destroyexp($id)
    {
        $exp = Experience::find($id);
		$exp->destroy($id);
    }		




	
}

