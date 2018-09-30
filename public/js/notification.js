


$(document).ready(function () 
	{	
			Bindaccorval();
			Bindaccorheight();
			Bindaccorclick();
			Bind_form_submit();
			Bindformdel();
			Binduserrequest();
			Bindinb();
			
			
			var vp=1;
			var loadgif=[];
			var myvr=[];
			var search=[];

	
			var uid = $("#user_id").val();	
			var nid = $("#user_nid").val();	
			var Filoc=[];
			var Ficat=[];
			var Fipost=[];
			var Fiqual=[];
			
			function reload() { 
				window.location.href = 'http://www.jobupto.com/notification';
			}			

			
			function Bindinb(){
				$('.inb-btn').click(function()
				{			
					window.location.href = 'http://www.jobupto.com/notification/inbox';
				});
			}
		
			$('.menu-container').on('click', function (e) {
				$('.sidemenu').toggleClass("changedsidemenu");
			});	
		
			
			function Bindaccorval(){
					var aloc=[];
					var aloca=[];
					var acat=[];
					var acata=[];
					var apost=[];
					var aposta=[];
					var aqual=[];
					var aquala=[];
				
				$('.class-loc').each(function(){
					if($(this).is(":checked"))
					{
						aloc.push($(this).val());
					}	
				});				
				
				if (aloc==""){
								var element = $('.class-loc');
								for (var i = 0; i < element.length; i++) 
									{
										aloca.push($(element).eq(i).val());
									}				
							}
					Filoca = aloca.toString();
					Filoc = aloc.toString();
					Filoc = Filoc + Filoca;
					// console.log(Filoc);			

				$('.class-cat').each(function(){
					if($(this).is(":checked"))
					{
						acat.push($(this).val());
					}
				});
				
				if (acat==""){
								var element = $('.class-cat');
								for (var i = 0; i < element.length; i++) 
									{
										acata.push($(element).eq(i).val());
									}				
							}
					Ficata = acata.toString();
					Ficat = acat.toString();
					Ficat = Ficat + Ficata;
					// console.log(Ficat);
		
		
				$('.class-post').each(function(){
					if($(this).is(":checked"))
					{
						apost.push($(this).val());
					}
				});
				
				if (apost==""){
								var element = $('.class-post');
								for (var i = 0; i < element.length; i++) 
								{
									aposta.push($(element).eq(i).val());
								}				
							}
					Fiposta = aposta.toString();
					Fipost = apost.toString();
					Fipost = Fipost + Fiposta;
					// console.log(Fipost);


				$('.class-qual').each(function(){
					if($(this).is(":checked"))
					{
						aqual.push($(this).val());
					}
				});	   
						   
				if (aqual==""){
								var element = $('.class-qual');
								for (var i = 0; i < element.length; i++) 
								{
									aquala.push($(element).eq(i).val());
								}				
							}
					Fiquala = aquala.toString();
					Fiqual = aqual.toString();
					Fiqual = Fiqual + Fiquala;
					// console.log(Fiqual);
			}

		if ( uid !="" ){
			$.ajax({
					type:'get',
					url: '/notificationform',
					data: "uid=" + uid,			
					success: function (response) 
						{
							$('#notediv').html(response);
							Bindaccorval();
							Bindaccorheight();
							Bindaccorclick();
							Bind_form_submit();
							Bindformdel();
							Binduserrequest();
							Bindinb();
							$("#hide_success").hide();
						}
				});	
			
		}
		
		if ( nid !="" ){
						$.ajax({
							type: 'get',
							url: '/notification/inbox',
							data: "nid=" + nid,			
							success: function (response) 
							{	
								$('#notedivty').html(response);
								$("#hide_success").hide();
								$('.gif').hide();
							}
						});	
		}


 		$('#search').keyup(function()
		{	
			window.scrollTo(0, 0);
			loadgif="2";
			vp=1;
			search = $('#search').val();
			// console.log(search);
			// console.log(nid);
			
			if ( search !="" ){
				$.ajax({
					type: 'get',
					dataType: 'html',
					url: '/notification/inbox',
					data: "search=" + search + "& nid=" + nid,			
					success: function (response) 
						{		
							//console.log(response);
							$('#updateDiv').html(response); 
							$('#updateDave').html(response);
							$('.gif').hide();
						}
				});	
			}
			else
			{
				$.ajax({
					type: 'get',
					url: '/notification/inbox',
					data: "nid=" + nid,			
					success: function (response) 
					{	
						$('#notedivty').html(response);
						$("#hide_success").hide();
						$('.gif').hide();
					}
				});				
			}			
		});
 

		function gbs()
			{
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
			function fetchJobs()
			{
				clearTimeout( $.data(this, "scrollCheck"));
				$.data(this, "scrollCheck", setTimeout(function()
				{
					var scroll_position_for_jobs_load = $(window).height() + $(window).scrollTop() + 150;
					if(scroll_position_for_jobs_load >= $(document).height())
						{
							// alert(loadgif)
							gbs();
							myvr=2;
						
							$.ajax({
								type: 'get',
								url: '/notification/inbox/?page=' + vp,
								data: "nid=" + nid + "& search=" + search + "& myvr=" + myvr,			
								success: function (data) 
									{
										if(data.Jobs=="")
											{
												loadgif=1;
												$('.gif').hide();
												// alert(loadgif);
												
											}
										else
											{
												setTimeout(function(){
												$('.gif').hide();
												$('.Jobs').append(data.Jobs);},200);
											}
									}
							});				
						}
				}, 150))
			}


			
			window.onbeforeunload = function () {
			  window.scrollTo(0, 0);
			}

		
		function Bindaccorheight(){
			var accordions = document.getElementsByClassName("accordion");
			for (var i = 0; i < accordions.length; i++) 
			{
			  accordions[i].onclick = function() {
				this.classList.toggle('is-open');

				var content = this.nextElementSibling;
				if (content.style.maxHeight) {
				  // accordion is currently open, so close it
				  content.style.maxHeight = null;
				} else {
				  // accordion is currently closed, so open it
				  content.style.maxHeight = content.scrollHeight + "px";
				}
			  }
			}
		}

		
		function Bindaccorclick(){
			$('.check_box').click(function()
			{
					var aloc=[];
					var aloca=[];
					var acat=[];
					var acata=[];
					var apost=[];
					var aposta=[];
					var aqual=[];
					var aquala=[];
					
					$('.class-loc').each(function(){
						if($(this).is(":checked"))
						{
							aloc.push($(this).val());
						}	
					});				
					
					if (aloc==""){
									var element = $('.class-loc');
									for (var i = 0; i < element.length; i++) 
										{
											aloca.push($(element).eq(i).val());
										}				
								}
						Filoca = aloca.toString();
						Filoc = aloc.toString();
						Filoc = Filoc + Filoca;
						// console.log(Filoc);			

					$('.class-cat').each(function(){
						if($(this).is(":checked"))
						{
							acat.push($(this).val());
						}
					});
					
					if (acat==""){
									var element = $('.class-cat');
									for (var i = 0; i < element.length; i++) 
										{
											acata.push($(element).eq(i).val());
										}				
								}
						Ficata = acata.toString();
						Ficat = acat.toString();
						Ficat = Ficat + Ficata;
						// console.log(Ficat);
			
			
					$('.class-post').each(function(){
						if($(this).is(":checked"))
						{
							apost.push($(this).val());
						}
					});
					
					if (apost==""){
									var element = $('.class-post');
									for (var i = 0; i < element.length; i++) 
									{
										aposta.push($(element).eq(i).val());
									}				
								}
						Fiposta = aposta.toString();
						Fipost = apost.toString();
						Fipost = Fipost + Fiposta;
						// console.log(Fipost);


					$('.class-qual').each(function(){
						if($(this).is(":checked"))
						{
							aqual.push($(this).val());
						}
					});	   
							   
					if (aqual==""){
									var element = $('.class-qual');
									for (var i = 0; i < element.length; i++) 
									{
										aquala.push($(element).eq(i).val());
									}				
								}
						Fiquala = aquala.toString();
						Fiqual = aqual.toString();
						Fiqual = Fiqual + Fiquala;
						// console.log(Fiqual);
			});
		}

		
/* 		function Bind_form_submit(){
			
				$("#email-alert").hide();
				$("#mobile-alert").hide();		
		
				var error_email = false;
				var error_mobile = false;
		  
				$("#email").focusout(function(){
					check_email();
				});

				$("#mobile").focusout(function(){
					check_mobile();
				});				
				
				function check_email(){
					var pattern = new RegExp(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i);
					
					if(pattern.test($("#email").val()))
					{
					$("#email-alert").hide();
					}
					else
					{
						$("#email-alert").html("**Invalid Email");
						$("#email-alert").show();
						error_email = true;					
					}
				}
		
				function check_mobile(){
					var pattern = new RegExp(/^(\+\d{1,3}[- ]?)?\d{10}$/);
					
					if(pattern.test($("#mobile").val()))
					{
					$("#mobile-alert").hide();	
					}
					else
					{
						$("#mobile-alert").html("**Invalid Number");
						$("#mobile-alert").show();
						error_mobile = true;
					}
				}

				$('#theform').submit(function(e){
					
					e.preventDefault();
					error_email = false;
					error_mobile = false;
					
					check_email();
					check_mobile();
					
					if(error_email == false && error_mobile == false)
					{
						    $("input[type='submit']", this)
							.val("Please Wait...")
							.attr('disabled', 'disabled');
						
						var user_name = $("#user_name").val();
						var email = $("#email").val();
						var mobile = $("#mobile").val();
						var user_id = $("#user_id").val();
						var token = $("#token").val();

						$.ajax({
								type:'post',
								url: '/notification/store',
								async: false,
								data: "loc=" + Filoc + "&cat=" + Ficat + "&post=" + Fipost + "&qual=" + Fiqual  + "&email=" + email  + "&mobile=" + mobile  + "&user_id=" + user_id  + "&name=" + user_name  + "&_token=" + token,			
								success: function (data) 
									{
										reload();
									}
							});
					}	
					else
					{
						 return false;
					}
				});
		} */

		function Bind_form_submit(){
			

				$('#theform').submit(function(e){
			
				    $("input[type='submit']", this)
					.val("Please Wait...")
					.attr('disabled', 'disabled');
						
					var user_name = $("#user_name").val();
					var email = $("#email").val();
					var user_id = $("#user_id").val();
					var token = $("#token").val();

					$.ajax({
						type:'post',
						url: '/notification/store',
						async: false,
						data: "loc=" + Filoc + "&cat=" + Ficat + "&post=" + Fipost + "&qual=" + Fiqual  + "&email=" + email  + "&user_id=" + user_id  + "&name=" + user_name  + "&_token=" + token,			
						success: function (data) 
							{
								reload();
							}
					});
						
				});
		}		
		
		
		
		function Bindformdel(){
			$(".del-btn").click(function(){
				
				    $.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});

				var id = $("#noteid").val();
			
				
				$.ajax({
						type:'get',
						url: '/notification/destroy/' +id,
						data: {"id": id },
						success: function (data) 
							{
								reload();
							}
					});
			});		
		}

		function Binduserrequest()
		{
			$('.userrequest').click(function(e){
				
				var admin = 'surajgawhare@gmail.com'; 
				var email = $("#email").val(); 
				var loc = $("#loc_req").val();
				var cat = $("#cat_req").val();
				var post = $("#post_req").val();
				var qual = $("#qual_req").val();
				
				if(loc != "" || cat != "" || post != "" || qual != "")
				{	
					$("#hide_success").show();
					
						$.ajax({
							type:'get',
							dataType: 'html',
							url: '/acknowledgeus',
							data: "loc=" + loc + "&cat=" + cat + "&post=" + post + "&qual=" + qual  + "&email=" + email  + "&admin=" + admin,			
							success: function (response) 
								{		
									// console.log(response);
									$("#hide_success").fadeOut(8000);
								}
						});
				}
				else
				{
					alert("Data Not Inserted");
					return false;
				}
			});
		}
		
	
	});
