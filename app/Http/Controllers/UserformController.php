<?php

namespace App\Http\Controllers;


use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Myjob;
use App\Userform;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\UploadedFile;
use Storage;
use File;
use Mail;
use Session;
use App\Mail\SendUserEmailMailable;
use App\Http\Controllers\Controller;

class UserformController extends Controller
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
	 
    public function userform(Request $request)
    {
		return view('home.userform');
	}

    public function newform(Request $request)
    {
		$uid = $request->uid; 

		$form = DB::table('userforms')->whereIN('user_id', explode( ',', $uid ) )->get();
		
	    response()->json($form); //return to ajax
		return view('userform.create', compact('form'));
	}

    public function store(Request $request)
    {	

		if(isset($request->id)){
		
			$id = $request->id; 
			
			$formnew = Userform::find($id);
		
			if($request->hasFile('upload_photo')){
				
				$usersphoto = public_path("storage/userfiles/photo/{$formnew->upload_photo}");
				
				if (is_file($usersphoto)) { 
					unlink($usersphoto);		
				}
				
				$upload_photo = $request->file('upload_photo');
				$upload_photoName = $upload_photo->getClientOriginalName();
				$upload_photoName = time().$upload_photoName;
				$request->upload_photo->storeAs('userfiles/photo',$upload_photoName);
			}
			else{
				$upload_photoName = $formnew->upload_photo;
			}
			
			if($request->hasFile('upload_sign')){
			
				$userssign = public_path("storage/userfiles/sign/{$formnew->upload_sign}"); 
			
				if (is_file($userssign)) { 
					unlink($userssign);		
				}
			
				$upload_sign = $request->file('upload_sign');
				$upload_signName = $upload_sign->getClientOriginalName();
				$upload_signName = time().$upload_signName;
				$request->upload_sign->storeAs('userfiles/sign',$upload_signName);
	 		}
			else{
				$upload_signName = $formnew->upload_sign;
			}
			
			if($request->hasFile('upload_age_proof')){
			
				$usersageproof = public_path("storage/userfiles/ageproof/{$formnew->upload_age_proof}"); 
			
				if (is_file($usersageproof)) { 
					unlink($usersageproof);		
				}
		
				$upload_age_proof = $request->file('upload_age_proof');
				$upload_age_proofName = $upload_age_proof->getClientOriginalName();
				$upload_age_proofName = time().$upload_age_proofName;
				$request->upload_age_proof->storeAs('userfiles/ageproof',$upload_age_proofName);
			}
			else{
				$upload_age_proofName = $formnew->upload_age_proof;
			}
			
			if($request->hasFile('upload_thumb')){
				
				$usersthumb = public_path("storage/userfiles/thumb/{$formnew->upload_thumb}");	
				
				if (is_file($usersthumb)) { 
					unlink($usersthumb);		
				}				
				
				$upload_thumb = $request->file('upload_thumb');
				$upload_thumbName = $upload_thumb->getClientOriginalName();
				$upload_thumbName = time().$upload_thumbName;
				$request->upload_thumb->storeAs('userfiles/thumb',$upload_thumbName);
			}
			else{
				$upload_thumbName = $formnew->upload_thumb;
			}

			if($request->hasFile('upload_caste')){
		
				$userscaste = public_path("storage/userfiles/caste/{$formnew->upload_caste}");			
				
				if (is_file($userscaste)) { 
					unlink($userscaste);		
				}
				
				$upload_caste = $request->file('upload_caste');
				$upload_casteName = $upload_caste->getClientOriginalName();
				$upload_casteName = time().$upload_casteName;
				$request->upload_caste->storeAs('userfiles/caste',$upload_casteName);
			}
			else{
					$upload_casteName = $formnew->upload_caste;
				}		
			
			if($request->hasFile('upload_noncreamy_layer')){
				
				$userscreamy = public_path("storage/userfiles/noncreamy/{$formnew->upload_noncreamy_layer}");
				
				if (is_file($userscreamy)) { 
				unlink($userscreamy);	
				}
				
				$upload_noncreamy_layer = $request->file('upload_noncreamy_layer');
				$upload_noncreamy_layerName = $upload_noncreamy_layer->getClientOriginalName();
				$upload_noncreamy_layerName = time().$upload_noncreamy_layerName;
				$request->upload_noncreamy_layer->storeAs('userfiles/noncreamy',$upload_noncreamy_layerName);
			}
			else{
				$upload_noncreamy_layerName = $formnew->upload_noncreamy_layer;
			}	

			if($request->hasFile('x_upload')){		

				$usersx = public_path("storage/userfiles/x/{$formnew->x_upload}");

				if (is_file($usersx)) { 		
				unlink($usersx);		
				}
				
				$x_upload = $request->file('x_upload');
				$x_uploadName = $x_upload->getClientOriginalName();
				$x_uploadName = time().$x_uploadName;
				$request->x_upload->storeAs('userfiles/x',$x_uploadName);
			}
			else{
					$x_uploadName = $formnew->x_upload;
				}	
				
			if($request->hasFile('xii_upload')){	
			
				$usersxii = public_path("storage/userfiles/xii/{$formnew->xii_upload}");
			
				if (is_file($usersxii)) { 		
				unlink($usersxii);		
				}
			
				$xii_upload = $request->file('xii_upload');
				$xii_uploadName = $xii_upload->getClientOriginalName();
				$xii_uploadName = time().$xii_uploadName;
				$request->xii_upload->storeAs('userfiles/xii',$xii_uploadName);
			}
			else{
					$xii_uploadName = $formnew->xii_upload;
				}
				
			if($request->hasFile('diploma_upload')){

				$usersdip = public_path("storage/userfiles/diploma/{$formnew->diploma_upload}"); 
			
				if (is_file($usersdip)) { 		
					unlink($usersdip);		
				}
			
				$diploma_upload = $request->file('diploma_upload');
				$diploma_uploadName = $diploma_upload->getClientOriginalName();
				$diploma_uploadName = time().$diploma_uploadName;
				$request->diploma_upload->storeAs('userfiles/diploma',$diploma_uploadName);
			}
			else{
					$diploma_uploadName = $formnew->diploma_upload;
				}
			
			if($request->hasFile('ug_upload')){
				
				$usersug = public_path("storage/userfiles/ug/{$formnew->ug_upload}");
				
				if (is_file($usersug)) { 		
				unlink($usersug);		
				}
				
				$ug_upload = $request->file('ug_upload');
				$ug_uploadName = $ug_upload->getClientOriginalName();
				$ug_uploadName = time().$ug_uploadName;
				$request->ug_upload->storeAs('userfiles/ug',$ug_uploadName);
			}
			else{
					$ug_uploadName = $formnew->ug_upload;
				}

			if($request->hasFile('pg_upload')){		

				$userspg = public_path("storage/userfiles/pg/{$formnew->pg_upload}"); 
			
				if(is_file($userspg)) { 		
				unlink($userspg);		
				}
			
				$pg_upload = $request->file('pg_upload');
				$pg_uploadName = $pg_upload->getClientOriginalName();
				$pg_uploadName = time().$pg_uploadName;
				$request->pg_upload->storeAs('userfiles/pg',$pg_uploadName);
			}
			else{
					$pg_uploadName = $formnew->pg_upload;
				}

			if($request->hasFile('phd_upload')){

				$usersphd = public_path("storage/userfiles/phd/{$formnew->phd_upload}");

				if(is_file($usersphd)){ 		
					unlink($usersphd);		
				}
				
				$phd_upload = $request->file('phd_upload');
				$phd_uploadName = $phd_upload->getClientOriginalName();
				$phd_uploadName = time().$phd_uploadName;
				$request->phd_upload->storeAs('userfiles/phd',$phd_uploadName);
			}
			else{
					$phd_uploadName = $formnew->phd_upload;
				}		
			

				$form = DB::table('userforms')
							->where('id', $id)
							->update([
							
								'user_id' => $request->user_id,
								'email' => $request->email,
								'pwd' => $request->pwd,
								'mob_1' => $request->mob_1,
								'mob_2' => $request->mob_2,
								
								'name_title' => $request->name_title,
								'first_name' => $request->first_name,
								'middle_name' => $request->middle_name,
								'last_name' => $request->last_name,
								'father_name' => $request->father_name,
								'mother_name' => $request->mother_name,		
								'name_ssc' => $request->name_ssc,
								'gender' => $request->gender,
								'marital_status' => $request->marital_status,
								'spouse_name' => $request->spouse_name,

								'height' => $request->height,
								'weight' => $request->weight,
								'visibility_mark' => $request->visibility_mark,
								'aadhar_no' => $request->aadhar_no,

								'user_dob' => $request->user_dob,
								'nationality' => $request->nationality,		
								'nationality_other' => $request->nationality_other,
								'religion' => $request->religion,
								'religion_minority' => $request->religion_minority,
								'earthquake_affected' => $request->earthquake_affected,								
								
								'ex_servicemen' => $request->ex_servicemen,
								'exsm_doj' => $request->exsm_doj,
								'exsm_dod' => $request->exsm_dod,
								'exsm_month_served' => $request->exsm_month_served,								

								'govt_servant' => $request->govt_servant,
								'gs_type' => $request->gs_type,		
								'gs_type_other' => $request->gs_type_other,
								'gs_doj' => $request->gs_doj,
								'gs_dptmnt' => $request->gs_dptmnt,

								'govt_civil_side' => $request->govt_civil_side,
								'riots' => $request->riots,		
								'jk_domicile_range' => $request->jk_domicile_range,
								'jk_domicile' => $request->jk_domicile,
								'jk_from' => $request->jk_from,
								'jk_to' => $request->jk_to,	
								
								'caste' => $request->caste,
								'caste_other' => $request->caste_other,
								'caste_certificate_no' => $request->caste_certificate_no,
								'caste_doi' => $request->caste_doi,									
								
								'c_add1' => $request->c_add1,
								'c_add2' => $request->c_add2,		
								'c_add3' => $request->c_add3,
								'c_add4' => $request->c_add4,
								'c_add5' => $request->c_add5,
								'c_pin' => $request->c_pin,									
								
								'p_add1' => $request->p_add1,
								'p_add2' => $request->p_add2,		
								'p_add3' => $request->p_add3,
								'p_add4' => $request->p_add4,
								'p_add5' => $request->p_add5,
								'p_pin' => $request->p_pin,									
								
								'cent1' => $request->cent1,
								'cent2' => $request->cent2,		
								'cent3' => $request->cent3,
								'cent4' => $request->cent4,								
								
								
								'x_status' => $request->x_status,
								'x_rd' => $request->x_rd,		
								'x_subject' => $request->x_subject,
								'x_board' => $request->x_board,
								'x_yop' => $request->x_yop,
								'x_marks_obtain' => $request->x_marks_obtain,									
								'x_max_marks' => $request->x_max_marks,
								'x_pecentage' => $request->x_pecentage,		
								'x_grade' => $request->x_grade,
								'x_upload' => $x_uploadName,									
								
								'xii_status' => $request->xii_status,
								'xii_rd' => $request->xii_rd,		
								'xii_subject' => $request->xii_subject,
								'xii_board' => $request->xii_board,
								'xii_yop' => $request->xii_yop,
								'xii_marks_obtain' => $request->xii_marks_obtain,									
								'xii_max_marks' => $request->xii_max_marks,
								'xii_pecentage' => $request->xii_pecentage,		
								'xii_grade' => $request->xii_grade,
								'xii_upload' => $xii_uploadName,																	
								
								'diploma_status' => $request->diploma_status,
								'diploma_rd' => $request->diploma_rd,		
								'diploma_subject' => $request->diploma_subject,
								'diploma_board' => $request->diploma_board,
								'diploma_yop' => $request->diploma_yop,
								'diploma_marks_obtain' => $request->diploma_marks_obtain,									
								'diploma_max_marks' => $request->diploma_max_marks,
								'diploma_pecentage' => $request->diploma_pecentage,		
								'diploma_grade' => $request->diploma_grade,
								'diploma_upload' => $diploma_uploadName,									
								
								'ug_status' => $request->ug_status,
								'ug_rd' => $request->ug_rd,		
								'ug_subject' => $request->ug_subject,
								'ug_board' => $request->ug_board,
								'ug_yop' => $request->ug_yop,
								'ug_marks_obtain' => $request->ug_marks_obtain,									
								'ug_max_marks' => $request->ug_max_marks,
								'ug_pecentage' => $request->ug_pecentage,		
								'ug_grade' => $request->ug_grade,
								'ug_upload' => $ug_uploadName,									
								
								'pg_status' => $request->pg_status,
								'pg_rd' => $request->pg_rd,		
								'pg_subject' => $request->pg_subject,
								'pg_board' => $request->pg_board,
								'pg_yop' => $request->pg_yop,
								'pg_marks_obtain' => $request->pg_marks_obtain,									
								'pg_max_marks' => $request->pg_max_marks,
								'pg_pecentage' => $request->pg_pecentage,		
								'pg_grade' => $request->pg_grade,
								'pg_upload' => $pg_uploadName,									
								
								'phd_status' => $request->phd_status,
								'phd_rd' => $request->phd_rd,		
								'phd_subject' => $request->phd_subject,
								'phd_board' => $request->phd_board,
								'phd_yop' => $request->phd_yop,
								'phd_marks_obtain' => $request->phd_marks_obtain,									
								'phd_max_marks' => $request->phd_max_marks,
								'phd_pecentage' => $request->phd_pecentage,		
								'phd_grade' => $request->phd_grade,
								'phd_upload' => $phd_uploadName,									

								'upload_photo' => $upload_photoName,
								'upload_sign' => $upload_signName,									
								'upload_age_proof' => $upload_age_proofName,
								'upload_thumb' => $upload_thumbName,		
								'upload_caste' => $upload_casteName,
								'upload_noncreamy_layer' => $upload_noncreamy_layerName,								
								]);		

				return response()->json($form);
								
		}
		else{

  			$upload_photo = $request->file('upload_photo');
			$upload_photoName = $upload_photo->getClientOriginalName();
			$upload_photoName = time().$upload_photoName;
			$request->upload_photo->storeAs('userfiles/photo',$upload_photoName);
	
 			$upload_sign = $request->file('upload_sign');
			$upload_signName = $upload_sign->getClientOriginalName();
			$upload_signName = time().$upload_signName;
			$request->upload_sign->storeAs('userfiles/sign',$upload_signName);
	 		
			$upload_age_proof = $request->file('upload_age_proof');
			$upload_age_proofName = $upload_age_proof->getClientOriginalName();
			$upload_age_proofName = time().$upload_age_proofName;
			$request->upload_age_proof->storeAs('userfiles/ageproof',$upload_age_proofName);

 			$upload_thumb = $request->file('upload_thumb');
			$upload_thumbName = $upload_thumb->getClientOriginalName();
			$upload_thumbName = time().$upload_thumbName;
			$request->upload_thumb->storeAs('userfiles/thumb',$upload_thumbName);
	
		if($request->hasFile('upload_caste')){
 			$upload_caste = $request->file('upload_caste');
			$upload_casteName = $upload_caste->getClientOriginalName();
			$upload_casteName = time().$upload_casteName;
			$request->upload_caste->storeAs('userfiles/caste',$upload_casteName);
	 	}
		else{
				$upload_casteName ="";
			}
		
		if($request->hasFile('upload_noncreamy_layer')){
			$upload_noncreamy_layer = $request->file('upload_noncreamy_layer');
			$upload_noncreamy_layerName = $upload_noncreamy_layer->getClientOriginalName();
			$upload_noncreamy_layerName = time().$upload_noncreamy_layerName;
			$request->upload_noncreamy_layer->storeAs('userfiles/noncreamy',$upload_noncreamy_layerName);
		}
		else{
				$upload_noncreamy_layerName ="";
			}	
						
 		$x_upload = $request->file('x_upload');
		$x_uploadName = $x_upload->getClientOriginalName();
		$x_uploadName = time().$x_uploadName;
		$request->x_upload->storeAs('userfiles/x',$x_uploadName);

		if($request->hasFile('xii_upload')){	
 			$xii_upload = $request->file('xii_upload');
			$xii_uploadName = $xii_upload->getClientOriginalName();
			$xii_uploadName = time().$xii_uploadName;
			$request->xii_upload->storeAs('userfiles/xii',$xii_uploadName);
		}
		else{
				$xii_uploadName ="";
			}
	 		
		if($request->hasFile('diploma_upload')){	
			$diploma_upload = $request->file('diploma_upload');
			$diploma_uploadName = $diploma_upload->getClientOriginalName();
			$diploma_uploadName = time().$diploma_uploadName;
			$request->diploma_upload->storeAs('userfiles/diploma',$diploma_uploadName);
		}
		else{
				$diploma_uploadName ="";
			}
		
		if($request->hasFile('ug_upload')){
 			$ug_upload = $request->file('ug_upload');
			$ug_uploadName = $ug_upload->getClientOriginalName();
			$ug_uploadName = time().$ug_uploadName;
			$request->ug_upload->storeAs('userfiles/ug',$ug_uploadName);
		}
		else{
				$ug_uploadName ="";
			}

		if($request->hasFile('pg_upload')){			
 			$pg_upload = $request->file('pg_upload');
			$pg_uploadName = $pg_upload->getClientOriginalName();
			$pg_uploadName = time().$pg_uploadName;
			$request->pg_upload->storeAs('userfiles/pg',$pg_uploadName);
		}
		else{
				$pg_uploadName ="";
			}

		if($request->hasFile('phd_upload')){		 		
			$phd_upload = $request->file('phd_upload');
			$phd_uploadName = $phd_upload->getClientOriginalName();
			$phd_uploadName = time().$phd_uploadName;
			$request->phd_upload->storeAs('userfiles/phd',$phd_uploadName);
		}
		else{
				$phd_uploadName ="";
			}		
		
		
			$form = new Userform;
			$form->user_id = $request->user_id;
			$form->email = $request->email;
			$form->pwd = $request->pwd;
			$form->mob_1 = $request->mob_1;
			$form->mob_2 = $request->mob_2;			
			
			$form->name_title = $request->name_title;
			$form->first_name = $request->first_name;
			$form->middle_name = $request->middle_name;
			$form->last_name = $request->last_name;
			$form->father_name = $request->father_name;
			$form->mother_name = $request->mother_name;
			$form->name_ssc = $request->name_ssc;
			$form->gender = $request->gender;
			$form->marital_status = $request->marital_status;
			$form->spouse_name = $request->spouse_name;

			$form->height = $request->height;
			$form->weight = $request->weight;
			$form->visibility_mark = $request->visibility_mark;
			$form->aadhar_no = $request->aadhar_no;
			
			$form->user_dob = $request->user_dob;
			$form->nationality = $request->nationality;
			$form->nationality_other = $request->nationality_other;
			$form->religion = $request->religion;
			$form->religion_minority = $request->religion_minority;
			$form->earthquake_affected = $request->earthquake_affected;
			
			$form->ex_servicemen = $request->ex_servicemen;
			$form->exsm_doj = $request->exsm_doj;
			$form->exsm_dod = $request->exsm_dod;
			$form->exsm_month_served = $request->exsm_month_served;
			
			$form->govt_servant = $request->govt_servant;
			$form->gs_type = $request->gs_type;
			$form->gs_type_other = $request->gs_type_other;
			$form->gs_doj = $request->gs_doj;
			$form->gs_dptmnt = $request->gs_dptmnt;
			
			$form->govt_civil_side = $request->govt_civil_side;
			$form->riots = $request->riots;
			$form->jk_domicile_range = $request->jk_domicile_range;
			$form->jk_domicile = $request->jk_domicile;
			$form->jk_from = $request->jk_from;
			$form->jk_to = $request->jk_to;
			
			$form->caste = $request->caste;
			$form->caste_other = $request->caste_other;
			$form->caste_certificate_no = $request->caste_certificate_no;
			$form->caste_doi = $request->caste_doi;

			$form->add_invoice = $request->add_invoice;
			$form->c_add1 = $request->c_add1;
			$form->c_add2 = $request->c_add2;
			$form->c_add3 = $request->c_add3;
			$form->c_add4 = $request->c_add4;
			$form->c_add5 = $request->c_add5;
			$form->c_pin = $request->c_pin;

			$form->p_add1 = $request->p_add1;
			$form->p_add2 = $request->p_add2;
			$form->p_add3 = $request->p_add3;
			$form->p_add4 = $request->p_add4;
			$form->p_add5 = $request->p_add5;
			$form->p_pin = $request->p_pin;			

			$form->cent1 = $request->cent1;
			$form->cent2 = $request->cent2;
			$form->cent3 = $request->cent3;
			$form->cent4 = $request->cent4;			
			
			$form->x_status = $request->x_status;
			$form->x_rd = $request->x_rd;
			$form->x_subject = $request->x_subject;
			$form->x_board = $request->x_board;
			$form->x_yop = $request->x_yop;
			$form->x_marks_obtain = $request->x_marks_obtain;
			$form->x_max_marks = $request->x_max_marks;
			$form->x_pecentage = $request->x_pecentage;
			$form->x_grade = $request->x_grade;
			$form->x_upload = $x_uploadName;
			
			$form->xii_status = $request->xii_status;
			$form->xii_rd = $request->xii_rd;
			$form->xii_subject = $request->xii_subject;
			$form->xii_board = $request->xii_board;
			$form->xii_yop = $request->xii_yop;
			$form->xii_marks_obtain = $request->xii_marks_obtain;
			$form->xii_max_marks = $request->xii_max_marks;
			$form->xii_pecentage = $request->xii_pecentage;
			$form->xii_grade = $request->xii_grade;
			$form->xii_upload = $xii_uploadName;
			
			$form->diploma_status = $request->diploma_status;
			$form->diploma_rd = $request->diploma_rd;
			$form->diploma_subject = $request->diploma_subject;
			$form->diploma_board = $request->diploma_board;
			$form->diploma_yop = $request->diploma_yop;
			$form->diploma_marks_obtain = $request->diploma_marks_obtain;
			$form->diploma_max_marks = $request->diploma_max_marks;
			$form->diploma_pecentage = $request->diploma_pecentage;
			$form->diploma_grade = $request->diploma_grade;
			$form->diploma_upload = $diploma_uploadName;
			
			$form->ug_status = $request->ug_status;
			$form->ug_rd = $request->ug_rd;
			$form->ug_subject = $request->ug_subject;
			$form->ug_board = $request->ug_board;
			$form->ug_yop = $request->ug_yop;
			$form->ug_marks_obtain = $request->ug_marks_obtain;
			$form->ug_max_marks = $request->ug_max_marks;
			$form->ug_pecentage = $request->ug_pecentage;
			$form->ug_grade = $request->ug_grade;
			$form->ug_upload = $ug_uploadName;
			
			$form->pg_status = $request->pg_status;
			$form->pg_rd = $request->pg_rd;
			$form->pg_subject = $request->pg_subject;
			$form->pg_board = $request->pg_board;
			$form->pg_yop = $request->pg_yop;
			$form->pg_marks_obtain = $request->pg_marks_obtain;
			$form->pg_max_marks = $request->pg_max_marks;
			$form->pg_pecentage = $request->pg_pecentage;
			$form->pg_grade = $request->pg_grade;
			$form->pg_upload = $pg_uploadName;
			
			$form->phd_status = $request->phd_status;
			$form->phd_rd = $request->phd_rd;
			$form->phd_subject = $request->phd_subject;
			$form->phd_board = $request->phd_board;
			$form->phd_yop = $request->phd_yop;
			$form->phd_marks_obtain = $request->phd_marks_obtain;
			$form->phd_max_marks = $request->phd_max_marks;
			$form->phd_pecentage = $request->phd_pecentage;
			$form->phd_grade = $request->phd_grade;
			$form->phd_upload = $phd_uploadName;
			
			$form->upload_photo = $upload_photoName;
			$form->upload_sign = $upload_signName;
			$form->upload_age_proof = $upload_age_proofName;
			$form->upload_thumb = $upload_thumbName;
			$form->upload_caste = $upload_casteName;
			$form->upload_noncreamy_layer = $upload_noncreamy_layerName;
				
			$form->save();
			return response()->json($form);
		}
    }	
	
    public function destroy($id)
    {
        $form = Userform::find($id);
		
        $usersphoto = public_path("storage/userfiles/photo/{$form->upload_photo}"); 
        $userssign = public_path("storage/userfiles/sign/{$form->upload_sign}"); 
        $usersageproof = public_path("storage/userfiles/ageproof/{$form->upload_age_proof}"); 
        $usersthumb = public_path("storage/userfiles/thumb/{$form->upload_thumb}"); 
        $userscaste = public_path("storage/userfiles/caste/{$form->upload_caste}"); 
        $userscreamy = public_path("storage/userfiles/noncreamy/{$form->upload_noncreamy_layer}"); 
		
        $usersx = public_path("storage/userfiles/x/{$form->x_upload}"); 
        $usersxii = public_path("storage/userfiles/xii/{$form->xii_upload}"); 
        $usersdip = public_path("storage/userfiles/diploma/{$form->diploma_upload}"); 
        $usersug = public_path("storage/userfiles/ug/{$form->ug_upload}"); 
        $userspg = public_path("storage/userfiles/pg/{$form->pg_upload}"); 
        $usersphd = public_path("storage/userfiles/phd/{$form->phd_upload}"); 

		$form->destroy($id);		
		
		if (is_file($usersphoto)) { 
			unlink($usersphoto);		
		}
		if (is_file($userssign)) { 
			unlink($userssign);		
		}
		if (is_file($usersageproof)) { 
			unlink($usersageproof);		
		}
		if (is_file($usersthumb)) { 
			unlink($usersthumb);		
		}
		if (is_file($userscaste)) { 
			unlink($userscaste);		
		}
		if (is_file($userscreamy)) { 
			unlink($userscreamy);	
		}
		
		if (is_file($usersx)) { 		
			unlink($usersx);
		}
		if (is_file($usersxii)) { 		
			unlink($usersxii);		
		}
		if (is_file($usersdip)) { 		
			unlink($usersdip);		
		}
		if (is_file($usersug)) { 		
			unlink($usersug);		
		}
		if (is_file($userspg)) { 		
			unlink($userspg);		
		}
		if (is_file($usersphd)) { 		
			unlink($usersphd);		
		}

    }	
	
	public function formedit(Request $request)	
	{
		$formid = $request->formid;
		
		$form = DB::table('userforms')
				->where('userforms.id','=', $formid)
				->get();

		response()->json($form);
		return view('userform.edit', compact('form'));			
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
