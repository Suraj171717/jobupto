<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Userform;
use App\User;
use App\Myjob;

class Userform extends Model
{
       protected $fillable=[

       'user_id','name_title', 'first_name','middle_name', 'last_name','father_name','mother_name','name_ssc','gender','marital_status', 'spouse_name',
	  
       'height', 'weight','visibility_mark','email','mob_1','mob_2','aadhar_no',
	   
	   'user_dob','nationality', 'nationality_other','religion','religion_minority','earthquake_affected','pwd',

       'ex_servicemen', 'exsm_doj','exsm_dod', 'exsm_month_served',
	   
	   'govt_servant','gs_type','gs_type_other','gs_doj','gs_dptmnt', 
	   
	   'govt_civil_side','riots', 'jk_domicile','jk_from','jk_to','jk_domicile_range',
	   
	   'caste','caste_other', 'caste_certificate_no','caste_doi',

	   'upload_caste','upload_noncreamy_layer','upload_photo','upload_sign','upload_thumb','upload_age_proof',

	   'add_invoice','c_add1', 'c_add2','c_add3','c_add4','c_add5','c_pin',

       'p_add1', 'p_add2','p_add3', 'p_add4','p_add5','p_pin',
	   
	   'extra_1','extra_2',
	   
       'x_status', 'x_rd','x_subject', 'x_board','x_yop','x_marks_obtain','x_max_marks','x_pecentage','x_grade','x_upload',	 
	   
       'xii_status', 'xii_rd','xii_subject', 'xii_board','xii_yop','xii_marks_obtain','xii_max_marks','xii_pecentage','xii_grade','xii_upload',	   

       'diploma_status', 'diploma_rd','diploma_subject', 'diploma_board','diploma_yop','diploma_marks_obtain','diploma_max_marks','diploma_pecentage','diploma_grade','diploma_upload',	   

       'ug_status', 'ug_rd','ug_subject', 'ug_board','ug_yop','ug_marks_obtain','ug_max_marks','ug_pecentage','ug_grade','ug_upload',	   

       'pg_status', 'pg_rd','pg_subject', 'pg_board','pg_yop','pg_marks_obtain','pg_max_marks','pg_pecentage','pg_grade','pg_upload',	   

       'phd_status', 'phd_rd','phd_subject', 'phd_board','phd_yop','phd_marks_obtain','phd_max_marks','phd_pecentage','phd_grade','phd_upload',
	   
	   'cent1','cent2','cent3','cent4','created_at','updated_at'

    ];
	
	
	}
