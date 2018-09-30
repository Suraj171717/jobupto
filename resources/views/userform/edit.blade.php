

	<?php if ($form->isNotEmpty()) { ?>

    <div class="panel-heading"><strong style="color:red;">STUDENT</strong> Details Form <p style="float:right;"><strong style="color:red;">*</strong> Mandatory Fields</p></div>
	

	<div class="panel-body">
	
		@foreach($form as $forms)
		<form action='' id='newuserform' enctype="multipart/form-data" method="post">
		
            <input type="hidden" name="id" value="{{ $forms->id }}" />
            <input type="hidden" name="user_id" value="{{ $forms->user_id }}" />
            <input type="hidden" name="email" value="{{ $forms->email }}" />

			
			<div class="div1">
			
				<div class="form-group csspwd" >
					<label style="font-weight: normal;">Person With Disability:<strong style="color:red;">*</strong></label>
					<select class="form-control cssselectpwd" id="pwd_alerted" name="pwd" required >
						<option value="No">No</option>
						<option value="Yes">Yes</option>
					</select>
					<span class="red" style="color:red; position: absolute;" id="pwd_alert"></span>
				</div>
				
				<div class="form-group cssemail"  >
					<label style="font-weight: normal;">Email:</label>
					<input type="text" class="form-control cssinpemail" placeholder="{{ $forms->email }}" disabled />
				</div>				
				
				<div class="form-group cssmob" >
					<label style="font-weight: normal;">Mobile No.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpmob" id="mob_alerted" value="{{ $forms->mob_1 }}" name="mob_1" required />
					<span class="red" style="color:red; position: absolute;" id="mob_alert"></span>
				</div>

				<div class="form-group cssaltmob" >
					<label style="font-weight: normal;">Alternate Mobile No.:</label>
					<input type="text" class="form-control cssinpaltmob" id="mob_2dalerted" value="{{ $forms->mob_2 }}" name="mob_2"  />
					<span class="red" style="color:red; position: absolute;" id="mob_2dalert"></span>  
				</div>
				
			</div>

		
			<div class="div2">
			
				<div class="form-group cssfirstname" >
					<label style="font-weight: normal;">First Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpfirstname" value="{{ $forms->first_name }}" name="first_name" required />
				</div>

				<div class="form-group cssmidname" >
					<label style="font-weight: normal;">Middle Name:</label>
					<input type="text" class="form-control cssinpmidname" value="{{ $forms->middle_name }}" name="middle_name"  />
				</div>	
				
				<div class="form-group csslastname" >
					<label style="font-weight: normal;">Last Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinplastname" value="{{ $forms->last_name }}" name="last_name" required />
				</div>	

				
				<div class="form-group csssscname" >
					<label style="font-weight: normal;">Full Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpsscname" value="{{ $forms->name_ssc }}" name="name_ssc" placeholder = 'Name as on SSC Marksheet' required />
				</div>	

				<div class="form-group cssfathername" >
					<label style="font-weight: normal;">Father's Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpfathername" value="{{ $forms->father_name }}" name="father_name" placeholder = 'Same as on SSC Marksheet' required />
				</div>

				<div class="form-group cssmothername" >
					<label style="font-weight: normal;">Mother's Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpmothername" value="{{ $forms->mother_name }}" name="mother_name" placeholder = 'Same as on SSC Marksheet' required />
				</div>	


				<div class="form-group cssgender" >
					<label style="font-weight: normal;">Gender:<strong style="color:red;">*</strong></label>
					<select class="form-control cssselectgender" name="gender" required >
						<option value="{{ $forms->gender }}" >{{ $forms->gender }}</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				
				<div class="form-group cssmarital"  >
					<label style="font-weight: normal;">Marital Status:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpmarital"  id="marital_status_id" name = "marital_status" required >
						<option value="{{ $forms->marital_status }}" >{{ $forms->marital_status }}</option>
						<option value="Unmarried">Unmarried</option>
						<option value="Married">Married</option>
						<option value="Widow">Widow</option>
						<option value="Widower">Widower</option>
						<option value="Divorced">Divorced</option>
						<option value="Judicially_Separated">Judicially Separated</option>
					</select>
				</div>

				<div class="form-group cssspouse" id="marital_status_hide" >
					<label style="font-weight: normal;">Spouse's Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control spouse_name cssinpspouse" value="{{ $forms->spouse_name }}" name = "spouse_name" placeholder= "Husband/wife's Name"  />
				</div>				

			</div>

		
			<div class="div1">					
				<div class="form-group cssheight" >
					<label style="font-weight: normal;">Height in Cms:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpheight" value="{{ $forms->height }}" id="heightdalerted" name = "height" required />
					<span class="red" style="color:red; position: absolute;" id="heightdalert"></span>  
				</div>

				<div class="form-group cssweight" >
					<label style="font-weight: normal;">Weight in Kgs:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpweight" value="{{ $forms->weight }}" id="weightdalerted" name = "weight" required />
					<span class="red" style="color:red; position: absolute;" id="weightdalert"></span>  
				</div>	
				
				<div class="form-group cssvisibility" >
					<label style="font-weight: normal;">Identification Mark:</label>
					<input type="text" class="form-control cssinpvisibility" value="{{ $forms->visibility_mark }}" name="visibility_mark" placeholder = 'Mole/Scar on visible body' />
				</div>	
				
				<div class="form-group cssadhaar" >
					<label style="font-weight: normal;">Aadhar Card No.:</label>
					<input type="text" class="form-control cssinpadhaar" value="{{ $forms->aadhar_no }}" name="aadhar_no" placeholder = 'If you Hold Adhaar Card (Enter 12 digit No)'  />
				</div>
			</div>


			<div class="div2">
				<div class="form-group cssdob" >
					<label style="font-weight: normal;">Date of Birth:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpdob" value="{{ $forms->user_dob }}" id="user_dobalerted" name = "user_dob" placeholder= 'DD/MM/YYYY' required />
					<span class="red" style="color:red; position: absolute;" id="user_dobalert"></span>
				</div>

				<div class="form-group cssrelegion" >
					<label style="font-weight: normal;">Religion:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinprelegion" value="{{ $forms->religion }}" name="religion" placeholder = 'e.g Buddhist/Jain/sikh...' required />
				</div>
				
				<div class="form-group cssrelminor" >
					<label style="font-weight: normal;">Religious Minority:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinprelminor"  name="religion_minority" required >
						<option value="{{ $forms->religion_minority }}">{{ $forms->religion_minority }}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>		

				<div class="form-group cssearth" >
					<label style="font-weight: normal;">Earthquake Affected:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpearth" name="earthquake_affected" required >
						<option value="{{ $forms->earthquake_affected }}">{{ $forms->earthquake_affected }}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>				

				<div class="form-group cssnationality" >
					<label style="font-weight: normal;">Nationality:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpnationality" id="nationality_id" name="nationality" required >
						<option value="{{ $forms->nationality }}">{{ $forms->nationality }}</option>
						<option value="INDIAN">INDIAN</option>
						<option value="Other">Other</option>
					</select>
				</div>	

				<div class="form-group cssnatoth"  id="nationality_hide" >
					<label style="font-weight: normal;">Other:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control nationality_other cssinpnatoth" value="{{ $forms->nationality_other }}" name = "nationality_other" />
				</div>
				
			</div>

		
			<div class="div1">	
			
				<div class="form-group cssexmsvm" >
					<label style="font-weight: normal;">Ex-Servicemen:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpexmsvm" id="ex_servicemen_id" name = "ex_servicemen" required >
						<option value="{{ $forms->ex_servicemen }}">{{ $forms->ex_servicemen }}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>

				<div class="form-group ex_servicemen_hide cssexmsvmdoj" >
					<label style="font-weight: normal;">Date of Joining:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control ex_servicemen cssinpexmsvmdoj"  id="exsm_dojalerted" value="{{ $forms->exsm_doj }}" name="exsm_doj" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="exsm_dojalert"></span>
				</div>
				
				<div class="form-group ex_servicemen_hide cssexmsvmdod" >
					<label style="font-weight: normal;">Date of Discharge:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control ex_servicemen cssinpexmsvmdod" id="exsm_dodalerted" value="{{ $forms->exsm_dod }}" name="exsm_dod" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="exsm_dodalert"></span>
				</div>
				
				<div class="form-group ex_servicemen_hide cssexmsvmnomont" >
					<label style="font-weight: normal;">No.of Month Served:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control ex_servicemen cssinpexmsvmnomont" id="exsm_month_servedalerted" value="{{ $forms->exsm_month_served }}"  name="exsm_month_served"  />
					<span class="red" style="color:red; position: absolute;" id="exsm_month_servedalert"></span>  
				</div>				
				
			</div>

		
			<div class="div2">	
			
				<div class="form-group cssgs" >
					<label style="font-weight: normal;">Govt. Servant:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpgs" id="govt_servant_id" name="govt_servant" required >
						<option value="{{ $forms->govt_servant }}">{{ $forms->govt_servant }}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
			
				<div class="form-group govt_servant_hide cssgstyp" >
					<label style="font-weight: normal;">GS-Type:<strong style="color:red;">*</strong></label>
					<select class="form-control govt_servant_val cssinpgstyp" id="gs_type_id" name="gs_type"  >
						<option value="{{ $forms->gs_type }}">{{ $forms->gs_type }}</option>
						<option value="Central">Central</option>
						<option value="State">State</option>
						<option value="PSU">PSU</option>
						<option value="Union Territory">Union Territory</option>
						<option value="Autonomous">Autonomous</option>
						<option value="Other">Other</option>						
					</select>
				</div>	
				
				<div class="form-group gs_type_hide cssgstypoth" >
					<label style="font-weight: normal;">Other:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control gs_type_val cssinpgstypoth" value="{{ $forms->gs_type_other }}" name="gs_type_other"  />
				</div>

				<div class="form-group govt_servant_hide cssgstypdoj" >
					<label style="font-weight: normal;">Date of Joining:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control govt_servant_val cssinpgstypdoj" id="gs_dojalerted" value="{{ $forms->gs_doj }}" name="gs_doj" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="gs_dojalert"></span>
				</div>	
				
				<div class="form-group govt_servant_hide cssgstypdep"  style=" width: 20%; display:none; ">
					<label style="font-weight: normal;">Department:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control govt_servant_val cssinpgstypdep" value="{{ $forms->gs_dptmnt }}" name="gs_dptmnt" placeholder= 'e.g road ministry..'  />
				</div>				
			</div>

		
			<div class="div1">		

				<div class="form-group csscivil" >
					<label style="font-weight: normal;">Have you joined Govt. Job on civil side after availing of benefits given as an ex-serviceman?:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpcivil" name="govt_civil_side" required >
						<option  value="{{ $forms->govt_civil_side }}">{{ $forms->govt_civil_side }}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>

			</div>

			
			<div class="div2">	

				<div class="form-group cssroit" >
					<label style="font-weight: normal;">Are you a child/family member of those who died in 1984 riots?:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinproit" name="riots" required >
						<option  value="{{ $forms->riots }}">{{ $forms->riots }}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>	
				
			</div>

			
			<div class="div1">		

				<div class="form-group cssjk" >
					<label style="font-weight: normal;">J&K Domiciled during 1-1-1980 to 31-12-1989?:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpjk" name="jk_domicile_range" required >
						<option value="{{ $forms->jk_domicile_range }}">{{ $forms->jk_domicile_range }}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>		

				<div class="form-group jkcurrent" >
					<label style="font-weight: normal;">J&K Domiciled Current/Past:<strong style="color:red;">*</strong></label>
					<select class="form-control jkinpcurrent" id="jk_domicile_id" name="jk_domicile" required >
						<option value="{{ $forms->jk_domicile }}">{{ $forms->jk_domicile }}</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>	

				<div class="form-group jk_domicile_hide cssjkfrm"  >
					<label style="font-weight: normal;">Form:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control jk_domicile_val cssinpjkfrm" id="jk_fromalerted" value="{{ $forms->jk_from }}" name="jk_from" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="jk_fromalert"></span>
				</div>

				<div class="form-group jk_domicile_hide cssjkto" >
					<label style="font-weight: normal;">To:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control jk_domicile_val cssinpjkto"  id="jk_toalerted" value="{{ $forms->jk_to }}" name="jk_to" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="jk_toalert"></span>
				</div>				
			</div>

			
			<div class="div2">	

				<div class="form-group csscaste" >
					<label style="font-weight: normal;">Caste:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpcaste" id="caste_id" name="caste" required >
						<option value="{{ $forms->caste }}">{{ $forms->caste }}</option>
						<option value="UR">UR</option>
						<option value="SC">SC</option>
						<option value="ST">ST</option>
						<option value="NT">NT</option>
						<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option value="OBC(Non-Creamy layer)">OBC(Non-Creamy layer)</option>
						<option value="Other">Other</option>						
					</select>
				</div>	
				
				<div class="form-group caste_other_hide csscasteoth" >
					<label style="font-weight: normal;">Other:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control caste_other_val cssinpcasteoth" value="{{ $forms->caste_other }}" name="caste_other"  />
				</div>
				
				<div class="form-group caste_hide csscastno" >
					<label style="font-weight: normal;">Caste Certificate No.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control caste_val cssinpcastno" value="{{ $forms->caste_certificate_no }}" name="caste_certificate_no"  />
				</div>
				
				<div class="form-group caste_hide csscastedoi" >
					<label style="font-weight: normal;">Date of Issue:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control caste_val cssinpcastedoi"  id="caste_doialerted" value="{{ $forms->caste_doi }}" name="caste_doi" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="caste_doialert"></span>
				</div>
				
			</div>

		
			<div class="div1">	
			
				<div class="form-group cssupphoto" >
					<label style="font-weight: normal;">Upload Photo:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control cssinpupphoto"  id="upload_photoalerted" style="display: inline;" name="upload_photo" />
					<span class="red" style="color:red; position: absolute;" id="upload_photoalert"></span>
				</div>	

				<div class="form-group cssupsign" >
					<label style="font-weight: normal;">Upload Sign:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control cssinpupsign"  id="upload_signalerted" style="display: inline;" name="upload_sign" />
					<span class="red" style="color:red; position: absolute;" id="upload_signalert"></span>
				</div>	

				<div class="form-group cssupageproof" >
					<label style="font-weight: normal;">Age Proof:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control cssinpupageproof"  id="upload_age_proofalerted" style="display: inline;" name="upload_age_proof" placeholder= 'birth / SSC Diploma Certificate' />
					<span class="red" style="color:red; position: absolute;" id="upload_age_proofalert"></span>
				</div>

				<div class="form-group cssupthumb" >
					<label style="font-weight: normal;">Left Hand Thumb Impression:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control cssinpupthumb"  id="upload_thumbalerted" style="display: inline;" name="upload_thumb" />
					<span class="red" style="color:red; position: absolute;" id="upload_thumbalert"></span>
				</div>

				<div class="form-group upload_caste_hide cssupuploadcaste" >
					<label style="font-weight: normal;">Upload Caste:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control upload_caste_val cssinpupuploadcaste"  id="upload_castealerted" style="display: inline;" name="upload_caste"  />
					<span class="red" style="color:red; position: absolute;" id="upload_castealert"></span>
				</div>	

				<div class="form-group upload_noncreamy_layer_hide cssuploadcreamy"  style=" width: 48%; display:none; ">
					<label style="font-weight: normal;">Upload Non-creamy layer:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control upload_noncreamy_layer_val cssinpuploadcreamy"  id="upload_noncreamy_layeralerted"  style="display: inline;" name="upload_noncreamy_layer" placeholder= 'For OBC candidates'  />
					<span class="red" style="color:red; position: absolute;" id="upload_noncreamy_layeralert"></span>
				</div>					
				
			</div>		

			
			
			
			
			
			
			
			
			
			
			
			


			<div class="div2">	
				<div class="edu_heading"><strong style="color:red;">SSC</strong></div>
				<div class="form-group cssed1" >
				<label style="font-weight: normal;">Status:</label>
					<select class="form-control" style="display: inline;" name="x_status" required >
						<option value="{{ $forms->x_status }}" >{{ $forms->x_status }}</option>
						<option value="Qualified">Qualified</option>
					</select>				
				</div>
				
				<div class="form-group cssed2" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control" style="display: inline;" name="x_rd" required >
						<option value="{{ $forms->x_rd }}" >{{ $forms->x_rd }} </option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>				
				</div>
				
				<div class="form-group cssed3" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control" value="{{ $forms->x_subject }}" style="display: inline;" name="x_subject" placeholder= 'e.g General/..' required />
				</div>
				
				<div class="form-group cssed4" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control" value="{{ $forms->x_board }}" style="display: inline;" name="x_board" required />
				</div>
				
				<div class="form-group cssed5" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control" value="{{ $forms->x_yop }}" style="display: inline;" name="x_yop" placeholder= 'e.g Jan-06' required />
				</div>
				
				<div class="form-group cssed6" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control" value="{{ $forms->x_marks_obtain }}" id="x_marks_obtainalerted" style="display: inline;" name="x_marks_obtain" required />
					<span class="red" style="color:red; position: absolute;" id="x_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control" value="{{ $forms->x_max_marks }}"  id="x_max_marksalerted" style="display: inline;" name="x_max_marks" required />
					<span class="red" style="color:red; position: absolute;" id="x_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control" value="{{ $forms->x_pecentage }}" id="x_pecentagealerted" style="display: inline;" name="x_pecentage" required />
					<span class="red" style="color:red; position: absolute;" id="x_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control" value="{{ $forms->x_grade }}" style="display: inline;" name="x_grade" required />
				</div>
				
				<div class="form-group cssed10" >
				<label style="font-weight: normal;">Upload Marksheet/Degree:</label>
					<input type="file" class="form-control"  id="x_uploadalerted" style="display: inline;" name="x_upload"  />
					<span class="red" style="color:red; position: absolute;" id="x_uploadalert"></span>
				</div>
			</div>
			
			<div class="div1 ">
				<div class="edu_heading"><strong style="color:red;">HSC</strong></div>
				<div class="form-group cssed1" >
				<label style="font-weight: normal;">Status:</label>
					<select class="form-control  xii_status_class" id="xii_status_id" style="display: inline;" name="xii_status" required >
						<option value="{{ $forms->xii_status }}" >{{ $forms->xii_status }}" </option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>				
				</div>
				
				<div class="form-group cssed2 xii_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control xii_status_hide " style="display: inline;" name="xii_rd"  >
						<option value="{{ $forms->xii_rd }}" >{{ $forms->xii_rd }}</option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 xii_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control xii_status_hide " value="{{ $forms->xii_subject }}"  style="display: inline;" name="xii_subject" placeholder= 'e.g Science/arts..'  />
				</div>
				
				<div class="form-group cssed4 xii_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control xii_status_hide " value="{{ $forms->xii_board }}" style="display: inline;" name="xii_board"  />
				</div>
				
				<div class="form-group cssed5 xii_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control xii_status_hide " value="{{ $forms->xii_yop }}" style="display: inline;" name="xii_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 xii_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control xii_status_hidep" value="{{ $forms->xii_marks_obtain }}" id="xii_marks_obtainalerted" style="display: inline;" name="xii_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="xii_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 xii_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control xii_status_hidep"  value="{{ $forms->xii_max_marks }}"  id="xii_max_marksalerted" style="display: inline;" name="xii_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="xii_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 xii_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control xii_status_hidep " value="{{ $forms->xii_pecentage }}"  id="xii_pecentagealerted" style="display: inline;" name="xii_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="xii_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 xii_status_hidep">
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control xii_status_hidep"  value="{{ $forms->xii_grade }}" style="display: inline;" name="xii_grade"  />
				</div>
				
				<div class="form-group cssed10 xii_status_hidep" >
				<label style="font-weight: normal;">Upload Marksheet/Degree:</label>
					<input type="file" class="form-control xii_status_hidep " id="xii_uploadalerted" style="display: inline;" name="xii_upload"  />
					<span class="red" style="color:red; position: absolute;" id="xii_uploadalert"></span> 
				</div>			
			</div>

			<div class="div2 ">	
				<div class="edu_heading"><strong style="color:red;">DIPLOMA</strong></div>
				<div class="form-group cssed1" >
				<label style="font-weight: normal;">Status:</label>
					<select class="form-control  diploma_status_class" id="diploma_status_id" style="display: inline;" name="diploma_status" required >
						<option value="{{ $forms->diploma_status }}">{{ $forms->diploma_status }} </option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>
				</div>
				
				<div class="form-group cssed2 diploma_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control diploma_status_hide " style="display: inline;" name="diploma_rd"  >
						<option value="{{ $forms->diploma_rd }}" >{{ $forms->diploma_rd }} </option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 diploma_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control diploma_status_hide" value="{{ $forms->diploma_subject }}"  style="display: inline;" name="diploma_subject" placeholder= 'e.g Poly(Mechanical)..'  />
				</div>
				
				<div class="form-group cssed4 diploma_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control diploma_status_hide"  value="{{ $forms->diploma_board }}" style="display: inline;" name="diploma_board"  />
				</div>
				
				<div class="form-group cssed5 diploma_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control diploma_status_hide" value="{{ $forms->diploma_yop }}"  style="display: inline;" name="diploma_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 diploma_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control diploma_status_hidep" value="{{ $forms->diploma_marks_obtain }}"  id="diploma_marks_obtainalerted" style="display: inline;" name="diploma_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="diploma_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 diploma_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control diploma_status_hidep" value="{{ $forms->diploma_max_marks }}"  id="diploma_max_marksalerted" style="display: inline;" name="diploma_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="diploma_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 diploma_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control diploma_status_hidep" value="{{ $forms->diploma_pecentage }}"  id="diploma_pecentagealerted" style="display: inline;" name="diploma_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="diploma_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 diploma_status_hidep" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control diploma_status_hidep" value="{{ $forms->diploma_grade }}" style="display: inline;" name="diploma_grade"  />
				</div>
				
				<div class="form-group cssed10 diploma_status_hidep" >
				<label style="font-weight: normal;">Upload Marksheet/Degree:</label>
					<input type="file" class="form-control diploma_status_hidep " id="diploma_uploadalerted" style="display: inline;" name="diploma_upload"  />
					<span class="red" style="color:red; position: absolute;" id="diploma_uploadalert"></span> 
				</div>	
			</div>

			<div class="div1 ">	
				<div class="edu_heading"><strong style="color:red;">UG</strong></div>
				<div class="form-group cssed1" >
				<label style="font-weight: normal;">Status:</label>
					<select class="form-control  ug_status_class" id="ug_status_id" style="display: inline;" name="ug_status" required >
						<option value="{{ $forms->ug_status }}" >{{ $forms->ug_status }} </option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>
				</div>
				
				<div class="form-group cssed2 ug_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control ug_status_hide " style="display: inline;" name="ug_rd"  >
						<option value="{{ $forms->ug_rd }}" >{{ $forms->ug_rd }} </option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 ug_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control ug_status_hide" value="{{ $forms->ug_subject }}"  style="display: inline;" name="ug_subject" placeholder= 'e.g B.Sc(Physics)..'  />
				</div>
				
				<div class="form-group cssed4 ug_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control ug_status_hide " value="{{ $forms->ug_board }}"  style="display: inline;" name="ug_board"  />
				</div>
				
				<div class="form-group cssed5 ug_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control ug_status_hide " value="{{ $forms->ug_yop }}"  style="display: inline;" name="ug_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 ug_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control ug_status_hidep " value="{{ $forms->ug_marks_obtain }}"   id="ug_marks_obtainalerted" style="display: inline;" name="ug_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="ug_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 ug_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control ug_status_hidep" value="{{ $forms->ug_max_marks }}"  id="ug_max_marksalerted" style="display: inline;" name="ug_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="ug_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 ug_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control ug_status_hidep" value="{{ $forms->ug_pecentage }}"  id="ug_pecentagealerted" style="display: inline;" name="ug_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="ug_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 ug_status_hidep" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control ug_status_hidep" value="{{ $forms->ug_grade }}"  style="display: inline;" name="ug_grade"  />
				</div>
				
				<div class="form-group cssed10 ug_status_hidep">
				<label style="font-weight: normal;">Upload Marksheet/Degree:</label>
					<input type="file" class="form-control ug_status_hidep "  id="ug_uploadalerted" style="display: inline;" name="ug_upload"  />
					<span class="red" style="color:red; position: absolute;" id="ug_uploadalert"></span> 
				</div>	
			</div>

			<div class="div2 ">	
				<div class="edu_heading"><strong style="color:red;">PG</strong></div>
				<div class="form-group cssed1" >
				<label style="font-weight: normal;">Status:</label>
					<select class="form-control  pg_status_class" id="pg_status_id" style="display: inline;" name="pg_status" required >
						<option value="{{ $forms->pg_status }}" >{{ $forms->pg_status }} </option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>
				</div>
				
				<div class="form-group cssed2 pg_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control pg_status_hide" style="display: inline;" name="pg_rd"  >
						<option value="{{ $forms->pg_rd }}" >{{ $forms->pg_rd }}</option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 pg_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control pg_status_hide"  value="{{ $forms->pg_subject }}" style="display: inline;" name="pg_subject" placeholder= 'e.g M.Tech(Electronics).'  />
				</div>
				
				<div class="form-group cssed4 pg_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control pg_status_hide" value="{{ $forms->pg_board }}"  style="display: inline;" name="pg_board"  />
				</div>
				
				<div class="form-group cssed5 pg_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control pg_status_hide" value="{{ $forms->pg_yop }}"  style="display: inline;" name="pg_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 pg_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control pg_status_hidep" value="{{ $forms->pg_marks_obtain }}"  id="pg_marks_obtainalerted" style="display: inline;" name="pg_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="pg_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 pg_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control pg_status_hidep" value="{{ $forms->pg_max_marks }}"   id="pg_max_marksalerted" style="display: inline;" name="pg_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="pg_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 pg_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control pg_status_hidep" value="{{ $forms->pg_pecentage }}"  id="pg_pecentagealerted" style="display: inline;" name="pg_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="pg_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 pg_status_hidep" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control pg_status_hidep" value="{{ $forms->pg_grade }}"   style="display: inline;" name="pg_grade"  />
				</div>
				
				<div class="form-group cssed10 pg_status_hidep" >
				<label style="font-weight: normal;">Upload Marksheet/Degree:</label>
					<input type="file" class="form-control pg_status_hidep " id="pg_uploadalerted" style="display: inline;" name="pg_upload"  />
					<span class="red" style="color:red; position: absolute;" id="pg_uploadalert"></span>  
				</div>	
			</div>

			<div class="div1 ">	
				<div class="edu_heading"><strong style="color:red;">Phd</strong></div>
				<div class="form-group cssed1" >
				<label style="font-weight: normal;">Status:</label>
					<select class="form-control  phd_status_class" id="phd_status_id" style="display: inline;" name="phd_status" required >
						<option value="{{ $forms->phd_status }}" >{{ $forms->phd_status }}</option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>
				</div>
				
				<div class="form-group cssed2 phd_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control phd_status_hide " style="display: inline;" name="phd_rd"  >
						<option value="{{ $forms->phd_rd }}" >{{ $forms->phd_rd }} </option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 phd_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control phd_status_hide " value="{{ $forms->phd_subject }}"  style="display: inline;" name="phd_subject"  />
				</div>
				
				<div class="form-group cssed4 phd_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control phd_status_hide " value="{{ $forms->phd_board }}"  style="display: inline;" name="phd_board"  />
				</div>
				
				<div class="form-group cssed5 phd_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control phd_status_hide "  value="{{ $forms->phd_yop }}" style="display: inline;" name="phd_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 phd_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control phd_status_hidep " value="{{ $forms->phd_marks_obtain }}"  id="phd_marks_obtainalerted" style="display: inline;" name="phd_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="phd_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 phd_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control phd_status_hidep " value="{{ $forms->phd_max_marks }}"  id="phd_max_marksalerted" style="display: inline;" name="phd_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="phd_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 phd_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control phd_status_hidep " value="{{ $forms->phd_pecentage }}" id="phd_pecentagealerted" style="display: inline;" name="phd_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="phd_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 phd_status_hidep" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control phd_status_hidep " value="{{ $forms->phd_grade }}"  style="display: inline;" name="phd_grade"  />
				</div>
				
				<div class="form-group cssed10 phd_status_hidep" >
				<label style="font-weight: normal;">Upload Marksheet/Degree:</label>
					<input type="file" class="form-control phd_status_hidep " id="phd_uploadalerted" style="display: inline;" name="phd_upload"  />
					<span class="red" style="color:red; position: absolute;" id="phd_uploadalert"></span>  
				</div>	
			</div>


			
			<div class="div2 ">
				<div class="edu_heading"><strong style="color:red;">Correspondence Address</strong></div>
				
				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line1:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add1 cssc1 " value="{{ $forms->c_add1 }}"  name="c_add1" placeholder= 'Flat No./House No. & Area' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line2:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add2 cssc2 " value="{{ $forms->c_add2 }}"  name="c_add2" placeholder= 'Village/Town' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line3:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add3 cssc3 " value="{{ $forms->c_add3 }}"  name="c_add3" placeholder= 'City' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line4:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add4 cssc4 "  value="{{ $forms->c_add4 }}" name="c_add4" placeholder= 'District' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line5:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add5 cssc5 " value="{{ $forms->c_add5 }}"  name="c_add5" placeholder= 'State' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Pin Code:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_pin csscp " value="{{ $forms->c_pin }}"  name="c_pin" placeholder= 'Pin Code' required />
				</div>
			</div>

			<div class="div1 ">
				<div class="edu_heading"><strong style="color:red;"><input type="checkbox" style="margin: 0px 10px;" id="ADD_checkbox" />Permanent Address</strong></div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line1:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add1 cssp1 " value="{{ $forms->p_add1 }}"  name="p_add1" placeholder= 'Flat No./House No. & Area' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line2:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add2 cssp2 " value="{{ $forms->p_add2 }}"  name="p_add2" placeholder= 'Village/Town' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line3:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add3 cssp3 " value="{{ $forms->p_add3 }}"  name="p_add3" placeholder= 'City' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line4:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add4 cssp4 " value="{{ $forms->p_add4 }}"  name="p_add4" placeholder= 'District' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line5:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add5 cssp5 " value="{{ $forms->p_add5 }}"  name="p_add5" placeholder= 'State' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Pin Code:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_pin csspp "  value="{{ $forms->p_pin }}" name="p_pin" placeholder= 'Pin Code' required />
				</div>			
			</div>			
					
	





			<div class="div2">	
				<div class="form-group cssinv" >
					<label style="font-weight: normal;">Address for GST Invoicing:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpinv" name="add_invoice" required >
						<option value="{{ $forms->add_invoice }}" >{{ $forms->add_invoice }} </option>
						<option value="Correspondence Address">Correspondence Address</option>
						<option value="Permanent Address">Permanent Address</option>
					</select>
				</div>			
			</div>

			
			<div class="div1">

				<label style="font-weight: normal;"><strong style="color:red;">Please Fill the Exam Center City Preferences Carefully. In case Your Preferred City is not Present on the list of any Exam Form, then we pick the Closest Given City to your Preferences/Choice OR call you Regarding.</strong></label>
			
				<div class="form-group cssec1" >
					<label style="font-weight: normal;">Exam Center City Preference 1.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpec1" value="{{ $forms->cent1 }}" name="cent1" placeholder= 'Enter city & State [ e.g Surat (Gujarat) ] ' required />
				</div>

				<div class="form-group cssec2" >
					<label style="font-weight: normal;">Exam Center City Preference 2.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpec2" value="{{ $forms->cent2 }}" name="cent2" placeholder= 'e.g  Ahmedabad (Gujarat)' required />
				</div>

				<div class="form-group cssec3" >
					<label style="font-weight: normal;">Exam Center City Preference 3.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpec3" value="{{ $forms->cent3 }}" name="cent3" placeholder= 'e.g  Nashik (Maharashtra)' required />
				</div>

				<div class="form-group cssec4" >
					<label style="font-weight: normal;">Exam Center City Preference 4.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpec4" value="{{ $forms->cent4 }}" name="cent4" placeholder= 'e.g  Indore (Madhya Pradesh)' required />
				</div>
				
			</div>	


			<div class="div2">

				<div class="progress" style="display:none;">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div id="targetLayer"></div>				
			
				<div class="form-group csssubmit" >
					<input class='btn btna' type="submit" value="Submit" />
				</div>			
			
			</div>

		</form>
	</div>
				
	@endforeach	
	
	<?php } else { ?>
			

        <div class="panel-heading subbmited_heading">
						
			<div class="col-sm-11 center_submitted">
				<p class="alert alert-danger alert_submitted">Dear User!! There must be Some <strong>ERROR</strong>. Delete the Current Form and Re-Submit</p>
			</div>	
			
		</div>
		
	<?php } ?>