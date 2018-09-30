


$(document).ready(function () 
	{	

		Bind_select_input();
		
		var uid = $("#user_id").val();	

		
		function reload() { 
			window.location.href = 'http://www.jobupto.com/userform';
		}			

		
		$('.menu-container').on('click', function (e) {
			$('.sidemenu').toggleClass("changedsidemenu");
		});	


		
		
		if ( uid !="" )
		{
			$.ajax({
				type:'get',
				url: '/newform',
				data: "uid=" + uid,			
				success: function (response) 
					{
						$('#notediv').html(response);
						Bind_select_input();
					}
			});
		}
		
		window.onbeforeunload = function () {
			window.scrollTo(0, 0);
		}

		
	function Bind_select_input(){
		
		$('#marital_status_id').on('change',function(){
			if( $(this).val()==="Married" || $(this).val()==="Widow" || $(this).val()==="Widower"){
				$("#marital_status_hide").show();
				$(".spouse_name").prop('required',true);
			}
			else{
				$("#marital_status_hide").hide();
				$('.spouse_name').val('');
				$(".spouse_name").prop('required',false);
			}
		});		
		
		$('#nationality_id').on('change',function(){ 
			if( $(this).val()==="Other"){
				$("#nationality_hide").show();
				$(".nationality_other").prop('required',true);
			}
			else{
				$("#nationality_hide").hide();
				$('.nationality_other').val('');
				$(".nationality_other").prop('required',false);
			}
		});
		
		$('#ex_servicemen_id').on('change',function(){ 
			if( $(this).val()==="Yes"){
				$(".ex_servicemen_hide").show();
				$(".ex_servicemen").prop('required',true);
			}
			else{
				$(".ex_servicemen_hide").hide();
				$('.ex_servicemen').val('');
				$(".ex_servicemen").prop('required',false);
			}
		});		
		
		$('#govt_servant_id').on('change',function(){ 
			if( $(this).val()==="Yes"){
				
				$(".govt_servant_hide").show();
				$(".govt_servant_val").prop('required',true);
				
				if( $('#gs_type_id').val()==="Other"){
					$(".gs_type_hide").show();
					$(".gs_type_val").prop('required',true);
				}			
			}
			else{
				$(".govt_servant_hide").hide();
				$(".gs_type_hide").hide();
				$(".govt_servant_val").val('');
				$(".gs_type_val").val('');
				$(".govt_servant_val").prop('required',false);
				$(".gs_type_val").prop('required',false);			
			}
		});		

		$('#gs_type_id').on('change',function(){ 
			if( $(this).val()==="Other"){
			$(".gs_type_hide").show();
			$(".gs_type_val").prop('required',true);
			}
			else{
			$(".gs_type_hide").hide();
			$(".gs_type_val").val('');
			$(".gs_type_val").prop('required',false);
			}
		});	

		$('#jk_domicile_id').on('change',function(){ 
			if( $(this).val()==="Yes"){
				$(".jk_domicile_hide").show();
				$(".jk_domicile_val").prop('required',true);
			}
			else{
				$(".jk_domicile_hide").hide();
				$('.jk_domicile_val').val('');
				$(".jk_domicile_val").prop('required',false);
			}
		});	

		
		$('#caste_id').on('change',function(){
			if( $(this).val()==="SC" || $(this).val()==="ST" || $(this).val()==="NT" || $(this).val()==="OBC(Creamy layer)" || $(this).val()==="OBC(Non-Creamy layer)"){
				$(".caste_hide").show();
				$(".caste_val").prop('required',true);
				$(".caste_other_hide").hide();
				$(".caste_other_val").val('');
				$(".caste_other_val").prop('required',false);
			}
			else if( $(this).val()==="Other"){
				$(".caste_other_hide").show();
				$(".caste_other_val").prop('required',true);
				$(".caste_hide").show();
				$(".caste_val").prop('required',true);				
			}
			else{
				$(".caste_hide").hide();
				$(".caste_val").val('');
				$(".caste_val").prop('required',false);
				$(".caste_other_hide").hide();
				$(".caste_other_val").val('');
				$(".caste_other_val").prop('required',false);
			}
		});	
		
		$('#caste_id').on('change',function(){
			if( $(this).val()==="SC" || $(this).val()==="ST" || $(this).val()==="NT" || $(this).val()==="OBC(Creamy layer)" || $(this).val()==="Other"){
				$(".upload_caste_hide").show();
				$(".upload_caste_val").prop('required',true);
				$(".upload_noncreamy_layer_hide").hide();
				$(".upload_noncreamy_layer_val").val('');
				$(".upload_noncreamy_layer_val").prop('required',false);
			}
			else if( $(this).val()==="OBC(Non-Creamy layer)"){
				$(".upload_caste_hide").show();
				$(".upload_caste_val").prop('required',true);
				$(".upload_noncreamy_layer_hide").show();
				$(".upload_noncreamy_layer_val").prop('required',true);
				}
			else{
				$(".upload_caste_hide").hide();
				$(".upload_noncreamy_layer_hide").hide();
				$(".upload_caste_val").val('');
				$(".upload_noncreamy_layer_val").val('');
				$(".upload_caste_val").prop('required',false);
				$(".upload_noncreamy_layer_val").prop('required',false);
			}
		});			

		
		$('.xii_status_class').on('change',function(){

			if( $(this).val()==="Not_Appeared"){
				$(".xii_status_hide").hide();
				$(".xii_status_hidep").hide();
				$('.xii_status_hide').val('');
				$('.xii_status_hidep').val('');
				$(".xii_status_hide").prop('required',false);
				$(".xii_status_hidep").prop('required',false);
			}
			else if( $(this).val()==="Pursuing"){
				$(".xii_status_hide").show();
				$(".xii_status_hide").prop('required',true);
				$(".xii_status_hidep").hide();
				$('.xii_status_hidep').val('');	
				$(".xii_status_hidep").prop('required',false);
			}
			else{
				$(".xii_status_hide").show();
				$(".xii_status_hide").prop('required',true);
				$(".xii_status_hidep").show();
				$(".xii_status_hidep").prop('required',true);
			}
		});

		$('.diploma_status_class').on('change',function(){
	
			if( $(this).val()==="Not_Appeared"){
				$(".diploma_status_hide").hide();
				$(".diploma_status_hidep").hide();
				$('.diploma_status_hide').val('');
				$('.diploma_status_hidep').val('');	
				$(".diploma_status_hide").prop('required',false);
				$(".diploma_status_hidep").prop('required',false);				
			}
			else if( $(this).val()==="Pursuing"){
				$(".diploma_status_hide").show();
				$(".diploma_status_hide").prop('required',true);
				$(".diploma_status_hidep").hide();
				$('.diploma_status_hidep').val('');	
				$(".diploma_status_hidep").prop('required',false);
			}
			else{
				$(".diploma_status_hide").show();
				$(".diploma_status_hidep").show();
				$(".diploma_status_hide").prop('required',true);
				$(".diploma_status_hidep").prop('required',true);				
			}
		});

		$('.ug_status_class').on('change',function(){
		
			if( $(this).val()==="Not_Appeared"){
				$(".ug_status_hide").hide();
				$(".ug_status_hidep").hide();
				$('.ug_status_hide').val('');
				$('.ug_status_hidep').val('');	
				$(".ug_status_hide").prop('required',false);
				$(".ug_status_hidep").prop('required',false);				
			}
			else if( $(this).val()==="Pursuing"){
				$(".ug_status_hide").show();
				$(".ug_status_hide").prop('required',true);
				$(".ug_status_hidep").hide();
				$('.ug_status_hidep').val('');
				$(".ug_status_hidep").prop('required',false);
			}
			else{
				$(".ug_status_hide").show();
				$(".ug_status_hidep").show();
				$(".ug_status_hide").prop('required',true);
				$(".ug_status_hidep").prop('required',true);				
			}
		});

		$('.pg_status_class').on('change',function(){
			
			if( $(this).val()==="Not_Appeared"){
				$(".pg_status_hide").hide();
				$(".pg_status_hidep").hide();
				$('.pg_status_hide').val('');
				$('.pg_status_hidep').val('');
				$(".pg_status_hide").prop('required',false);
				$(".pg_status_hidep").prop('required',false);				
			}
			else if( $(this).val()==="Pursuing"){
				$(".pg_status_hide").show();
				$(".pg_status_hide").prop('required',true);
				$(".pg_status_hidep").hide();
				$('.pg_status_hidep').val('');
				$(".pg_status_hidep").prop('required',false);
			}
			else{
				$(".pg_status_hide").show();
				$(".pg_status_hidep").show();
				$(".pg_status_hide").prop('required',true);
				$(".pg_status_hidep").prop('required',true);				
			}
		});		

		$('.phd_status_class').on('change',function(){
			
			if( $(this).val()==="Not_Appeared"){
				$(".phd_status_hide").hide();
				$(".phd_status_hidep").hide();
				$('.phd_status_hide').val('');
				$('.phd_status_hidep').val('');
				$(".phd_status_hide").prop('required',false);
				$(".phd_status_hidep").prop('required',false);				
			}
			else if( $(this).val()==="Pursuing"){
				$(".phd_status_hide").show();
				$(".phd_status_hide").prop('required',true);
				$(".phd_status_hidep").hide();
				$('.phd_status_hidep').val('');
				$(".phd_status_hidep").prop('required',false);
			}
			else{
				$(".phd_status_hide").show();
				$(".phd_status_hidep").show();
				$(".phd_status_hide").prop('required',true);
				$(".phd_status_hidep").prop('required',true);				
			}
		});		

		
		$("#ADD_checkbox").click(copyData);
		function copyData(){
		   var c1 = $(".c_add1").val();
		   var c2 = $(".c_add2").val();
		   var c3 = $(".c_add3").val();
		   var c4 = $(".c_add4").val();
		   var c5 = $(".c_add5").val();
		   var c6 = $(".c_pin").val();
		   
		   
		   if (this.checked==true)
			{
				$(".p_add1").val(c1);
				$(".p_add2").val(c2);
				$(".p_add3").val(c3);
				$(".p_add4").val(c4);
				$(".p_add5").val(c5);
				$(".p_pin").val(c6);
			}
			 else if(this.checked==false)
			{
				$(".p_add1").val('');
				$(".p_add2").val('');
				$(".p_add3").val('');
				$(".p_add4").val('');
				$(".p_add5").val('');
				$(".p_pin").val('');
			}
			 
		}


		$("#pwd_alerted").change(function(){
			
			if($("#pwd_alerted").val() == 'No')
			{
				$("#pwd_alert").hide();
			}
			else
			{
				$("#pwd_alert").html("*Unavailable");
				$("#pwd_alert").show();
				alert("We are highly regretted for the unavailability of our service to physically handicapped candidates, due to various parameter of disability asked differently by vendors. Service will be available soon.")
				$(this).val('');
			}
		});

		$("#mob_alerted").focusout(function(){
			var pattern = new RegExp(/^[0-9]{10}$/);
			
			if(pattern.test($("#mob_alerted").val()))
			{
				$("#mob_alert").hide();
			}
			else
			{
				$("#mob_alert").html("*Invalid No.");
				$("#mob_alert").show();
				$(this).val('');
			}
		});
	
		$("#heightdalerted").focusout(function(){
			var pattern = new RegExp(/^(?:36[0-5]|3[0-5]\d|[12]\d{2}|[1-9]\d?)$/);
			
			if(pattern.test($("#heightdalerted").val()))
			{
				$("#heightdalert").hide();
			}
			else
			{
				$("#heightdalert").html("*Invalid No.");
				$("#heightdalert").show();
				$(this).val('');
			}
		});				

		$("#weightdalerted").focusout(function(){
			var pattern = new RegExp(/^(([0-1]?[0-9]?[0-9])|([2][0-4][0-9])|(25[0-5]))$/);
			
			if(pattern.test($("#weightdalerted").val()))
			{
				$("#weightdalert").hide();
			}
			else
			{
				$("#weightdalert").html("*Invalid No.");
				$("#weightdalert").show();
				$(this).val('');
			}
		});

		$("#user_dobalerted").focusout(function(){

			var pattern = new RegExp(/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/);
			
			if(pattern.test($("#user_dobalerted").val()))
			{
				$("#user_dobalert").hide();
			}
			else
			{
				$("#user_dobalert").html("*Invalid Date");
				$("#user_dobalert").show();
				$(this).val('');
			}
		
		});				

		$("#exsm_dojalerted").focusout(function(){

			var pattern = new RegExp(/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/);
			
			if(pattern.test($("#exsm_dojalerted").val()))
			{
				$("#exsm_dojalert").hide();
			}
			else
			{
				$("#exsm_dojalert").html("*Invalid Date");
				$("#exsm_dojalert").show();
				$(this).val('');
			}
		});
			
		$("#exsm_dodalerted").focusout(function(){
			var pattern = new RegExp(/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/);
			
			if(pattern.test($("#exsm_dodalerted").val()))
			{
				$("#exsm_dodalert").hide();
			}
			else
			{
				$("#exsm_dodalert").html("*Invalid Date");
				$("#exsm_dodalert").show();
				$(this).val('');
			}
		});				

		$("#exsm_month_servedalerted").focusout(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			if(pattern.test($("#exsm_month_servedalerted").val()))
			{
				$("#exsm_month_servedalert").hide();
			}
			else
			{
				$("#exsm_month_servedalert").html("*Invalid Data");
				$("#exsm_month_servedalert").show();
				$(this).val('');
			}
		});

		$("#gs_dojalerted").focusout(function(){
			var pattern = new RegExp(/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/);
			
			if(pattern.test($("#gs_dojalerted").val()))
			{
				$("#gs_dojalert").hide();
			}
			else
			{
				$("#gs_dojalert").html("*Invalid Date");
				$("#gs_dojalert").show();
				$(this).val('');
			}
		});				

		$("#jk_fromalerted").focusout(function(){
			var pattern = new RegExp(/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/);
			
			if(pattern.test($("#jk_fromalerted").val()))
			{
				$("#jk_fromalert").hide();
			}
			else
			{
				$("#jk_fromalert").html("*Invalid Date");
				$("#jk_fromalert").show();
				$(this).val('');
			}
		});

		$("#jk_toalerted").focusout(function(){
			var pattern = new RegExp(/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/);
			
			if(pattern.test($("#jk_toalerted").val()))
			{
				$("#jk_toalert").hide();
			}
			else
			{
				$("#jk_toalert").html("*Invalid Date");
				$("#jk_toalert").show();
				$(this).val('');
			}
		});				

		$("#caste_doialerted").focusout(function(){
			var pattern = new RegExp(/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/);
			
			if(pattern.test($("#caste_doialerted").val()))
			{
				$("#caste_doialert").hide();
			}
			else
			{
				$("#caste_doialert").html("*Invalid Date");
				$("#caste_doialert").show();
				$(this).val('');
			}
		});


		$("#upload_photoalerted").change(function(){
				
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#upload_photoalert").html("*Unsupported file");
				$("#upload_photoalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 50000 || this.files[0].size > 50000)
			{
				$("#upload_photoalert").html("*Less than 50KB");
				$("#upload_photoalert").show();
				alert("File Size should be less than 50KB")
				$(this).val('');				
			}
			else
			{
				$("#upload_photoalert").hide();
			}				
		});

		$("#upload_signalerted").change(function(){
				
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#upload_signalert").html("*Unsupported file");
				$("#upload_signalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 50000 || this.files[0].size > 50000)
			{
				$("#upload_signalert").html("*Less than 50KB");
				$("#upload_signalert").show();
				alert("File Size should be less than 50KB")
				$(this).val('');				
			}
			else
			{
				$("#upload_signalert").hide();
			}
		});				

		$("#upload_age_proofalerted").change(function(){
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#upload_age_proofalert").html("*Unsupported file");
				$("#upload_age_proofalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#upload_age_proofalert").html("*Less than 200KB");
				$("#upload_age_proofalert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#upload_age_proofalert").hide();
			}
		});

		$("#upload_thumbalerted").change(function(){
			
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#upload_thumbalert").html("*Unsupported file");
				$("#upload_thumbalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 50000 || this.files[0].size > 50000)
			{
				$("#upload_thumbalert").html("*Less than 50KB");
				$("#upload_thumbalert").show();
				alert("File Size should be less than 50KB")
				$(this).val('');				
			}
			else
			{
				$("#upload_thumbalert").hide();
			}
		});				

		$("#upload_castealerted").change(function(){
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#upload_castealert").html("*Unsupported file");
				$("#upload_castealert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#upload_castealert").html("*Less than 200KB");
				$("#upload_castealert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#upload_castealert").hide();
			}
		});
			
		$("#upload_noncreamy_layeralerted").change(function(){
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(pdf)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only PDF Format File ")
				$("#upload_noncreamy_layeralert").html("*Pdf File Only");
				$("#upload_noncreamy_layeralert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#upload_noncreamy_layeralert").html("*Less than 200KB");
				$("#upload_noncreamy_layeralert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#upload_noncreamy_layeralert").hide();
			}
		});				
		
		
		$("#x_marks_obtainalerted").change(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
		
			if(pattern.test($("#x_marks_obtainalerted").val()))
			{
				if( $("#x_max_marksalerted").val()!="" ){
					
					if( parseInt($("#x_marks_obtainalerted").val()) > parseInt($("#x_max_marksalerted").val())){
						
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				}				
				$("#x_marks_obtainalert").hide();
			}
			else
			{
				$("#x_marks_obtainalert").html("*Invalid No.");
				$("#x_marks_obtainalert").show();
				$(this).val('');
			}
		});

		$("#x_max_marksalerted").change(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			if(pattern.test($("#x_max_marksalerted").val()))
			{
				if( parseInt($("#x_marks_obtainalerted").val()) > parseInt($("#x_max_marksalerted").val())){
					
					alert("Max marks should be greater than obtained marks ");
					$(this).val('');
				}
				$("#x_max_marksalert").hide();
			}
			else
			{
				$("#x_max_marksalert").html("*Invalid No.");
				$("#x_max_marksalert").show();
				$(this).val('');
			}
		});				

		$("#x_pecentagealerted").change(function(){
			var pattern = new RegExp(/^[1-9][0-9]?$|^100$/);
			
			if(pattern.test($("#x_pecentagealerted").val()))
			{
				$("#x_pecentagealert").hide();
			}
			else
			{
				$("#x_pecentagealert").html("*Invalid No.");
				$("#x_pecentagealert").show();
				alert("Please Enter round off 2 digit number")
				$(this).val('');
			}
		});

		$("#x_uploadalerted").change(function(){
			
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#x_uploadalert").html("*Unsupported file");
				$("#x_uploadalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#x_uploadalert").html("*Less than 200KB");
				$("#x_uploadalert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#x_uploadalert").hide();
			}
		});				
	

		$("#xii_marks_obtainalerted").change(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
	
			if(pattern.test($("#xii_marks_obtainalerted").val()))
			{			
				if( $("#xii_max_marksalerted").val()!="" ){
						
					if( parseInt($("#xii_marks_obtainalerted").val()) > parseInt($("#xii_max_marksalerted").val())){
							
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				}
				$("#xii_marks_obtainalert").hide();
			}	
			else
			{
				$("#xii_marks_obtainalert").html("*Invalid No.");
				$("#xii_marks_obtainalert").show();
				$(this).val('');
			}
		});

		$("#xii_max_marksalerted").change(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			
			if(pattern.test($("#xii_max_marksalerted").val()))
			{		
				if( parseInt($("#xii_marks_obtainalerted").val()) > parseInt($("#xii_max_marksalerted").val())){
							
					alert("Max marks should be greater than obtained marks ");
					$(this).val('');
				}
				$("#xii_max_marksalert").hide();
			}
			else
			{
				$("#xii_max_marksalert").html("*Invalid No.");
				$("#xii_max_marksalert").show();
				$(this).val('');				
			}
		});				

		$("#xii_pecentagealerted").change(function(){
			var pattern = new RegExp(/^[1-9][0-9]?$|^100$/);
			
			if(pattern.test($("#xii_pecentagealerted").val()))
			{
				$("#xii_pecentagealert").hide();
			}
			else
			{
				$("#xii_pecentagealert").html("*Invalid No.");
				$("#xii_pecentagealert").show();
				alert("Please Enter round off 2 digit number")
				$(this).val('');
			}
		});

		$("#xii_uploadalerted").change(function(){
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#xii_uploadalert").html("*Unsupported file");
				$("#xii_uploadalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#xii_uploadalert").html("*Less than 200KB");
				$("#xii_uploadalert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#xii_uploadalert").hide();
			}
		});

	
		$("#diploma_marks_obtainalerted").change(function(){
			
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
		
			if(pattern.test($("#diploma_marks_obtainalerted").val()))
			{
				
				if( $("#diploma_max_marksalerted").val()!="" ){
						
					if( parseInt($("#diploma_marks_obtainalerted").val()) > parseInt($("#diploma_max_marksalerted").val())){
							
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				}				
				
				$("#diploma_marks_obtainalert").hide();
			}
			else
			{
				$("#diploma_marks_obtainalert").html("*Invalid No.");
				$("#diploma_marks_obtainalert").show();
				$(this).val('');
			}
		});

		$("#diploma_max_marksalerted").change(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			if(pattern.test($("#diploma_max_marksalerted").val()))
			{
					if( parseInt($("#diploma_marks_obtainalerted").val()) > parseInt($("#diploma_max_marksalerted").val())){
							
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				$("#diploma_max_marksalert").hide();
			}
			else
			{
				$("#diploma_max_marksalert").html("*Invalid No.");
				$("#diploma_max_marksalert").show();
				$(this).val('');				
			}
		});				

		$("#diploma_pecentagealerted").change(function(){
			var pattern = new RegExp(/^[1-9][0-9]?$|^100$/);
			
			if(pattern.test($("#diploma_pecentagealerted").val()))
			{
				$("#diploma_pecentagealert").hide();
			}
			else
			{
				$("#diploma_pecentagealert").html("*Invalid No.");
				$("#diploma_pecentagealert").show();
				alert("Please Enter round off 2 digit number")
				$(this).val('');
			}
		});

		$("#diploma_uploadalerted").change(function(){
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#diploma_uploadalert").html("*Unsupported file");
				$("#diploma_uploadalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#diploma_uploadalert").html("*Less than 200KB");
				$("#diploma_uploadalert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#diploma_uploadalert").hide();
			}
		});


		$("#ug_marks_obtainalerted").change(function(){
			
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			
			if(pattern.test($("#ug_marks_obtainalerted").val()))
			{
				
				if( $("#ug_max_marksalerted").val()!="" ){
						
					if( parseInt($("#ug_marks_obtainalerted").val()) > parseInt($("#ug_max_marksalerted").val())){
							
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				}				
				$("#ug_marks_obtainalert").hide();
			}
			else
			{
				$("#ug_marks_obtainalert").html("*Invalid No.");
				$("#ug_marks_obtainalert").show();
				$(this).val('');
			}
		});

		$("#ug_max_marksalerted").change(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			if(pattern.test($("#ug_max_marksalerted").val()))
			{
					if( parseInt($("#ug_marks_obtainalerted").val()) > parseInt($("#ug_max_marksalerted").val())){
							
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				$("#ug_max_marksalert").hide();
			}
			else
			{
				$("#ug_max_marksalert").html("*Invalid No.");
				$("#ug_max_marksalert").show();
				$(this).val('');
			}
		});				

		$("#ug_pecentagealerted").change(function(){
			var pattern = new RegExp(/^[1-9][0-9]?$|^100$/);
			
			if(pattern.test($("#ug_pecentagealerted").val()))
			{
				$("#ug_pecentagealert").hide();
			}
			else
			{
				$("#ug_pecentagealert").html("*Invalid No.");
				$("#ug_pecentagealert").show();
				alert("Please Enter round off 2 digit number")
				$(this).val('');
			}
		});

		$("#ug_uploadalerted").change(function(){
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#ug_uploadalert").html("*Unsupported file");
				$("#ug_uploadalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#ug_uploadalert").html("*Less than 200KB");
				$("#ug_uploadalert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#ug_uploadalert").hide();
			}
		});


		$("#pg_marks_obtainalerted").change(function(){

		var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			if(pattern.test($("#pg_marks_obtainalerted").val()))
			{
				
				if( $("#pg_max_marksalerted").val()!="" ){
						
					if( parseInt($("#pg_marks_obtainalerted").val()) > parseInt($("#pg_max_marksalerted").val())){

						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				}				
				
				
				$("#pg_marks_obtainalert").hide();
			}
			else
			{
				$("#pg_marks_obtainalert").html("*Invalid No.");
				$("#pg_marks_obtainalert").show();
				$(this).val('');
			}
		});

		$("#pg_max_marksalerted").change(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			if(pattern.test($("#pg_max_marksalerted").val()))
			{
					if( parseInt($("#pg_marks_obtainalerted").val()) > parseInt($("#pg_max_marksalerted").val())){
							
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				$("#pg_max_marksalert").hide();
			}
			else
			{
				$("#pg_max_marksalert").html("*Invalid No.");
				$("#pg_max_marksalert").show();
				$(this).val('');							
			}
		});				

		$("#pg_pecentagealerted").change(function(){
			var pattern = new RegExp(/^[1-9][0-9]?$|^100$/);
			
			if(pattern.test($("#pg_pecentagealerted").val()))
			{
				$("#pg_pecentagealert").hide();
			}
			else
			{
				$("#pg_pecentagealert").html("*Invalid No.");
				$("#pg_pecentagealert").show();
				alert("Please Enter round off 2 digit number")
				$(this).val('');
			}
		});

		$("#pg_uploadalerted").change(function(){
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#pg_uploadalert").html("*Unsupported file");
				$("#pg_uploadalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#pg_uploadalert").html("*Less than 200KB");
				$("#pg_uploadalert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#pg_uploadalert").hide();
			}
		});


		$("#phd_marks_obtainalerted").change(function(){
	
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			if(pattern.test($("#phd_marks_obtainalerted").val()))
			{
				if( $("#phd_max_marksalerted").val()!="" ){
						
					if( parseInt($("#phd_marks_obtainalerted").val()) > parseInt($("#phd_max_marksalerted").val())){
							
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				}				
				
				$("#phd_marks_obtainalert").hide();
			}
			else
			{
				$("#phd_marks_obtainalert").html("*Invalid No.");
				$("#phd_marks_obtainalert").show();
				$(this).val('');
			}
		});

		$("#phd_max_marksalerted").change(function(){
			var pattern = new RegExp(/^(?:[1-9][0-9]{3}|[1-9][0-9]{2}|[1-9][0-9]|[1-9])$/);
			
			if(pattern.test($("#phd_max_marksalerted").val()))
			{
					if( parseInt($("#phd_marks_obtainalerted").val()) > parseInt($("#phd_max_marksalerted").val())){
							
						alert("Max marks should be greater than obtained marks ");
						$(this).val('');
					}
				$("#phd_max_marksalert").hide();
			}
			else
			{
				$("#phd_max_marksalert").html("*Invalid No.");
				$("#phd_max_marksalert").show();
				$(this).val('');				
			}
		});				

		$("#phd_pecentagealerted").change(function(){
			var pattern = new RegExp(/^[1-9][0-9]?$|^100$/);
			
			if(pattern.test($("#phd_pecentagealerted").val()))
			{
				$("#phd_pecentagealert").hide();
			}
			else
			{
				$("#phd_pecentagealert").html("*Invalid No.");
				$("#phd_pecentagealert").show();
				alert("Please Enter round off 2 digit number")
				$(this).val('');
			}
		});

		$("#phd_uploadalerted").change(function(){
			
			var val = $(this).val().toLowerCase();
			
			var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");
			
			if(!(regex.test(val))) 
			{
				alert("Upload Only JPG/JPEG/PNG Format File ")
				$("#phd_uploadalert").html("*Unsupported file");
				$("#phd_uploadalert").show();
				$(this).val('');
			} 
			
			if (this.files[0].size > 200000 || this.files[0].size > 200000)
			{
				$("#phd_uploadalert").html("*Less than 200KB");
				$("#phd_uploadalert").show();
				alert("File Size should be less than 200KB")
				$(this).val('');				
			}
			else
			{
				$("#phd_uploadalert").hide();
			}
		});		


		if( $("#hidenoncreamform").val() ==""){
							
			$(".creamyhidenow").hide();
		}

		if( $("#hidecasteform").val() ==""){
							
			$(".castahidenow").hide();
		}

		if( $("#hidehscform").val() ==""){
							
			$(".hscahidenow").hide();
		}

		if( $("#hidedipform").val() ==""){
							
			$(".dipahidenow").hide();
		}
		
		if( $("#hideugform").val() ==""){
							
			$(".ugahidenow").hide();
		}

		if( $("#hidepgform").val() ==""){
							
			$(".pgahidenow").hide();
		}		

		if( $("#hidephdform").val() ==""){
							
			$(".phdahidenow").hide();
		}		
	
		if( $("#hidespouseform").val() =="Unmarried" || $("#hidespouseform").val() =="Divorced" || $("#hidespouseform").val() =="judicially_Separated" ){
							
			$(".spoushidenow").hide();
		}		

		if( $("#hidenatotherform").val() =="INDIAN"){
							
			$(".natother").hide();
		}else{
			$(".natindian").hide();
		}	

		if( $("#hideesmform").val() =="No"){
							
			$(".Exmncady").hide();
		}		

		if( $("#hidegsform").val() =="No"){
							
			$(".gstyp").hide();
			$(".gstypother").hide();
			$(".gscady").hide();
		}	

		if( $("#hidegsothform").val() =="Other"){
							
			$(".gstyp").hide();
		}else{
			$(".gstypother").hide();
		}

		if( $("#hidejkform").val() =="No"){
							
			$(".jkcady").hide();
		}		
	
		if( $("#hidcasteform").val() =="UR"){
							
			$(".casteothercandy").hide();
			$(".casteur").hide();
		}		
	
		if( $("#hidcasteform").val() =="Other"){
							
			$(".castecandy").hide();
		}	
		
	
		if( $("#hidcasteform").val() =="SC" || $("#hidcasteform").val() =="ST" || $("#hidcasteform").val() =="NT" || $("#hidcasteform").val() =="OBC(Creamy layer)" || $("#hidcasteform").val() =="OBC(Non-Creamy layer)"){
							
			$(".casteothercandy").hide();
		}		
	
		if( $("#hi_hscform").val() =="Not_Appeared"){
							
			$(".hschide").hide();
		}	
	
		if( $("#hi_dipform").val() =="Not_Appeared"){
							
			$(".diplomahide").hide();
		}	
	
		if( $("#hi_ugform").val() =="Not_Appeared"){
							
			$(".ughide").hide();
		}	
	
		if( $("#hi_pgform").val() =="Not_Appeared"){
							
			$(".pghide").hide();
		}

		if( $("#hi_phdform").val() =="Not_Appeared"){
							
			$(".phdhide").hide();
		}
	
		if( $("#hi_ugform").val() =="Not_Appeared" && $("#hi_pgform").val() =="Not_Appeared" && $("#hi_phdform").val() =="Not_Appeared"){
							
			$(".blockhide").hide();
			$(".altblock").show();
		}		


		$('#newuserform').submit(function(e){
		
			e.preventDefault();
			
			$(".progress").show();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('0%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$(".progress-bar").width(percentageComplete+'%')
					$(".progress-bar").html('<div id="progress-status">'+percentageComplete+' %</div>')
				},
				resetForm: true
			});
			
			$("input[type='submit']", this)
			.val("Please Wait...")
			.attr('disabled', 'disabled');

			$.ajaxSetup({
				headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});						
		
			$.ajax({
				type:'post',
				url: '/userform/store',
				dataType:'json',
				data: new FormData($("#newuserform")[0]),
				success: function (data) 
					{		
						$.ajax({
							type:'get',
							url: '/newform',
							data: "uid=" + uid,			
							success: function (response) 
								{
									$('#notediv').html(response);
									Bind_select_input();

										window.scrollTo(0, 0);
								}
						});
					},
				processData: false,
				contentType: false,	
				cache:false,
			});
		});

		$(".del-btn").click(function(){

			$('.del-btn')
			.val("Please Wait...")
			.prop('disabled', true);	
			
			$.ajaxSetup({
				headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			var id = $(this).attr('data-id');
				
			$.ajax({
				type:'get',
				url: '/userform/destroy/' + id,
				data: {"id": id },
				success: function (data) 
				{ 
					$('.form_edit')
					.val("D")
					.prop('disabled', false);
				
					$.ajax({
						type:'get',
						url: '/newform',
						data: "uid=" + uid,			
						success: function (response) 
						{
							$('#notediv').html(response);
							Bind_select_input();
							window.scrollTo(0, 0);
						}
					});
				}
			});
		});

		$('.form_edit').click(function(){	
		
			$('.form_edit')
			.val("Please Wait...")
			.prop('disabled', true);				
			
			var formid = $(this).attr('data-id');  
			
			$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/userform/formedit',
					data:"formid=" + formid,			
					success: function (response) 
					{		
						$('#notediv').html(response);
						Bind_select_input();
						recheckall();
						
						$('.form_edit')
						.val("Edit")
						.prop('disabled', false);						
					}
				}); 
		});
			
		function recheckall() { 
		
			if( $('#marital_status_id').val()==="Married" || $('#marital_status_id').val()==="Widow" || $('#marital_status_id').val()==="Widower")
			{
				$("#marital_status_hide").show();
				$(".spouse_name").prop('required',true);
			}

			if( $('#nationality_id').val()==="Other"){
				$("#nationality_hide").show();
				$(".nationality_other").prop('required',true);
			}

			if( $('#ex_servicemen_id').val()==="Yes"){
				$(".ex_servicemen_hide").show();
				$(".ex_servicemen").prop('required',true);
			}

			if( $('#govt_servant_id').val()==="Yes"){
				
				$(".govt_servant_hide").show();
				$(".govt_servant_val").prop('required',true);
			}

			if( $('#gs_type_id').val()==="Other"){
				$(".gs_type_hide").show();
				$(".gs_type_val").prop('required',true);
			}

			if( $('#jk_domicile_id').val()==="Yes"){
				$(".jk_domicile_hide").show();
				$(".jk_domicile_val").prop('required',true);
			}

			if( $('#caste_id').val()==="SC" || $('#caste_id').val()==="ST" || $('#caste_id').val()==="NT" || $('#caste_id').val()==="OBC(Creamy layer)" || $('#caste_id').val()==="OBC(Non-Creamy layer)"){
				$(".caste_hide").show();
				$(".caste_val").prop('required',true);
			}

			if( $('#caste_id').val()==="Other"){
				$(".caste_other_hide").show();
				$(".caste_other_val").prop('required',true);
				$(".caste_hide").show();
				$(".caste_val").prop('required',true);				
			}			

			if( $('#caste_id').val()==="SC" || $('#caste_id').val()==="ST" || $('#caste_id').val()==="NT" || $('#caste_id').val()==="OBC(Creamy layer)" || $('#caste_id').val()==="Other"){
				$(".upload_caste_hide").show();
			}

			if( $('#caste_id').val()==="OBC(Non-Creamy layer)"){
				$(".upload_caste_hide").show();
				$(".upload_noncreamy_layer_hide").show();
			}			


			if( $('#xii_status_id').val()==="Not_Appeared"){
				$(".xii_status_hide").hide();
				$(".xii_status_hidep").hide();
				$('.xii_status_hide').val('');
				$('.xii_status_hidep').val('');
				$(".xii_status_hide").prop('required',false);
				$(".xii_status_hidep").prop('required',false);
			}
			
			if( $('#xii_status_id').val()==="Pursuing"){
				$(".xii_status_hide").show();
				$(".xii_status_hidep").hide();
				$('.xii_status_hidep').val('');	
				$(".xii_status_hidep").prop('required',false);
			}

			
			if( $('#diploma_status_id').val()==="Not_Appeared"){
				$(".diploma_status_hide").hide();
				$(".diploma_status_hidep").hide();
				$('.diploma_status_hide').val('');
				$('.diploma_status_hidep').val('');	
				$(".diploma_status_hide").prop('required',false);
				$(".diploma_status_hidep").prop('required',false);				
			}
			
			if( $('#diploma_status_id').val()==="Pursuing"){
				$(".diploma_status_hide").show();
				$(".diploma_status_hidep").hide();
				$('.diploma_status_hidep').val('');	
				$(".diploma_status_hidep").prop('required',false);
			}

			if( $('#ug_status_id').val()==="Not_Appeared"){
				$(".ug_status_hide").hide();
				$(".ug_status_hidep").hide();
				$('.ug_status_hide').val('');
				$('.ug_status_hidep').val('');	
				$(".ug_status_hide").prop('required',false);
				$(".ug_status_hidep").prop('required',false);				
			}
			
			if( $('#ug_status_id').val()==="Pursuing"){
				$(".ug_status_hide").show();
				$(".ug_status_hidep").hide();
				$('.ug_status_hidep').val('');
				$(".ug_status_hidep").prop('required',false);
			}

			if( $('#pg_status_id').val()==="Not_Appeared"){
				$(".pg_status_hide").hide();
				$(".pg_status_hidep").hide();
				$('.pg_status_hide').val('');
				$('.pg_status_hidep').val('');
				$(".pg_status_hide").prop('required',false);
				$(".pg_status_hidep").prop('required',false);				
			}
			
			if( $('#pg_status_id').val()==="Pursuing"){
				$(".pg_status_hide").show();
				$(".pg_status_hidep").hide();
				$('.pg_status_hidep').val('');
				$(".pg_status_hidep").prop('required',false);
			}

			if( $('#phd_status_id').val()==="Not_Appeared"){
				$(".phd_status_hide").hide();
				$(".phd_status_hidep").hide();
				$('.phd_status_hide').val('');
				$('.phd_status_hidep').val('');
				$(".phd_status_hide").prop('required',false);
				$(".phd_status_hidep").prop('required',false);				
			}
			
			if( $('#phd_status_id').val()==="Pursuing"){
				$(".phd_status_hide").show();
				$(".phd_status_hidep").hide();
				$('.phd_status_hidep').val('');
				$(".phd_status_hidep").prop('required',false);
			}
			
			if( $("#hi_ugform").val() =="Not_Appeared" && $("#hi_pgform").val() =="Not_Appeared" && $("#hi_phdform").val() =="Not_Appeared"){
								
				$(".blockhide").hide();
				$(".altblock").show();
			}			
			
			
			
			
			
			
			
	
		}
	

	
	
	
	
	
	
	
	
	


		
	}
	

		
		



		
	
	});
