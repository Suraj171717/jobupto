


$(document).ready(function () 
	{ 
			Bind_form_submit();
			Bindformdel();
			Bindformdelcrt();
			Bindcheckbox();
			Bindalldelform();
			Bindjobedit();
			
			Bindaddloc();
			Bindaddcat();
			Bindaddpos();
			Bindaddqual();
			Bindaddexp();
			
			Bindeditloc();
			Bindeditcat();
			Bindeditpos();
			Bindeditqual();
			Bindeditexp();			
			
			Bindlocdel();
			Bindcatdel();
			Bindposdel();
			Bindqualdel();
			Bindexpdel();
			
			
			$('.gif').hide();
			var vp=1; //alert(vp)
			var Finalmr=[];
			var loadgif=[];
			var search =[];
			var editjobadvt =[];
			
			var user_Location = [];
			var user_Category = [];
			var user_Post = [];
			var user_Qualification = [];
			
			var user_Company = [];
			var user_Package = [];
			var user_Lastdate = [];	
			var user_finaldate = [];	

			var error_Location = false;
			var error_Category = false;
			var error_Post = false;
			var error_Qualification = false;
			var error_Experience = false;
			
			var error_Company = false;
			var error_Vacancies = false;
			var error_Package = false;
			var error_final_date = false;
			var error_Last_Date = false;
			var error_Advertisement = false;
			var error_Apply = false;				
	

			
		window.onbeforeunload = function () {
		  window.scrollTo(0, 0);
		}

		
 		$('#admin_search').keyup(function(){	
			window.scrollTo(0, 0);
			search = $('#admin_search').val();
			loadgif="2";
			vp=1;
			
			
			if(search!="")
			{		
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin',
					data:"search=" + search,			
					success: function (response) 
						{		
							//console.log(response);
							$('#jobdiv').html(response); 
							Bindformdel();
							Bindcheckbox();
							Bindjobedit();
						}
				});
			}
			else
			{
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin/searchempty',
					data:"search=" + search,			
					success: function (response) 
						{		
							//console.log(response);
							$('#jobdiv').html(response); 
							Bindformdel();
							Bindcheckbox();
							Bindjobedit();
						}
				});				
			}	
		});	

		
		function Bindcheckbox(){	
			$(".group-checkable").change(function(){
				$('.checkboxes').prop('checked', $(this).prop('checked'));
			});		
		}

		
		$('.addjobtoggle').click(function(){
			$('.menu-container').toggleClass("change");
			$('.sidemenu').toggleClass("changedsidemenu");			
		});

 		$('.addcat').click(function(){	
			
			$('.disaddjob')
			.val("Please Wait...")
			.prop('disabled', true);		
		
			loadgif=1;
			$('.admincreateform').hide();
			editjobadvt = 11;
			
			$.ajax({
				type: 'get',
				dataType: 'html',
				url: '/admin/addcat',
				data:"search=" + search,			
				success: function (response) 
					{		
						// console.log(response);
						$('#jobdiv').html(response);
						Bindaddloc();
						Bindaddcat();
						Bindaddpos();
						Bindaddqual();
						Bindaddexp();
						
						Bindeditloc();
						Bindeditcat();
						Bindeditpos();
						Bindeditqual();
						Bindeditexp();
						
						Bindlocdel();
						Bindcatdel();
						Bindposdel();
						Bindqualdel();
						Bindexpdel();
						
						$('.disaddjob')
						.val("Add New Job")
						.prop('disabled', false);
						
					}
			}); 
		});		
	
 		$('.addjob').click(function(){	
		
			$('.disaddjob')
			.val("Please Wait...")
			.prop('disabled', true);		
		
			loadgif=1;
			$('.admincreateform').hide();
			editjobadvt = 11;
			
			$.ajax({
				type: 'get',
				dataType: 'html',
				url: '/admin/addjob',
				data:"search=" + search,			
				success: function (response) 
					{		
						//console.log(response);
						$('#jobdiv').html(response);
						Bind_form_submit();
						Bindformdelcrt();
						Bindjobedit();

						$('.disaddjob')
						.val("Add New Job")
						.prop('disabled', false);
						
					}
			}); 
		});		

		
		function Bindjobedit(){
			
			$('.Jobs').on('click', '.jobedit', function(e)
			{
				e.preventDefault();			
				
				$('.jobedit')
				.val("Wait")
				.prop('disabled', true);
				
				var jobid = $(this).attr('data-id');  
				loadgif=1;
				$('.admincreateform').hide();
				editjobadvt = 1;
				
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin/jobedit',
					data:"jobid=" + jobid,			
					success: function (response) 
						{		
							//console.log(response);
							$('#jobdiv').html(response);
							Bind_form_submit();
							Bindformdelcrt();
							Bindjobedit();	

							$('.jobedit')
							.val("Edit")
							.prop('disabled', false);
						}
				}); 
			});			
			
			
			
			$('.jobedit').click(function()
			{	
			
				$('.jobedit')
				.val("Wait")
				.prop('disabled', true);			
			
				var jobid = $(this).attr('data-id');  
				loadgif=1;
				$('.admincreateform').hide();
				editjobadvt = 1;
				
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin/jobedit',
					data:"jobid=" + jobid,			
					success: function (response) 
						{		
							//console.log(response);
							$('#jobdiv').html(response);
							Bind_form_submit();
							Bindformdelcrt();
							Bindjobedit();

							$('.jobedit')
							.val("Edit")
							.prop('disabled', false);							
							
						}
				}); 
			});
		}
		
		function fetchusertomail(){
			
				$.ajax({
					type: 'post',
					dataType: 'html',
					url: '/admin/fetchusertomail',
					data: "loc=" + user_Location + "& cat=" + user_Category + "& post=" + user_Post + "& qual=" + user_Qualification + "& company=" + user_Company + "& package=" + user_Package + "& lastdate=" + user_Lastdate,			
					success: function (response) 
						{		
							console.log(response);
							
						}
				});
		}
		
		function gbs(){
				if(loadgif=="1")
					{
					$('.gif').hide();
					}
				else
					{
						vp=vp+1;
						$('.gif').show();

					}
			}

			
		$(window).scroll(fetchJobs);
		function fetchJobs(){
				clearTimeout( $.data(this, "scrollCheck"));
				$.data(this, "scrollCheck", setTimeout(function()
				{
					var scroll_position_for_jobs_load = $(window).height() + $(window).scrollTop() + 100;
					if(scroll_position_for_jobs_load >= $(document).height())
						{
							//alert(loadgif)
							gbs();
							Finalmr=2;
						
							$.ajax({
								type: 'get',
								url: '/admin?page=' + vp,
								data: "search=" + search + "& myvr=" + Finalmr,			
								success: function (data) 
									{
										if(data.Jobs=="")
											{
												loadgif=1;
												$('.gif').hide();
											}
										else
											{
												setTimeout(function(){
												$('.gif').hide();
												$('.Jobs').append(data.Jobs);},400);
											}
									}
							});				
						}
				}, 300))
			}	

			
		$('.menu-container').on('click', function (e) {
			$('.sidemenu').toggleClass("changedsidemenu");
		});	

		
		function Bind_form_submit(){
			
			
				$("#Location-alert").hide();
				$("#Category-alert").hide();		
				$("#Post-alert").hide();
				$("#Qualification-alert").hide();
				$("#Experience-alert").hide();
				
				$("#Company-alert").hide();
				$("#Vacancies-alert").hide();
				$("#Package-alert").hide();
				$("#Last_Date-alert").hide();
				$("#final_date-alert").hide();
				$("#Advertisement-alert").hide();
				$("#Apply-alert").hide();
				

		  
				$("#Location").focusout(function(){
					check_Location();
				});

				$("#Category").focusout(function(){
					check_Category();
				});				

				$("#Post").focusout(function(){
					check_Post();
				});

				$("#Qualification").focusout(function(){
					check_Qualification();
				});				

				$("#Experience").focusout(function(){
					check_Experience();
				});

				
				
				$("#Company").focusout(function(){
					check_Company();
				});				

				$("#Vacancies").focusout(function(){
					check_Vacancies();
				});

				$("#Package").focusout(function(){
					check_Package();
				});				

				$("#Last_Date").focusout(function(){
					check_Last_Date();
				});

				$("#finaldate").focusout(function(){
					check_final_date();
				});				

				$("#Advertisement").focusout(function(){
					check_Advertisement();
				});				

				$("#Apply").focusout(function(){
					check_Apply();
				});
	
				
				function check_Location(){
					user_Location = $("#Location").val();
					// console.log(user_Location);
					if(user_Location == "")
					{
						$("#Location-alert").html("*Not Selected");
						$("#Location-alert").show();
						error_Location = true;					
					}
					else
					{
					$("#Location-alert").hide();
					}
				}
		
				function check_Category(){
					user_Category = $("#Category").val();
					// console.log(user_Category);
					if(user_Category == "")
					{
						$("#Category-alert").html("*Not Selected");
						$("#Category-alert").show();
						error_Category = true;					
					}
					else
					{
					$("#Category-alert").hide();
					}
				}

				function check_Post(){
					user_Post = $("#Post").val();
					// console.log(user_Post);
					if(user_Post == "")
					{
						$("#Post-alert").html("*Not Selected");
						$("#Post-alert").show();
						error_Post = true;					
					}
					else
					{
					$("#Post-alert").hide();
					}
				}
		
				function check_Qualification(){
					user_Qualification = $("#Qualification").val();
					// console.log(user_Qualification);
					if(user_Qualification == "")
					{
						$("#Qualification-alert").html("*Not Selected");
						$("#Qualification-alert").show();
						error_Qualification = true;					
					}
					else
					{
					$("#Qualification-alert").hide();
					}
				}

				function check_Experience(){
					var BL = $("#Experience").val();
					
					if(BL == "")
					{
						$("#Experience-alert").html("*Not Selected");
						$("#Experience-alert").show();
						error_Experience = true;					
					}
					else
					{
					$("#Experience-alert").hide();
					}
				}
		

				function check_Company(){
					user_Company = $("#Company").val();
					
					if(user_Company == "")
					{
						$("#Company-alert").html("*Invalid Entry");
						$("#Company-alert").show();
						error_Company = true;					
					}
					else
					{
					$("#Company-alert").hide();
					}
				}

				function check_Vacancies(){
					var BL = $("#Vacancies").val();
					
					if(BL == "")
					{
						$("#Vacancies-alert").html("*Invalid Entry");
						$("#Vacancies-alert").show();
						error_Vacancies = true;					
					}
					else
					{
					$("#Vacancies-alert").hide();
					}
				}
		
				function check_Package(){ 
					user_Package = $("#Package").val();
					
					if(user_Package == "")
					{
						$("#Package-alert").html("*Invalid Entry");
						$("#Package-alert").show();
						error_Package = true;					
					}
					else
					{
					$("#Package-alert").hide();
					}
				}

				function check_Last_Date(){
				
					var pattern = new RegExp(/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/);
					user_Lastdate = $("#Last_Date").val();
					
					if(pattern.test($("#Last_Date").val()))
					{
					$("#Last_Date-alert").hide();
					}
					else
					{
						$("#Last_Date-alert").html("*Invalid Date");
						$("#Last_Date-alert").show();
						error_Last_Date = true;								
					}
				}

				function check_final_date(){
				
					var pattern = new RegExp(/^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/);
					
					user_finaldate = $("#finaldate").val();
					
					if(pattern.test($("#finaldate").val()))
					{
					$("#final_date-alert").hide();
					}
					else
					{
						$("#final_date-alert").html("*Invalid Date");
						$("#final_date-alert").show();
						error_final_date = true;								
					}
				}				
				
				function check_Advertisement(){
					var pattern = new RegExp(/^.*\.(jpg|jpeg|png|pdf|gif)$/);
					
					if(pattern.test($("#Advertisement").val()))
					{
					$("#Advertisement-alert").hide(); 
					}
					else
					{
						$("#Advertisement-alert").html("*Select File");
						$("#Advertisement-alert").show();
						error_Advertisement = true;	
					}
				}

				function check_Apply(){
					var BL = $("#Apply").val();
					
					if(BL == "")
					{
						$("#Apply-alert").html("*Invalid Entry");
						$("#Apply-alert").show();
						error_Apply = true;					
					}
					else
					{
					$("#Apply-alert").hide();
					}
				}
		

				$('#jobadd').submit(function(e){

					e.preventDefault();

					error_Location = false;
					error_Category = false;
					error_Post = false;
					error_Qualification = false;
					error_Experience = false;

					error_Company = false;
					error_Vacancies = false;
					error_Package = false;
					error_Last_Date = false;
					error_final_date = false;
					error_Advertisement = false;
					error_Apply = false;

					check_Location();
					check_Category();
					check_Post();
					check_Qualification();
					check_Experience();

					check_Company();
					check_Vacancies();
					check_Package();	
					check_Last_Date();
					check_final_date();
					check_Advertisement();
					check_Apply();
	
					if(editjobadvt == 1){
						error_Advertisement = false;
					}
					
					if(error_Location == false && error_Category == false && error_Post == false && error_Qualification == false && error_Experience == false
					&& error_Company == false && error_Vacancies == false && error_Package == false && error_Advertisement == false && error_Last_Date == false && error_final_date == false  && error_Apply == false)
					{
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
								url: '/admin/store',
								dataType:'json',
								data:new FormData($("#jobadd")[0]),
								success: function (data) 
									{		
										$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addjob',
											data:"search=" + search,			
											success: function (response) 
												{		
													$('#jobdiv').html(response);
													Bind_form_submit();
													Bindformdelcrt();
													Bindjobedit();
													editjobadvt = 11;
													fetchusertomail();													
												}
										}); 
									},
								processData: false,
								contentType: false,	
								cache:false,
							});
					}	
					else
					{		alert("ghanta");
							return false;
					}
				});
		}
		
		function Bindformdel(){
			
			$('.Jobs').on('click', '.jobdel', function(e) {
				
				e.preventDefault();
				window.scrollTo(0, 0);
				loadgif="2";
				vp=1;				
				
				$('.jobdel')
				.val("Wait")
				.prop('disabled', true);
				
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				var id = $(this).attr('data-id');
		
				$.ajax({
						type:'get',
						url: '/admin/destroy/' +id,
						data: {"id": id },
						success: function (data) 
							{ 
								if(search == "")
								{
									$.ajax({
										type: 'get',
										dataType: 'html',
										url: '/admin/searchempty',
										data:"search=" + search,			
										success: function (response) 
											{		
												//console.log(response);
												$('#jobdiv').html(response); 
												Bindformdel();
												Bindcheckbox();
												Bindjobedit();
												
												$('.jobdel')
												.val("Delete")
												.prop('disabled', false);
											}
									});
								}
								else
								{
									$.ajax({
										type: 'get',
										dataType: 'html',
										url: '/admin',
										data:"search=" + search,			
										success: function (response) 
											{		
												//console.log(response);
												$('#jobdiv').html(response); 
												Bindformdel();
												Bindcheckbox();
												Bindjobedit();
												
												$('.jobdel')
												.val("Delete")
												.prop('disabled', false);
											}
									});
								}
							}
					});
			});		
		}
	
		function Bindformdelcrt(){
			$(".jobdelcrt").click(function(){
				
				$('.jobdelcrt')
				.val("Wait")
				.prop('disabled', true);
				
				    $.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});

				var id = $(this).attr('data-id');
			
				
				$.ajax({
						type:'get',
						url: '/admin/destroy/' +id,
						data: {"id": id },
						success: function (data) 
							{ 
								$.ajax({
									type: 'get',
									dataType: 'html',
									url: '/admin/addjob',
									data:"search=" + search,			
									success: function (response) 
										{		
											//console.log(response);
											$('#jobdiv').html(response);
											Bind_form_submit();
											Bindformdelcrt();
											Bindjobedit();
											editjobadvt = 11;

											$('.jobdelcrt')
											.val("Delete")
											.prop('disabled', false);											
										}
								});
							}
					});
			});		
		}		
		
		function Bindalldelform(){
			
			$('#deljobform').click(function(e){

				e.preventDefault();	

				window.scrollTo(0, 0);
				loadgif="2";
				vp=1;				
		
			    $('#deljobform')
				.val("Please Wait...")
				.prop('disabled', true);
						
				var id = [];
				
				$('.checkboxes:checked').each(function(){
					id.push($(this).attr('data-id'));
				});
				
				var jid = id.join(","); 
				// console.log(id);
				// console.log(jid);
			
				if(id.length > 0)
				{
                    $.ajax({
                        url: '/admin/deleteAll',
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+jid,
						success:function(data)
						{
							if(search == "")
							{
								$.ajax({
									type: 'get',
									dataType: 'html',
									url: '/admin/searchempty',
									data:"search=" + search,			
									success: function (response) 
										{		
											//console.log(response);
											$('#jobdiv').html(response); 
											Bindformdel();
											Bindcheckbox();
											Bindjobedit();

											$('#deljobform')
											.val("Delete All Checked")
											.prop('disabled', false);
										}
								});
							}
							else
							{
								$.ajax({
									type: 'get',
									dataType: 'html',
									url: '/admin',
									data:"search=" + search,			
									success: function (response) 
										{		
											//console.log(response);
											$('#jobdiv').html(response); 
											Bindformdel();
											Bindcheckbox();
											Bindjobedit();

											$('#deljobform')
											.val("Delete All Checked")
											.prop('disabled', false);					
										}
								});
							}
						}
					});
				}
				else
				{
					alert("Please select atleast one checkbox");
					
					$('#deljobform')
					.val("Delete All Checked")
					.prop('disabled', false);					
				}
			});
	
		}


		
/* 	ADD--> location,categories,Qualification,Post,Experience */
		
		function Bindaddloc(){
			
				$('#locadd').submit(function(e){
					
					e.preventDefault();
						
						$("input[type='submit']", this)
							.val("Wait...")
							.attr('disabled', 'disabled');
							
						var token = $("#token").val();
						
						
						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});						
						

						$.ajax({
								type:'post',
								url: '/admin/storeloc',
								dataType:'json',
								data:new FormData($("#locadd")[0]),
								success: function (data) 
									{		
										$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();													
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
												}
										});
									},
								processData: false,
								contentType: false,	
								cache:false,
							});

				});
		}		
		
		function Bindaddcat(){
			
				$('#catadd').submit(function(e){
					
					e.preventDefault();
						
						$("input[type='submit']", this)
							.val("Wait...")
							.attr('disabled', 'disabled');
							
						var token = $("#token").val();
						
						
						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});						
						

						$.ajax({
								type:'post',
								url: '/admin/storecat',
								dataType:'json',
								data:new FormData($("#catadd")[0]),
								success: function (data) 
									{		
										$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
												}
										});
									},
								processData: false,
								contentType: false,	
								cache:false,
							});

				});
		}		
				
		function Bindaddpos(){
			
				$('#posadd').submit(function(e){
					
					e.preventDefault();
						
						$("input[type='submit']", this)
							.val("Wait...")
							.attr('disabled', 'disabled');
							
						var token = $("#token").val();
						
						
						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});						
						

						$.ajax({
								type:'post',
								url: '/admin/storepos',
								dataType:'json',
								data:new FormData($("#posadd")[0]),
								success: function (data) 
									{		
										$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
												}
										});
									},
								processData: false,
								contentType: false,	
								cache:false,
							});

				});
		}		

		function Bindaddqual(){
			
				$('#qualadd').submit(function(e){
					
					e.preventDefault();
						
						$("input[type='submit']", this)
							.val("Wait...")
							.attr('disabled', 'disabled');
							
						var token = $("#token").val();
						
						
						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});						
						

						$.ajax({
								type:'post',
								url: '/admin/storequal',
								dataType:'json',
								data:new FormData($("#qualadd")[0]),
								success: function (data) 
									{		
										$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
												}
										});
									},
								processData: false,
								contentType: false,	
								cache:false,
							});

				});
		}		

		function Bindaddexp(){
			
				$('#expadd').submit(function(e){
					
					e.preventDefault();
						
						$("input[type='submit']", this)
							.val("Wait...")
							.attr('disabled', 'disabled');
							
						var token = $("#token").val();
						
						
						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});						
						

						$.ajax({
								type:'post',
								url: '/admin/storeexp',
								dataType:'json',
								data:new FormData($("#expadd")[0]),
								success: function (data) 
									{		
										$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
												}
										});
									},
								processData: false,
								contentType: false,	
								cache:false,
							});

				});
		}		
				
				
/* 	EDIT--> location,categories,Qualification,Post,Experience */

		function Bindeditloc(){
			
			$('.locedit').click(function()
			{	
			
				$('.locedit')
				.val("Wait")
				.prop('disabled', true);			
			
				var locid = $(this).attr('data-id');  
				
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin/locedit',
					data:"locid=" + locid,			
					success: function (response) 
						{		
							//console.log(response);
							$('.locaddnew').html(response);
							Bindaddloc();

							$('.locedit')
							.val("Edit")
							.prop('disabled', false);							
						}
				}); 
			});
		}

		function Bindeditcat(){
			
			$('.catedit').click(function()
			{	
			
				$('.catedit')
				.val("Wait")
				.prop('disabled', true);			
			
				var catid = $(this).attr('data-id');  
				
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin/catedit',
					data:"catid=" + catid,			
					success: function (response) 
						{		
							//console.log(response);
							$('.cataddnew').html(response);
							Bindaddcat();

							$('.catedit')
							.val("Edit")
							.prop('disabled', false);							
						}
				}); 
			});
		}
		
		function Bindeditpos(){
			
			$('.posedit').click(function()
			{	
			
				$('.posedit')
				.val("Wait")
				.prop('disabled', true);			
			
				var posid = $(this).attr('data-id');  
				
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin/posedit',
					data:"posid=" + posid,			
					success: function (response) 
						{		
							//console.log(response);
							$('.posaddnew').html(response);
							Bindaddpos();

							$('.posedit')
							.val("Edit")
							.prop('disabled', false);							
						}
				}); 
			});
		}

		function Bindeditqual(){
			
			$('.qualedit').click(function()
			{	
			
				$('.qualedit')
				.val("Wait")
				.prop('disabled', true);			
			
				var qualid = $(this).attr('data-id');  
				
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin/qualedit',
					data:"qualid=" + qualid,			
					success: function (response) 
						{		
							//console.log(response);
							$('.qualaddnew').html(response);
							Bindaddqual();

							$('.qualedit')
							.val("Edit")
							.prop('disabled', false);							
						}
				}); 
			});
		}

		function Bindeditexp(){
			
			$('.expedit').click(function()
			{	
			
				$('.expedit')
				.val("Wait")
				.prop('disabled', true);			
			
				var expid = $(this).attr('data-id');  
				
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/admin/expedit',
					data:"expid=" + expid,			
					success: function (response) 
						{		
							//console.log(response);
							$('.expaddnew').html(response);
							Bindaddexp();

							$('.expedit')
							.val("Edit")
							.prop('disabled', false);							
						}
				}); 
			});
		}		

		
/* 	DELETE --> location,categories,Qualification,Post,Experience */

		function Bindlocdel(){
			
			$('.locdel').on('click', function(e) {
				
				e.preventDefault();
				
				if(confirm("Are You Sure to DELETE it ?"))
				{	
					$('.locdel')
					.val("Wait")
					.prop('disabled', true);
					
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					var id = $(this).attr('data-id');
				
					// alert(id);

					$.ajax({
						type:'get',
						url: '/admin/destroy/loc/' +id,
						data: {"id": id },
						success: function (data) 
							{ 
									$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();	
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
													
													$('.locdel')
													.val("Del")
													.prop('disabled', false);
												}
										});
							}
					});
				}			
				else
				{
					return false;
				}
				
			});		
		}

		function Bindcatdel(){
			
			$('.catdel').on('click', function(e) {
				
				e.preventDefault();
				
				if(confirm("Are You Sure to DELETE it ?"))
				{	
					$('.catdel')
					.val("Wait")
					.prop('disabled', true);
					
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					var id = $(this).attr('data-id');
				
					// alert(id);

					$.ajax({
						type:'get',
						url: '/admin/destroy/cat/' +id,
						data: {"id": id },
						success: function (data) 
							{ 
									$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();	
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
													
													$('.catdel')
													.val("Del")
													.prop('disabled', false);
												}
										});
							}
					});
				}			
				else
				{
					return false;
				}
				
			});		
		}
	
		function Bindposdel(){
			
			$('.posdel').on('click', function(e) {
				
				e.preventDefault();
				
				if(confirm("Are You Sure to DELETE it ?"))
				{	
					$('.posdel')
					.val("Wait")
					.prop('disabled', true);
					
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					var id = $(this).attr('data-id');
				
					// alert(id);

					$.ajax({
						type:'get',
						url: '/admin/destroy/pos/' +id,
						data: {"id": id },
						success: function (data) 
							{ 
									$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();	
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
													
													$('.posdel')
													.val("Del")
													.prop('disabled', false);
												}
										});
							}
					});
				}			
				else
				{
					return false;
				}
				
			});		
		}
	
		function Bindqualdel(){
			
			$('.qualdel').on('click', function(e) {
				
				e.preventDefault();
				
				if(confirm("Are You Sure to DELETE it ?"))
				{	
					$('.qualdel')
					.val("Wait")
					.prop('disabled', true);
					
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					var id = $(this).attr('data-id');
				
					// alert(id);

					$.ajax({
						type:'get',
						url: '/admin/destroy/qual/' +id,
						data: {"id": id },
						success: function (data) 
							{ 
									$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();	
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
													
													$('.qualdel')
													.val("Del")
													.prop('disabled', false);
												}
										});
							}
					});
				}			
				else
				{
					return false;
				}
				
			});		
		}
	
		function Bindexpdel(){
			
			$('.expdel').on('click', function(e) {
				
				e.preventDefault();
				
				if(confirm("Are You Sure to DELETE it ?"))
				{	
					$('.expdel')
					.val("Wait")
					.prop('disabled', true);
					
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					var id = $(this).attr('data-id');
				
					// alert(id);

					$.ajax({
						type:'get',
						url: '/admin/destroy/exp/' +id,
						data: {"id": id },
						success: function (data) 
							{ 
									$.ajax({
											type: 'get',
											dataType: 'html',
											url: '/admin/addcat',
											data:"search=" + search,			
											success: function (response) 
												{		
													// console.log(response);
													$('#jobdiv').html(response);
													Bindaddloc();
													Bindaddcat();
													Bindaddpos();
													Bindaddqual();
													Bindaddexp();											
													
													Bindeditloc();
													Bindeditcat();
													Bindeditpos();
													Bindeditqual();
													Bindeditexp();	
							
													Bindlocdel();
													Bindcatdel();
													Bindposdel();
													Bindqualdel();
													Bindexpdel();
													
													$('.expdel')
													.val("Del")
													.prop('disabled', false);
												}
										});
							}
					});
				}			
				else
				{
					return false;
				}
				
			});		
		}
		
	


	
	
	});

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	