

	<?php if ($form->isEmpty()) { ?>

    <div class="panel-heading"><strong style="color:red;">STUDENT</strong> Details Form <p style="float:right;"><strong style="color:red;">*</strong> Mandatory Fields</p></div>
	

	<div class="panel-body">
	
		<form action='' id='newuserform' enctype="multipart/form-data" method="post">
		
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
            <input type="hidden" name="email" value="{{ Auth::user()->email }}" />



			<div class="div1">
			
				<div class="form-group csspwd" >
					<label style="font-weight: normal;">Person With Disability:<strong style="color:red;">*</strong></label>
					<select class="form-control cssselectpwd" id="pwd_alerted" name="pwd" required >
						<option value="No">No</option>
						<option value="Yes">Yes</option>
					</select>
					<span class="red" style="color:red; position: absolute;" id="pwd_alert"></span>
				</div>
				
				<div class="form-group cssemail" >
					<label style="font-weight: normal;">Email:</label>
					<input type="text" class="form-control cssinpemail" placeholder="{{ Auth::user()->email }}" disabled />
				</div>				
				
				<div class="form-group cssmob" >
					<label style="font-weight: normal;">Mobile No.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpmob" id="mob_alerted" name="mob_1" required />
					<span class="red" style="color:red; position: absolute;" id="mob_alert"></span>
				</div>

				<div class="form-group cssaltmob" >
					<label style="font-weight: normal;">Alternate Mobile No.:</label>
					<input type="text" class="form-control cssinpaltmob" id="mob_2dalerted" name="mob_2"  />
					<span class="red" style="color:red; position: absolute;" id="mob_2dalert"></span>  
				</div>
				
			</div>
		
			<div class="div2">
			
				<div class="form-group cssfirstname" >
					<label style="font-weight: normal;">First Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpfirstname" name="first_name" required />
				</div>

				<div class="form-group cssmidname" >
					<label style="font-weight: normal;">Middle Name:</label>
					<input type="text" class="form-control cssinpmidname" name="middle_name"  />
				</div>	
				
				<div class="form-group csslastname" >
					<label style="font-weight: normal;">Last Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinplastname" name="last_name" required />
				</div>	

				
				<div class="form-group csssscname" >
					<label style="font-weight: normal;">Full Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpsscname" name="name_ssc" placeholder = 'Name as on SSC Marksheet' required />
				</div>	

				<div class="form-group cssfathername" >
					<label style="font-weight: normal;">Father's Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpfathername" name="father_name" placeholder = 'Same as on SSC Marksheet' required />
				</div>

				<div class="form-group cssmothername" >
					<label style="font-weight: normal;">Mother's Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpmothername" name="mother_name" placeholder = 'Same as on SSC Marksheet' required />
				</div>	


				<div class="form-group cssgender" >
					<label style="font-weight: normal;">Gender:<strong style="color:red;">*</strong></label>
					<select class="form-control cssselectgender" name="gender" required >
						<option value="" hidden>select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				
				<div class="form-group cssmarital" >
					<label style="font-weight: normal;">Marital Status:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpmarital"  id="marital_status_id" name = "marital_status" required >
						<option value="" hidden>select</option>
						<option value="Unmarried">Unmarried</option>
						<option value="Married">Married</option>
						<option value="Widow">Widow</option>
						<option value="Widower">Widower</option>
						<option value="Divorced">Divorced</option>
						<option value="judicially_Separated">Judicially Separated</option>
					</select>
				</div>

				<div class="form-group cssspouse"  id="marital_status_hide" >
					<label style="font-weight: normal;">Spouse's Name:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control spouse_name cssinpspouse" name = "spouse_name" placeholder= "Husband/wife's Name"  />
				</div>				

			</div>
		
			<div class="div1">					
				<div class="form-group cssheight" >
					<label style="font-weight: normal;">Height in Cms:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpheight" id="heightdalerted" name = "height" required />
					<span class="red" style="color:red; position: absolute;" id="heightdalert"></span>  
				</div>

				<div class="form-group cssweight" >
					<label style="font-weight: normal;">Weight in Kgs:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpweight" id="weightdalerted" name = "weight" required />
					<span class="red" style="color:red; position: absolute;" id="weightdalert"></span>  
				</div>	
				
				<div class="form-group cssvisibility" >
					<label style="font-weight: normal;">Identification Mark:</label>
					<input type="text" class="form-control cssinpvisibility" name="visibility_mark" placeholder = 'Mole/Scar on visible body' />
				</div>	
				
				<div class="form-group cssadhaar" >
					<label style="font-weight: normal;">Aadhar Card No.:</label>
					<input type="text" class="form-control cssinpadhaar" name="aadhar_no" placeholder = 'If you Hold Adhaar Card (Enter 12 digit No)'  />
				</div>
			</div>

			<div class="div2">
				<div class="form-group cssdob" >
					<label style="font-weight: normal;">Date of Birth:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpdob" id="user_dobalerted" name = "user_dob" placeholder= 'DD/MM/YYYY' required />
					<span class="red" style="color:red; position: absolute;" id="user_dobalert"></span>
				</div>

				<div class="form-group cssrelegion" >
					<label style="font-weight: normal;">Religion:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinprelegion" name="religion" placeholder = 'e.g Buddhist/Jain/sikh...' required />
				</div>
				
				<div class="form-group cssrelminor" >
					<label style="font-weight: normal;">Religious Minority:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinprelminor" name="religion_minority" required >
						<option value="" hidden>select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>		

				<div class="form-group cssearth" >
					<label style="font-weight: normal;">Earthquake Affected:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpearth" name="earthquake_affected" required >
						<option value="" hidden>select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>				

				<div class="form-group cssnationality" >
					<label style="font-weight: normal;">Nationality:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpnationality" id="nationality_id" name="nationality" required >
						<option value="" hidden>select</option>
						<option value="INDIAN">INDIAN</option>
						<option value="Other">Other</option>
					</select>
				</div>	

				<div class="form-group cssnatoth"  id="nationality_hide" >
					<label style="font-weight: normal;">Other:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control nationality_other cssinpnatoth" name = "nationality_other" />
				</div>
				
			</div>

			<div class="div1">	
			
				<div class="form-group cssexmsvm">
					<label style="font-weight: normal;">Ex-Servicemen:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpexmsvm" id="ex_servicemen_id" name = "ex_servicemen" required >
						<option value="" hidden>select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>

				<div class="form-group ex_servicemen_hide cssexmsvmdoj" >
					<label style="font-weight: normal;">Date of Joining:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control ex_servicemen cssinpexmsvmdoj"  id="exsm_dojalerted" name="exsm_doj" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="exsm_dojalert"></span>
				</div>
				
				<div class="form-group ex_servicemen_hide cssexmsvmdod">
					<label style="font-weight: normal;">Date of Discharge:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control ex_servicemen cssinpexmsvmdod" id="exsm_dodalerted" name="exsm_dod" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="exsm_dodalert"></span>
				</div>
				
				<div class="form-group ex_servicemen_hide cssexmsvmnomont" >
					<label style="font-weight: normal;">No.of Month Served:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control ex_servicemen cssinpexmsvmnomont" id="exsm_month_servedalerted" name="exsm_month_served"  />
					<span class="red" style="color:red; position: absolute;" id="exsm_month_servedalert"></span>  
				</div>				
				
			</div>

			<div class="div2">	
			
				<div class="form-group cssgs" >
					<label style="font-weight: normal;">Govt. Servant:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpgs" id="govt_servant_id" name="govt_servant" required >
						<option value="" hidden>select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
			
				<div class="form-group govt_servant_hide cssgstyp" >
					<label style="font-weight: normal;">GS-Type:<strong style="color:red;">*</strong></label>
					<select class="form-control govt_servant_val cssinpgstyp" id="gs_type_id" name="gs_type"  >
						<option value="" hidden>select</option>
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
					<input type="text" class="form-control gs_type_val cssinpgstypoth" name="gs_type_other"  />
				</div>

				<div class="form-group govt_servant_hide cssgstypdoj" >
					<label style="font-weight: normal;">Date of Joining:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control govt_servant_val cssinpgstypdoj" id="gs_dojalerted" name="gs_doj" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="gs_dojalert"></span>
				</div>	
				
				<div class="form-group govt_servant_hide cssgstypdep" >
					<label style="font-weight: normal;">Department:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control govt_servant_val cssinpgstypdep" name="gs_dptmnt" placeholder= 'e.g road ministry..'  />
				</div>				
			</div>

			<div class="div1">		

				<div class="form-group csscivil" >
					<label style="font-weight: normal;">Have you joined Govt. Job on civil side after availing of benefits given as an ex-serviceman?:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpcivil" name="govt_civil_side" required >
						<option value="" hidden>select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>

			</div>

			<div class="div2">	

				<div class="form-group cssroit" >
					<label style="font-weight: normal;">Are you a child/family member of those who died in 1984 riots?:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinproit" name="riots" required >
						<option value="" hidden>select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>	
				
			</div>
			
			<div class="div1">		

				<div class="form-group cssjk" >
					<label style="font-weight: normal;">J&K Domiciled during 1-1-1980 to 31-12-1989?:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpjk" name="jk_domicile_range" required >
						<option value="" hidden>select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>		

				<div class="form-group jkcurrent" >
					<label style="font-weight: normal;">J&K Domiciled Current/Past:<strong style="color:red;">*</strong></label>
					<select class="form-control jkinpcurrent" id="jk_domicile_id" name="jk_domicile" required >
						<option value="" hidden>select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>	

				<div class="form-group jk_domicile_hide cssjkfrm" >
					<label style="font-weight: normal;">Form:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control jk_domicile_val cssinpjkfrm" id="jk_fromalerted" name="jk_from" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="jk_fromalert"></span>
				</div>

				<div class="form-group jk_domicile_hide cssjkto" >
					<label style="font-weight: normal;">To:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control jk_domicile_val cssinpjkto"  id="jk_toalerted" name="jk_to" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="jk_toalert"></span>
				</div>				
			</div>
			
			<div class="div2">	

				<div class="form-group csscaste" >
					<label style="font-weight: normal;">Caste:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpcaste" id="caste_id" name="caste" required >
						<option value="" hidden>select</option>
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
					<input type="text" class="form-control caste_other_val cssinpcasteoth" name="caste_other"  />
				</div>
				
				<div class="form-group caste_hide csscastno" >
					<label style="font-weight: normal;">Caste Certificate No.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control caste_val cssinpcastno" name="caste_certificate_no"  />
				</div>
				
				<div class="form-group caste_hide csscastedoi" >
					<label style="font-weight: normal;">Date of Issue:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control caste_val cssinpcastedoi"  id="caste_doialerted" name="caste_doi" placeholder= 'DD/MM/YYYY'  />
					<span class="red" style="color:red; position: absolute;" id="caste_doialert"></span>
				</div>
				
			</div>
		
			<div class="div1">	
			
				<div class="form-group cssupphoto" >
					<label style="font-weight: normal;">Upload Photo:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control cssinpupphoto" style=" display: inline;"  id="upload_photoalerted" name="upload_photo" required />
					<span class="red" style="color:red; position: absolute;" id="upload_photoalert"></span>
				</div>	

				<div class="form-group cssupsign" >
					<label style="font-weight: normal;">Upload Sign:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control cssinpupsign" style=" display: inline;"  id="upload_signalerted" name="upload_sign" required />
					<span class="red" style="color:red; position: absolute;" id="upload_signalert"></span>
				</div>	

				<div class="form-group cssupageproof" >
					<label style="font-weight: normal;">Age Proof:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control cssinpupageproof" style=" display: inline;"  id="upload_age_proofalerted" name="upload_age_proof" placeholder= 'birth / SSC Diploma Certificate' required />
					<span class="red" style="color:red; position: absolute;" id="upload_age_proofalert"></span>
				</div>

				<div class="form-group cssupthumb" >
					<label style="font-weight: normal;">Left Hand Thumb Impression:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control cssinpupthumb" style=" display: inline;"  id="upload_thumbalerted" name="upload_thumb" required />
					<span class="red" style="color:red; position: absolute;" id="upload_thumbalert"></span>
				</div>

				<div class="form-group upload_caste_hide cssupuploadcaste" >
					<label style="font-weight: normal;">Upload Caste:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control upload_caste_val cssinpupuploadcaste" style=" display: inline;"  id="upload_castealerted" name="upload_caste"  />
					<span class="red" style="color:red; position: absolute;" id="upload_castealert"></span>
				</div>	

				<div class="form-group upload_noncreamy_layer_hide cssuploadcreamy" >
					<label style="font-weight: normal;">Upload Non-creamy layer:<strong style="color:red;">*</strong></label>
					<input type="file" class="form-control upload_noncreamy_layer_val cssinpuploadcreamy" style=" display: inline;" id="upload_noncreamy_layeralerted" name="upload_noncreamy_layer" placeholder= 'For OBC candidates'  />
					<span class="red" style="color:red; position: absolute;" id="upload_noncreamy_layeralert"></span>
				</div>					
				
			</div>		



			<div class="div2">	
				<div class="edu_heading"><strong style="color:red;">SSC</strong></div>
				<div class="form-group cssed1" >
				<label style="font-weight: normal;">Status:</label>
					<select class="form-control" style="display: inline;" name="x_status" required >
						<option value="" hidden>select</option>
						<option value="Qualified">Qualified</option>
					</select>				
				</div>
				
				<div class="form-group cssed2" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control" style="display: inline;" name="x_rd" required >
						<option value="" hidden>select</option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>				
				</div>
				
				<div class="form-group cssed3" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control" style="display: inline;" name="x_subject" placeholder= 'e.g General/..' required />
				</div>
				
				<div class="form-group cssed4" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control" style="display: inline;" name="x_board" required />
				</div>
				
				<div class="form-group cssed5" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control" style="display: inline;" name="x_yop" placeholder= 'e.g Jan-06' required />
				</div>
				
				<div class="form-group cssed6" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control"  id="x_marks_obtainalerted" style="display: inline;" name="x_marks_obtain" required />
					<span class="red" style="color:red; position: absolute;" id="x_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control"  id="x_max_marksalerted" style="display: inline;" name="x_max_marks" required />
					<span class="red" style="color:red; position: absolute;" id="x_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control"  id="x_pecentagealerted" style="display: inline;" name="x_pecentage" required />
					<span class="red" style="color:red; position: absolute;" id="x_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control" style="display: inline;" name="x_grade" required />
				</div>
				
				<div class="form-group cssed10" >
				<label style="font-weight: normal;">Upload Marksheet/Degree:</label>
					<input type="file" class="form-control"  id="x_uploadalerted" style="display: inline;" name="x_upload" required />
					<span class="red" style="color:red; position: absolute;" id="x_uploadalert"></span>
				</div>
			</div>
			
			<div class="div1 ">
				<div class="edu_heading"><strong style="color:red;">HSC</strong></div>
				<div class="form-group cssed1" >
				<label style="font-weight: normal;">Status:</label>
					<select class="form-control  xii_status_class" id="xii_status_id" style="display: inline;" name="xii_status" required >
						<option value="" hidden>select</option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>				
				</div>
				
				<div class="form-group cssed2 xii_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control xii_status_hide " style="display: inline;" name="xii_rd"  >
						<option value="" hidden>select</option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 xii_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control xii_status_hide " style="display: inline;" name="xii_subject" placeholder= 'e.g Science/arts..'  />
				</div>
				
				<div class="form-group cssed4 xii_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control xii_status_hide " style="display: inline;" name="xii_board"  />
				</div>
				
				<div class="form-group cssed5 xii_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control xii_status_hide " style="display: inline;" name="xii_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 xii_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control xii_status_hidep " id="xii_marks_obtainalerted" style="display: inline;" name="xii_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="xii_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 xii_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control xii_status_hidep " id="xii_max_marksalerted" style="display: inline;" name="xii_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="xii_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 xii_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control xii_status_hidep "  id="xii_pecentagealerted" style="display: inline;" name="xii_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="xii_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 xii_status_hidep">
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control xii_status_hidep " style="display: inline;" name="xii_grade"  />
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
						<option value="" hidden>select</option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>
				</div>
				
				<div class="form-group cssed2 diploma_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control diploma_status_hide " style="display: inline;" name="diploma_rd"  >
						<option value="" hidden>select</option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 diploma_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control diploma_status_hide " style="display: inline;" name="diploma_subject" placeholder= 'e.g Poly(Mechanical)..'  />
				</div>
				
				<div class="form-group cssed4 diploma_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control diploma_status_hide " style="display: inline;" name="diploma_board"  />
				</div>
				
				<div class="form-group cssed5 diploma_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control diploma_status_hide " style="display: inline;" name="diploma_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 diploma_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control diploma_status_hidep " id="diploma_marks_obtainalerted" style="display: inline;" name="diploma_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="diploma_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 diploma_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control diploma_status_hidep " id="diploma_max_marksalerted" style="display: inline;" name="diploma_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="diploma_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 diploma_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control diploma_status_hidep " id="diploma_pecentagealerted" style="display: inline;" name="diploma_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="diploma_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 diploma_status_hidep" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control diploma_status_hidep " style="display: inline;" name="diploma_grade"  />
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
						<option value="" hidden>select</option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>
				</div>
				
				<div class="form-group cssed2 ug_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control ug_status_hide " style="display: inline;" name="ug_rd"  >
						<option value="" hidden>select</option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 ug_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control ug_status_hide " style="display: inline;" name="ug_subject" placeholder= 'e.g B.Sc(Physics)..'  />
				</div>
				
				<div class="form-group cssed4 ug_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control ug_status_hide " style="display: inline;" name="ug_board"  />
				</div>
				
				<div class="form-group cssed5 ug_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control ug_status_hide " style="display: inline;" name="ug_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 ug_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control ug_status_hidep "  id="ug_marks_obtainalerted" style="display: inline;" name="ug_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="ug_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 ug_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control ug_status_hidep " id="ug_max_marksalerted" style="display: inline;" name="ug_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="ug_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 ug_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control ug_status_hidep " id="ug_pecentagealerted" style="display: inline;" name="ug_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="ug_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 ug_status_hidep" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control ug_status_hidep " style="display: inline;" name="ug_grade"  />
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
						<option value="" hidden>select</option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>
				</div>
				
				<div class="form-group cssed2 pg_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control pg_status_hide " style="display: inline;" name="pg_rd"  >
						<option value="" hidden>select</option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 pg_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control pg_status_hide " style="display: inline;" name="pg_subject" placeholder= 'e.g M.Tech(Electronics).'  />
				</div>
				
				<div class="form-group cssed4 pg_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control pg_status_hide " style="display: inline;" name="pg_board"  />
				</div>
				
				<div class="form-group cssed5 pg_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control pg_status_hide " style="display: inline;" name="pg_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 pg_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control pg_status_hidep " id="pg_marks_obtainalerted" style="display: inline;" name="pg_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="pg_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 pg_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control pg_status_hidep "  id="pg_max_marksalerted" style="display: inline;" name="pg_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="pg_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 pg_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control pg_status_hidep " id="pg_pecentagealerted" style="display: inline;" name="pg_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="pg_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 pg_status_hidep" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control pg_status_hidep " style="display: inline;" name="pg_grade"  />
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
						<option value="" hidden>select</option>
						<option value="Not_Appeared">Not Appeared</option>
						<option value="Qualified">Qualified</option>
						<option value="Pursuing">Pursuing</option>
					</select>
				</div>
				
				<div class="form-group cssed2 phd_status_hide" >
				<label style="font-weight: normal;">Type:</label>
					<select class="form-control phd_status_hide " style="display: inline;" name="phd_rd"  >
						<option value="" hidden>select</option>
						<option value="Regular">Regular</option>
						<option value="Distance">Distance</option>
					</select>
				</div>
				
				<div class="form-group cssed3 phd_status_hide" >
				<label style="font-weight: normal;">Subject:</label>
					<input type="text" class="form-control phd_status_hide " style="display: inline;" name="phd_subject"  />
				</div>
				
				<div class="form-group cssed4 phd_status_hide" >
				<label style="font-weight: normal;">Board/University:</label>
					<input type="text" class="form-control phd_status_hide " style="display: inline;" name="phd_board"  />
				</div>
				
				<div class="form-group cssed5 phd_status_hide" >
				<label style="font-weight: normal;">Year of Passing:</label>
					<input type="text" class="form-control phd_status_hide " style="display: inline;" name="phd_yop" placeholder= 'e.g Jan-06'  />
				</div>
				
				<div class="form-group cssed6 phd_status_hidep" >
				<label style="font-weight: normal;">Marks Obtain:</label>
					<input type="text" class="form-control phd_status_hidep " id="phd_marks_obtainalerted" style="display: inline;" name="phd_marks_obtain"  />
					<span class="red" style="color:red; position: absolute;" id="phd_marks_obtainalert"></span> 
				</div>
				
				<div class="form-group cssed7 phd_status_hidep" >
				<label style="font-weight: normal;">Max Marks:</label>
					<input type="text" class="form-control phd_status_hidep " id="phd_max_marksalerted" style="display: inline;" name="phd_max_marks"  />
					<span class="red" style="color:red; position: absolute;" id="phd_max_marksalert"></span> 
				</div>
				
				<div class="form-group cssed8 phd_status_hidep" >
				<label style="font-weight: normal;">Percentage:</label>
					<input type="text" class="form-control phd_status_hidep " id="phd_pecentagealerted" style="display: inline;" name="phd_pecentage"  />
					<span class="red" style="color:red; position: absolute;" id="phd_pecentagealert"></span> 
				</div>
				
				<div class="form-group cssed9 phd_status_hidep" >
				<label style="font-weight: normal;">Grade/Class:</label>
					<input type="text" class="form-control phd_status_hidep " style="display: inline;" name="phd_grade"  />
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
					<input type="text" class="form-control c_add1 cssc1 " name="c_add1" placeholder= 'Flat No./House No. & Area' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line2:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add2 cssc2 " name="c_add2" placeholder= 'Village/Town' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line3:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add3 cssc3 " name="c_add3" placeholder= 'City' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line4:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add4 cssc4 " name="c_add4" placeholder= 'District' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Add. Line5:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_add5 cssc5 " name="c_add5" placeholder= 'State' required />
				</div>

				<div class="form-group addcrr" >
					<label style="font-weight: normal;">Pin Code:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control c_pin csscp " name="c_pin" placeholder= 'Pin Code' required />
				</div>
			</div>

			<div class="div1 ">
				<div class="edu_heading"><strong style="color:red;"><input type="checkbox" style="margin: 0px 10px;" id="ADD_checkbox" />Permanent Address</strong></div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line1:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add1 cssp1 " name="p_add1" placeholder= 'Flat No./House No. & Area' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line2:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add2 cssp2 " name="p_add2" placeholder= 'Village/Town' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line3:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add3 cssp3 " name="p_add3" placeholder= 'City' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line4:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add4 cssp4 " name="p_add4" placeholder= 'District' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Add. Line5:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_add5 cssp5 " name="p_add5" placeholder= 'State' required />
				</div>

				<div class="form-group addpr" >
					<label style="font-weight: normal;">Pin Code:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control p_pin csspp " name="p_pin" placeholder= 'Pin Code' required />
				</div>			
			</div>			
				

				
			<div class="div2">	
				<div class="form-group cssinv" >
					<label style="font-weight: normal;">Address for GST Invoicing:<strong style="color:red;">*</strong></label>
					<select class="form-control cssinpinv" name="add_invoice" required >
						<option value="" hidden>select</option>
						<option value="Correspondence Address">Correspondence Address</option>
						<option value="Permanent Address">Permanent Address</option>
					</select>
				</div>			
			</div>
			
			<div class="div1">

				<label style="font-weight: normal;"><strong style="color:red;">Please Fill the Exam Center City Preferences Carefully. In case Your Preferred City is not Present on the list of any Exam Form, then we pick the Closest Given City to your Preferences/Choice OR call you Regarding.</strong></label>
			
				<div class="form-group cssec1" >
					<label style="font-weight: normal;">Exam Center City Preference 1.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpec1" name="cent1" placeholder= 'Enter city & State [ e.g Surat (Gujarat) ] ' required />
				</div>

				<div class="form-group cssec2" >
					<label style="font-weight: normal;">Exam Center City Preference 2.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpec2" name="cent2" placeholder= 'e.g  Ahmedabad (Gujarat)' required />
				</div>

				<div class="form-group cssec3" >
					<label style="font-weight: normal;">Exam Center City Preference 3.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpec3" name="cent3" placeholder= 'e.g  Nashik (Maharashtra)' required />
				</div>

				<div class="form-group cssec4" >
					<label style="font-weight: normal;">Exam Center City Preference 4.:<strong style="color:red;">*</strong></label>
					<input type="text" class="form-control cssinpec4" name="cent4" placeholder= 'e.g  Indore (Madhya Pradesh)' required />
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
				
		
	<?php } else { ?>
			
			
		
	@foreach($form as $forms)
			
        <div class="panel-heading subbmited_heading">
			<div class="col-sm-11 center_submitted">
				<h5 class="alert alert-success alert_submitted">Dear User You Have Successfully Submitted <strong>Sutdent Details Form</strong> on {{ date('d-m-Y', strtotime($forms -> updated_at)) }}</h5>
			</div>	
			<input class='btn btn-danger del-btn' type="submit" value="Delete" data-id="{{ $forms->id }}" />
			<input class='btn btn-info form_edit' type="submit" value="Edit" data-id="{{ $forms->id }}" />
		</div>
		
		<div class="panel-body">
				
			<div class="div2">
				<div class="imgform"><a href="storage/userfiles/photo/{{ $forms->upload_photo }}" download="{{ $forms->upload_photo }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/photo/$forms->upload_photo") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">Photo</strong></p></div></a></div>
				<div class="imgform"><a href="storage/userfiles/sign/{{ $forms->upload_sign }}" download="{{ $forms->upload_sign }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/sign/$forms->upload_sign") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">Sign</strong></p></div></a></div>
				<div class="imgform"><a href="storage/userfiles/thumb/{{ $forms->upload_thumb }}" download="{{ $forms->upload_thumb }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/thumb/$forms->upload_thumb") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">Thumb</strong></p></div></a></div>
				<input type="hidden" id="hidecasteform" value="{{ $forms->upload_caste }}" />
				<div class="imgform castahidenow"><a href="storage/userfiles/caste/{{ $forms->upload_caste }}" download="{{ $forms->upload_caste }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/caste/$forms->upload_caste") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">Caste</strong></p></div></a></div>
				<input type="hidden" id="hidenoncreamform" name="user_id" value="{{ $forms->upload_noncreamy_layer }}" />
				<div class="imgform creamyhidenow"><a href="storage/userfiles/noncreamy/{{ $forms->upload_noncreamy_layer }}" download="{{ $forms->upload_noncreamy_layer }}"><img class="imgformresize" src="http://localhost:8000/images/obcnoncream.png" alt=""/><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">Non-Creamy</strong></p></div></a></div>
				<div class="imgform"><a href="storage/userfiles/ageproof/{{ $forms->upload_age_proof }}" download="{{ $forms->upload_age_proof }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/ageproof/$forms->upload_age_proof") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">Age-Proof</strong></p></div></a></div>
			</div>
			
			<div class="div1">

				<div class="imgform"><a href="storage/userfiles/x/{{ $forms->x_upload }}" download="{{ $forms->x_upload }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/x/$forms->x_upload") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">SSC</strong></p></div></a></div>
				<input type="hidden" id="hidehscform" value="{{ $forms->xii_upload }}" />
				<div class="imgform hscahidenow"><a href="storage/userfiles/xii/{{ $forms->xii_upload }}" download="{{ $forms->xii_upload }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/xii/$forms->xii_upload") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">HSC</strong></p></div></a></div>
				<input type="hidden" id="hidedipform" value="{{ $forms->diploma_upload }}" />
				<div class="imgform dipahidenow"><a href="storage/userfiles/diploma/{{ $forms->diploma_upload }}" download="{{ $forms->diploma_upload }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/diploma/$forms->diploma_upload") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">DIPLOMA</strong></p></div></a></div>
				<input type="hidden" id="hideugform" value="{{ $forms->ug_upload }}" />
				<div class="imgform ugahidenow"><a href="storage/userfiles/ug/{{ $forms->ug_upload }}" download="{{ $forms->ug_upload }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/ug/$forms->ug_upload") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">UG</strong></p></div></a></div>
				<input type="hidden" id="hidepgform" value="{{ $forms->pg_upload }}" />
				<div class="imgform pgahidenow"><a href="storage/userfiles/pg/{{ $forms->pg_upload }}" download="{{ $forms->pg_upload }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/pg/$forms->pg_upload") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">PG</strong></p></div></a></div>
				<input type="hidden" id="hidephdform" value="{{ $forms->phd_upload }}" />
				<div class="imgform phdahidenow"><a href="storage/userfiles/phd/{{ $forms->phd_upload }}" download="{{ $forms->phd_upload }}"><img class="imgformresize" src="{{ URL::asset("/storage/userfiles/phd/$forms->phd_upload") }}" /><div class="dowmloaddiv"><p class="dowmloadtitle"><strong style="color:white;">PHD</strong></p></div></a></div>

			</div>
					
			<div class="div2">
				<div class="userdetail1 filledpwd"><p><strong style="color:black;">PWD:</strong> {{ $forms->pwd }}</p></div>
				<div class="userdetail1 filledemail"><p><strong style="color:black;">EMAIL:</strong> {{ $forms->email }}</p></div>
				<div class="userdetail1 "><p><strong style="color:black;">MOBILE NO.:</strong> {{ $forms->mob_1 }}</p></div>
				<div class="userdetail1 "><p><strong style="color:black;">ALTERNATE MOBILE NO.:</strong> {{ $forms->mob_2 }}</p></div>
			</div>
			
			<div class="div1">
				<div class="userdetail2"><p><strong style="color:black;">First Name:</strong> {{ $forms->first_name }}</p></div>
				<div class="userdetail2"><p><strong style="color:black;">Middle Name:</strong> {{ $forms->middle_name }}</p></div>
				<div class="userdetail2"><p><strong style="color:black;">Last Name:</strong> {{ $forms->last_name }}</p></div>
				<div class="userdetail2"><p><strong style="color:black;">Full Name:</strong> {{ $forms->father_name }}</p></div>	
				<div class="userdetail2"><p><strong style="color:black;">Father's Name:</strong> {{ $forms->mother_name }}</p></div>
				<div class="userdetail2"><p><strong style="color:black;">Mother's Name:</strong> {{ $forms->name_ssc }}</p></div>
				<div class="userdetail2"><p><strong style="color:black;">Gender:</strong> {{ $forms->gender }}</p></div>
				<input type="hidden" id="hidespouseform" value="{{ $forms->marital_status }}" />
				<div class="userdetail2"><p><strong style="color:black;">Marital Status:</strong> {{ $forms->marital_status }}</p></div>
				<div class="userdetail2 spoushidenow"><p><strong style="color:black;">Spouse's Name:</strong> {{ $forms->spouse_name }}</p></div>
			</div>		

			<div class="div2">
				<div class="userdetail1"><p><strong style="color:black;">Height:</strong> {{ $forms->height }} cm</p></div>
				<div class="userdetail1"><p><strong style="color:black;">Weight:</strong> {{ $forms->weight }} Kgs</p></div>
				<div class="userdetail1"><p><strong style="color:black;">Identification Mark:</strong> {{ $forms->visibility_mark }}</p></div>
				<div class="userdetail1"><p><strong style="color:black;">Aadhar Card No.:</strong> {{ $forms->aadhar_no }}</p></div>			
			</div>
			
			<div class="div1">
				<div class="userdetail2"><p><strong style="color:black;">Date of Birth:</strong> {{ $forms->user_dob }}</p></div>
				<div class="userdetail2"><p><strong style="color:black;">Religion:</strong> {{ $forms->religion }}</p></div>
				<div class="userdetail2"><p><strong style="color:black;">Religious Minority:</strong> {{ $forms->religion_minority }}</p></div>
				<div class="userdetail2"><p><strong style="color:black;">Earthquake Affected:</strong> {{ $forms->earthquake_affected }}</p></div>	
				<input type="hidden" id="hidenatotherform" value="{{ $forms->nationality }}" />
				<div class="userdetail2 natindian"><p><strong style="color:black;">Nationality:</strong> {{ $forms->nationality }}</p></div>
				<div class="userdetail2 natother"><p><strong style="color:black;">Nationality:</strong> {{ $forms->nationality_other }}</p></div>
			</div>		

			<div class="div2">
				<input type="hidden" id="hideesmform" value="{{ $forms->ex_servicemen }}" />
				<div class="userdetail1"><p><strong style="color:black;">Ex-Servicemen:</strong> {{ $forms->ex_servicemen }}</p></div>
				<div class="userdetail1 Exmncady"><p><strong style="color:black;">Date of Joining:</strong> {{ $forms->exsm_doj }}</p></div>
				<div class="userdetail1 Exmncady"><p><strong style="color:black;">Date of Discharge:</strong> {{ $forms->exsm_dod }}</p></div>
				<div class="userdetail1 Exmncady"><p><strong style="color:black;">No.of Month Served:</strong> {{ $forms->exsm_month_served }}</p></div>			
			</div>
			
			<div class="div1">
				<input type="hidden" id="hidegsform" value="{{ $forms->govt_servant }}" />
				<div class="userdetail1"><p><strong style="color:black;">Govt. Servant:</strong> {{ $forms->govt_servant }}</p></div>
				<input type="hidden" id="hidegsothform" value="{{ $forms->gs_type }}" />
				<div class="userdetail1 gstyp"><p><strong style="color:black;">GS-Type:</strong> {{ $forms->gs_type }}</p></div>
				<div class="userdetail1 gstypother"><p><strong style="color:black;">GS-Type:</strong> {{ $forms->gs_type_other }}</p></div>
				<div class="userdetail1 gscady"><p><strong style="color:black;">Date of Joining:</strong> {{ $forms->gs_doj }}</p></div>				
				<div class="userdetail1 gscady"><p><strong style="color:black;">Department:</strong> {{ $forms->gs_dptmnt }}</p></div>				
			</div>		
			
			<div class="div2">
				<div class="userdetail1"><p><strong style="color:black;">J&K Domiciled during Jan-80 to Dec-89:</strong> {{ $forms->jk_domicile_range }}</p></div>
				<input type="hidden" id="hidejkform" value="{{ $forms->jk_domicile }}" />
				<div class="userdetail1"><p><strong style="color:black;">J&K Domiciled Current/Past:</strong> {{ $forms->jk_domicile }}</p></div>
				<div class="userdetail1 jkcady"><p><strong style="color:black;">Residential Form:</strong> {{ $forms->jk_from }}</p></div>
				<div class="userdetail1 jkcady"><p><strong style="color:black;">Residential To:</strong> {{ $forms->jk_to }}</p></div>				
			</div>
			
			<div class="div1">
				<div class="userdetail100"><p><strong style="color:black;">Have you joined Govt. Job on civil side after availing of benefits given as an ex-serviceman:</strong> {{ $forms->govt_civil_side }}</p></div>
			</div>		

			<div class="div2">
				<div class="userdetail100"><p><strong style="color:black;">Are you a child/family member of those who died in 1984 riots:</strong> {{ $forms->riots }}</p></div>
			</div>

			<div class="div1">
				<input type="hidden" id="hidcasteform" value="{{ $forms->caste }}" />
				<div class="userdetail2 castecandy"><p><strong style="color:black;">Caste:</strong> {{ $forms->caste }}</p></div>
				<div class="userdetail2 casteothercandy"><p><strong style="color:black;">Caste:</strong> {{ $forms->caste_other }}</p></div>
				<div class="userdetail2 casteur"><p><strong style="color:black;">Caste Certificate No.:</strong> {{ $forms->caste_certificate_no }}</p></div>
				<div class="userdetail2 casteur"><p><strong style="color:black;">Date of Issue:</strong> {{ $forms->caste_doi }}</p></div>
			</div>

			<div class="div2">
				<div class="userdetail2">
					<div class="qual_heading"><strong style="color:red;">SSC</strong></div>
					<div class="gap"><p><strong style="color:black;">Status:</strong> {{ $forms->x_status }}</p></div>
					<div class="gap"><p><strong style="color:black;">Type:</strong> {{ $forms->x_rd }}</p></div>
					<div class="gap"><p><strong style="color:black;">Subject:</strong> {{ $forms->x_subject }}</p></div>
					<div class="gap"><p><strong style="color:black;">Board:</strong> {{ $forms->x_board }}</p></div>
					<div class="gap"><p><strong style="color:black;">Year of Passing:</strong> {{ $forms->x_yop }}</p></div>
					<div class="gap"><p><strong style="color:black;">Marks Obtained:</strong> {{ $forms->x_marks_obtain }}</p></div>
					<div class="gap"><p><strong style="color:black;">Max Marks:</strong> {{ $forms->x_max_marks }}</p></div>
					<div class="gap"><p><strong style="color:black;">Percentage:</strong> {{ $forms->x_pecentage }} %</p></div>
					<div class="gap"><p><strong style="color:black;">Grade:</strong> {{ $forms->x_grade }}</p></div>
				</div>
				
				<input type="hidden" id="hi_hscform" value="{{ $forms->xii_status }}" />
				<div class="userdetail2 hschide">
					<div class="qual_heading"><strong style="color:red;">HSC</strong></div>
					<div class="gap"><p><strong style="color:black;">Status:</strong> {{ $forms->xii_status }}</p></div>
					<div class="gap"><p><strong style="color:black;">Type:</strong> {{ $forms->xii_rd }}</p></div>
					<div class="gap"><p><strong style="color:black;">Subject:</strong> {{ $forms->xii_subject }}</p></div>
					<div class="gap"><p><strong style="color:black;">Board:</strong> {{ $forms->xii_board }}</p></div>
					<div class="gap"><p><strong style="color:black;">Year of Passing:</strong> {{ $forms->xii_yop }}</p></div>
					<div class="gap"><p><strong style="color:black;">Marks Obtained:</strong> {{ $forms->xii_marks_obtain }}</p></div>
					<div class="gap"><p><strong style="color:black;">Max Marks:</strong> {{ $forms->xii_max_marks }}</p></div>
					<div class="gap"><p><strong style="color:black;">Percentage:</strong> {{ $forms->xii_pecentage }} %</p></div>
					<div class="gap"><p><strong style="color:black;">Grade:</strong> {{ $forms->xii_grade }}</p></div>
				</div>	

				<input type="hidden" id="hi_dipform" value="{{ $forms->diploma_status }}" />
				<div class="userdetail2 diplomahide">
					<div class="qual_heading"><strong style="color:red;">DIPLOMA</strong></div>
					<div class="gap"><p><strong style="color:black;">Status:</strong> {{ $forms->diploma_status }}</p></div>
					<div class="gap"><p><strong style="color:black;">Type:</strong> {{ $forms->diploma_rd }}</p></div>
					<div class="gap"><p><strong style="color:black;">Subject:</strong> {{ $forms->diploma_subject }}</p></div>
					<div class="gap"><p><strong style="color:black;">Board:</strong> {{ $forms->diploma_board }}</p></div>
					<div class="gap"><p><strong style="color:black;">Year of Passing:</strong> {{ $forms->diploma_yop }}</p></div>
					<div class="gap"><p><strong style="color:black;">Marks Obtained:</strong> {{ $forms->diploma_marks_obtain }}</p></div>
					<div class="gap"><p><strong style="color:black;">Max Marks:</strong> {{ $forms->diploma_max_marks }}</p></div>
					<div class="gap"><p><strong style="color:black;">Percentage:</strong> {{ $forms->diploma_pecentage }} %</p></div>
					<div class="gap"><p><strong style="color:black;">Grade:</strong> {{ $forms->diploma_grade }}</p></div>
				</div>				
			</div>

			<div class="div1 blockhide">
				<input type="hidden" id="hi_ugform" value="{{ $forms->ug_status }}" />
				<div class="userdetail2 ughide">
					<div class="qual_heading"><strong style="color:red;">UG</strong></div>
					<div class="gap"><p><strong style="color:black;">Status:</strong> {{ $forms->ug_status }}</p></div>
					<div class="gap"><p><strong style="color:black;">Type:</strong> {{ $forms->ug_rd }}</p></div>
					<div class="gap"><p><strong style="color:black;">Subject:</strong> {{ $forms->ug_subject }}</p></div>
					<div class="gap"><p><strong style="color:black;">Board:</strong> {{ $forms->ug_board }}</p></div>
					<div class="gap"><p><strong style="color:black;">Year of Passing:</strong> {{ $forms->ug_yop }}</p></div>
					<div class="gap"><p><strong style="color:black;">Marks Obtained:</strong> {{ $forms->ug_marks_obtain }}</p></div>
					<div class="gap"><p><strong style="color:black;">Max Marks:</strong> {{ $forms->ug_max_marks }}</p></div>
					<div class="gap"><p><strong style="color:black;">Percentage:</strong> {{ $forms->ug_pecentage }} %</p></div>
					<div class="gap"><p><strong style="color:black;">Grade:</strong> {{ $forms->ug_grade }}</p></div>
				</div>
				
				<input type="hidden" id="hi_pgform" value="{{ $forms->pg_status }}" />
				<div class="userdetail2 pghide">
					<div class="qual_heading"><strong style="color:red;">PG</strong></div>
					<div class="gap"><p><strong style="color:black;">Status:</strong> {{ $forms->pg_status }}</p></div>
					<div class="gap"><p><strong style="color:black;">Type:</strong> {{ $forms->pg_rd }}</p></div>
					<div class="gap"><p><strong style="color:black;">Subject:</strong> {{ $forms->pg_subject }}</p></div>
					<div class="gap"><p><strong style="color:black;">Board:</strong> {{ $forms->pg_board }}</p></div>
					<div class="gap"><p><strong style="color:black;">Year of Passing:</strong> {{ $forms->pg_yop }}</p></div>
					<div class="gap"><p><strong style="color:black;">Marks Obtained:</strong> {{ $forms->pg_marks_obtain }}</p></div>
					<div class="gap"><p><strong style="color:black;">Max Marks:</strong> {{ $forms->pg_max_marks }}</p></div>
					<div class="gap"><p><strong style="color:black;">Percentage:</strong> {{ $forms->pg_pecentage }} %</p></div>
					<div class="gap"><p><strong style="color:black;">Grade:</strong> {{ $forms->pg_grade }}</p></div>
				</div>	

				<input type="hidden" id="hi_phdform" value="{{ $forms->phd_status }}" />
				<div class="userdetail2 phdhide">
					<div class="qual_heading"><strong style="color:red;">Phd</strong></div>
					<div class="gap"><p><strong style="color:black;">Status:</strong> {{ $forms->phd_status }}</p></div>
					<div class="gap"><p><strong style="color:black;">Type:</strong> {{ $forms->phd_rd }}</p></div>
					<div class="gap"><p><strong style="color:black;">Subject:</strong> {{ $forms->phd_subject }}</p></div>
					<div class="gap"><p><strong style="color:black;">Board:</strong> {{ $forms->phd_board }}</p></div>
					<div class="gap"><p><strong style="color:black;">Year of Passing:</strong> {{ $forms->phd_yop }}</p></div>
					<div class="gap"><p><strong style="color:black;">Marks Obtained:</strong> {{ $forms->phd_marks_obtain }}</p></div>
					<div class="gap"><p><strong style="color:black;">Max Marks:</strong> {{ $forms->phd_max_marks }}</p></div>
					<div class="gap"><p><strong style="color:black;">Percentage:</strong> {{ $forms->phd_pecentage }} %</p></div>
					<div class="gap"><p><strong style="color:black;">Grade:</strong> {{ $forms->phd_grade }}</p></div>
				</div>
			</div>	

			<div class="div2 blockhide">
				<div class="userdetail100"><p><strong style="color:black;">Address for GST Invoicing:</strong> {{ $forms->add_invoice }}</p></div>
			</div>

			<div class="div1 altblock">
				<div class="userdetail100"><p><strong style="color:black;">Address for GST Invoicing:</strong> {{ $forms->add_invoice }}</p></div>
			</div>				

			<div class="div2">
				<div class="userdetailadd">
					<div class="user_add"><p><strong style="color:black;">Correspondence Address</strong></div>
					<p> {{ $forms->c_add1 }}</p>
					<p> {{ $forms->c_add2 }}</p>
					<p> {{ $forms->c_add3 }}</p>
					<p> {{ $forms->c_add4 }}</p>
					<p> {{ $forms->c_add5 }}</p>
					<p> {{ $forms->c_pin }}</p>
				</div>
				
				<div class="userdetailadd">
					<div class="user_add"><p><strong style="color:black;">Permanent Address</strong></div>
					<p> {{ $forms->p_add1 }}</p>
					<p> {{ $forms->p_add2 }}</p>
					<p> {{ $forms->p_add3 }}</p>
					<p> {{ $forms->p_add4 }}</p>
					<p> {{ $forms->p_add5 }}</p>
					<p> {{ $forms->p_pin }}</p>
				</div>
			</div>

			<div class="div1">
				<div class="userdetail1"><p><strong style="color:black;">Center choice 1.:</strong> {{ $forms->cent1 }}</p></div>
				<div class="userdetail1"><p><strong style="color:black;">Center choice 2.:</strong> {{ $forms->cent2 }}</p></div>
				<div class="userdetail1"><p><strong style="color:black;">Center choice 3.:</strong> {{ $forms->cent3 }}</p></div>
				<div class="userdetail1"><p><strong style="color:black;">Center choice 4.:</strong> {{ $forms->cent4 }}</p></div>			
			</div>	
		
			<div class="div2"></div>
			
		</div>
	@endforeach
	<?php } ?>