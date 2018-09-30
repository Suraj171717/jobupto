


$(document).ready(function () 
	{ 
		Bindloc();
		Bindcat();
		Bindpost();
		Bindqual();
		Bindexp();
		Bindaccordian();
		filternaav();
	
	
			$('.gif').hide();
			var vp=1; //alert(vp)
			var Filoc=[];
			var Ficat=[];
			var Fipost=[];
			var Fiqual=[];
			var Fiexp=[];
			var Finalmr=[];
			var loadgif=[];
			var search =[];
			var locaccor=[];
			var cataccor=[];
			var postaccor=[];
			var qualaccor=[];
			var expaccor=[];
			var filterdoc=[];

			
			
	function filternaav(){		
		$('.table-body').on('click', function(e){
			if(filterdoc=="1")
			{			
				$('.sidenav').removeClass("hiddenu");
				filterdoc=0;
			}
		});
		
		$('.tabclose').on('click', function(e){
			if(filterdoc=="1")
			{		
				$('.sidenav').removeClass("hiddenu");
				filterdoc=0;
			}
		});		


		$('.filterspan').on('click', function(e){
			$('.sidenav').addClass("hiddenu");
			filterdoc=1;
		});
		
		$('.sidenavlink').on('click', function(e){
			$('.sidenav').removeClass("hiddenu");
			filterdoc=0;
		});		
	}
		
	


		$('.menu-container').on('click', function(e){
			$('.sidemenu').toggleClass("changedsidemenu");
		});	
	
		window.onbeforeunload = function () {
		  window.scrollTo(0, 0);
		}
		
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: '/leftcontu',
			data: "loc=" + Filoc,			
			success: function (response) 
				{		            
					$('#leftconti').html(response); 
					$('.acpera').hide();
					Bindloc();
					Bindcat();
					Bindpost();
					Bindqual();
					Bindexp();
					Bindaccordian();
					$('.al_content_disable').hide();
					$('.ac_content_disable').hide();
					$('.ap_content_disable').hide();
					$('.aq_content_disable').hide();
					$('.ae_content_disable').hide();
				}
		});		
	
  		$('#search').keyup(function()
		{	
			window.scrollTo(0, 0);
			loadgif="2";
			vp=1;
			search = $('#search').val();

			$.ajax({
				type: 'get',
				dataType: 'html',
				url: '/jobsearch',
				data: "loc=" + locaccor + "& cat=" + cataccor + "& post=" + postaccor + "& qual=" + qualaccor  + "& exp=" + expaccor + "& search=" + search,
				success: function (response) 
					{		
						//console.log(response);
						$('#updateDiv').html(response); 
						$('#updateDave').html(response);
						$('.gif').hide();
						filternaav();
					}
			});					
		});
	
 		function Bindaccordian()
		{
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

 		function fillcheckboxs()
		{

				var expp=[];
				var exps=[];
				var qualp=[];
				var quals=[];
				var postp=[];
				var posts=[];
				var catp=[];
				var cats=[];
				var locp=[];
				var locs=[];
				
				$('.class-loc').each(function(){
					if($(this).is(":checked"))
					{
						locp.push($(this).val());
					}	
				});				
				
				if (locp==""){
								var element = $('.class-loc');
								for (var i = 0; i < element.length; i++) 
									{
										locs.push($(element).eq(i).val());
									}				
							}
					Filoca = locs.toString();
					locaccor = locp.toString();
					locaccor = locaccor + Filoca;
					// console.log(locaccor);

				$('.class-cat').each(function(){
					if($(this).is(":checked"))
					{
						catp.push($(this).val());
					}
				});
				
				if (catp==""){
								var element = $('.class-cat');
								for (var i = 0; i < element.length; i++) 
									{
										cats.push($(element).eq(i).val());
									}				
							}
					Ficata = cats.toString();
					cataccor = catp.toString();
					cataccor = cataccor + Ficata;
					// console.log(cataccor);
					
				$('.class-post').each(function(){
					if($(this).is(":checked"))
					{
						postp.push($(this).val());
					}
				});
				
				if (postp==""){
								var element = $('.class-post');
								for (var i = 0; i < element.length; i++) 
								{
									posts.push($(element).eq(i).val());
								}				
							}
					Fiposta = posts.toString();
					postaccor = postp.toString();
					postaccor = postaccor + Fiposta;
					// console.log(postaccor);
				
				$('.class-qual').each(function(){
					if($(this).is(":checked"))
					{
						qualp.push($(this).val());
					}
				});	   
						   
				if (qualp==""){
								var element = $('.class-qual');
								for (var i = 0; i < element.length; i++) 
								{
									quals.push($(element).eq(i).val());
								}				
							}
					Fiquala = quals.toString();
					qualaccor = qualp.toString();
					qualaccor = qualaccor + Fiquala;
					// console.log(qualaccor);

				$('.class-exp').each(function(){
					if($(this).is(":checked"))
					{
						expp.push($(this).val());
					}
				});
				
				if (expp==""){
								var element = $('.class-exp');
								for (var i = 0; i < element.length; i++) 
								{
									exps.push($(element).eq(i).val());
								}				
							}
					Fiexpa = exps.toString();
					expaccor = expp.toString();
					expaccor = expaccor + Fiexpa;
					// console.log(expaccor);
		
		}		

					
 		function Bindloc()
		{
			$('.markmydivloc').click(function(e)
			{
				$('.al_content_disable').show();
				
				if (!$(e.target).is('input:checkbox')) {
					var $checkbox = $(this).find('input:checkbox');
					$checkbox.prop('checked', !$checkbox.prop('checked'));
				}			
								
					var aloc=[];
					var aloca=[];
					window.scrollTo(0, 0);
					
					$('.class-loc').each(function(){
						if($(this).is(":checked"))
						{
							loadgif="2";
							vp=1;
							aloc.push($(this).val());
							$('.acpera').show();
							$('#ac').hide();
							$('#ap').hide();
							$('#aq').hide();
							$('#ae').hide();
						}
						
						if(!$(this).is(":checked"))
						{
							loadgif="2";
							vp=1;							
							$('.acpera').show();
							$('#ac').hide();
							$('#ap').hide();
							$('#aq').hide();
							$('#ae').hide();
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
								
						
						$.ajax({
							type: 'get',
							dataType: 'html',
							url: '/jobfetchloc',
							data: "loc=" + Filoc + "& search=" + search,			
							success: function (response) 
								{		            
									//console.log(response);
									$('#updateDiv').html(response); 
									$('#updateDave').html(response);
									$('.al_content_disable').hide();
									$('.gif').hide();
									filternaav();
								}
						});					
										
						$.ajax({
							type: 'get',
							dataType: 'html',
							url: '/ac',
							data: "loc=" + Filoc,			
							success: function (data) 
								{			
									$('#ac').html(data);
									$('#ac').show();
									$('.acpera').hide();
									Bindcat();
								}						
						});
											
						$.ajax({
								type: 'get',
								dataType: 'html',
								url: '/ap',
								data: "loc=" + Filoc,			
								success: function (response) 
								{			
									$('#ap').html(response); 
									$('#ap').show();
									$('.acpera').hide();												
									Bindpost();
								}						
							});					

						$.ajax({
								type: 'get',
								dataType: 'html',
								url: '/aq',
								data: "loc=" + Filoc,			
								success: function (response) 
								{			
									$('#aq').html(response);
									$('#aq').show();
									$('.acpera').hide();
									Bindqual();
								}						
							});					
										
						$.ajax({
								type: 'get',
								dataType: 'html',
								url: '/ae',
								data: "loc=" + Filoc,			
								success: function (response) 
								{			
									$('#ae').html(response);
									$('#ae').show();
									$('.acpera').hide();
									Bindexp();
									fillcheckboxs();
								}						
							});	
			});
		}	
	
		function Bindcat()
		{	
			$('.markmydivcat').click(function(e)
			{
				$('.ac_content_disable').show();
			
				if (!$(e.target).is('input:checkbox')) {
					var $checkbox = $(this).find('input:checkbox');
					$checkbox.prop('checked', !$checkbox.prop('checked'));
				}
				var acat=[];
				var acata=[];
				var aloc=[];
				var aloca=[];
				window.scrollTo(0, 0);
				
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
					//console.log(Filoc);

				$('.class-cat').each(function(){
					if($(this).is(":checked"))
					{
						loadgif="2";
						vp=1;
						acat.push($(this).val());
						$('.casper').show();
						$('#ap').hide();
						$('#aq').hide();
						$('#ae').hide();
					}
					
					if(!$(this).is(":checked"))
					{
						loadgif="2";
						vp=1;						
						$('.casper').show();
						$('#ap').hide();
						$('#aq').hide();
						$('#ae').hide();
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

					
					$.ajax({
						type: 'get',
						dataType: 'html',
						url: '/jobfetchcat',
						data: "cat=" + Ficat + "& loc=" + Filoc + "& search=" + search,			
						success: function (response) 
							{		            
								//console.log(response);
								$('#updateDiv').html(response); 
								$('#updateDave').html(response);
								$('.ac_content_disable').hide();
								$('.gif').hide();
								filternaav();
							}
					});						

					$.ajax({
							type: 'get',
							dataType: 'html',
							url: '/ap',
							data: "cat=" + Ficat + "& loc=" + Filoc,			
							success: function (response) 
							{			
								$('#ap').html(response); 
								$('#ap').show();
								$('.casper').hide();
								Bindpost();
							}						
						});					

					$.ajax({
							type: 'get',
							dataType: 'html',
							url: '/aq',
							data: "cat=" + Ficat + "& loc=" + Filoc,			
							success: function (response) 
							{			
								$('#aq').html(response);
								$('#aq').show();
								$('.casper').hide();
								Bindqual();											
							}						
						});					
								
					$.ajax({
							type: 'get',
							dataType: 'html',
							url: '/ae',
							data: "cat=" + Ficat + "& loc=" + Filoc,			
							success: function (response) 
							{			
								$('#ae').html(response);
								$('#ae').show();
								$('.casper').hide();
								Bindexp();
								fillcheckboxs();
							}						
						});	
			});
		}
			
		function Bindpost()
		{		
			$('.markmydivpost').click(function(e)
			{
				$('.ap_content_disable').show();
				
				if (!$(e.target).is('input:checkbox')) {
					var $checkbox = $(this).find('input:checkbox');
					$checkbox.prop('checked', !$checkbox.prop('checked'));
				}
				var apost=[];
				var aposta=[];
				var acat=[];
				var acata=[];
				var aloc=[];
				var aloca=[];
				window.scrollTo(0, 0);
				
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
						loadgif="2";
						vp=1;
						apost.push($(this).val());
						$('.posper').show();
						$('#aq').hide();
						$('#ae').hide();						
					}
					if(!$(this).is(":checked"))
					{
						loadgif="2";
						vp=1;
						$('.posper').show();
						$('#aq').hide();
						$('#ae').hide();
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

					
					$.ajax({
						type: 'get',
						dataType: 'html',
						url: '/jobfetchpost',
						data: "post=" + Fipost + "& cat=" + Ficat + "& loc=" + Filoc + "& search=" + search,			
						success: function (response) 
							{		            
								//console.log(response);
								$('#updateDiv').html(response); 
								$('#updateDave').html(response);
								$('.ap_content_disable').hide();
								$('.gif').hide();
								filternaav();
							}
					});					
					
								
					$.ajax({
							type: 'get',
							dataType: 'html',
							url: '/aq',
							data: "post=" + Fipost + "& cat=" + Ficat + "& loc=" + Filoc,			
							success: function (response) 
							{			
								$('#aq').html(response);
								$('#aq').show();
								$('.posper').hide();
								Bindqual();
							}						
						});					
								
					$.ajax({
							type: 'get',
							dataType: 'html',
							url: '/ae',
							data: "post=" + Fipost + "& cat=" + Ficat + "& loc=" + Filoc,			
							success: function (response) 
							{			
								$('#ae').html(response);
								$('#ae').show();
								$('.posper').hide();												
								Bindexp();
								fillcheckboxs();
							}						
						});	
			});
		}

		function Bindqual()
		{		
			$('.markmydivqual').click(function(e)
			{
				$('.aq_content_disable').show();
				
				if (!$(e.target).is('input:checkbox')) {
					var $checkbox = $(this).find('input:checkbox');
					$checkbox.prop('checked', !$checkbox.prop('checked'));
				}
				var aqual=[];
				var aquala=[];
				var apost=[];
				var aposta=[];
				var acat=[];
				var acata=[];
				var aloc=[];
				var aloca=[];
				window.scrollTo(0, 0);
				
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
					//console.log(Filoc);

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
						loadgif="2";
						vp=1;
						aqual.push($(this).val());
						$('.qualper').show();
						$('#ae').hide();
					}
					if(!$(this).is(":checked"))
					{
						loadgif="2";
						vp=1;						
						$('.qualper').show();
						$('#ae').hide();
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

					
					$.ajax({
						type: 'get',
						dataType: 'html',
						url: '/jobfetchqual',
						data: "qual=" + Fiqual  + "& post=" + Fipost + "& cat=" + Ficat + "& loc=" + Filoc + "& search=" + search,			
						success: function (response) 
							{		            
								//console.log(response);
								$('#updateDiv').html(response); 
								$('#updateDave').html(response);
								$('.aq_content_disable').hide();
								$('.gif').hide();
								filternaav();
							}
					});	
					
					$.ajax({
							type: 'get',
							dataType: 'html',
							url: '/ae',
							data: "qual=" + Fiqual  + "& post=" + Fipost + "& cat=" + Ficat + "& loc=" + Filoc,			
							success: function (response) 
							{			
								$('#ae').html(response);
								$('#ae').show();
								$('.qualper').hide();												
								Bindexp();
								fillcheckboxs();
							}						
						});	
			});
		}
			
		function Bindexp()
		{		
			$('.markmydivexp').click(function(e)
			{
				$('.ae_content_disable').show();
				
				if (!$(e.target).is('input:checkbox')) {
					var $checkbox = $(this).find('input:checkbox');
					$checkbox.prop('checked', !$checkbox.prop('checked'));
				}
				var aexp=[];
				var aexpa=[];
				var aqual=[];
				var aquala=[];
				var apost=[];
				var aposta=[];
				var acat=[];
				var acata=[];
				var aloc=[];
				var aloca=[];
				window.scrollTo(0, 0);
				
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
					//console.log(Filoc);

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

				$('.class-exp').each(function(){
					if($(this).is(":checked"))
					{
						aexp.push($(this).val());
						loadgif="2";
						vp=1;
					}
					if(!$(this).is(":checked"))
					{
						loadgif="2";
						vp=1;
					}
					
				});
				
				if (aexp==""){
								var element = $('.class-exp');
								for (var i = 0; i < element.length; i++) 
								{
									aexpa.push($(element).eq(i).val());
								}				
							}
					Fiexpa = aexpa.toString();
					Fiexp = aexp.toString();
					Fiexp = Fiexp + Fiexpa;
					// console.log(Fiexp);
					
				$.ajax({
						type: 'get',
						dataType: 'html',
						url: '/jobfetchexp',
						data: "qual=" + Fiqual  + "& post=" + Fipost + "& cat=" + Ficat + "& loc=" + Filoc + "& exp=" + Fiexp + "& search=" + search,			
						success: function (response) 
							{	
								//console.log(response);
								$('#updateDiv').html(response); 
								$('#updateDave').html(response);
								$('.ae_content_disable').hide();
								$('.gif').hide();
								fillcheckboxs();
								filternaav();
							}
					});
			});
		}
		
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
					var scroll_position_for_jobs_load = $(window).height() + $(window).scrollTop() + 100;
					if(scroll_position_for_jobs_load >= $(document).height())
						{
							// console.log(loadgif);
							// console.log(vp);
							gbs();
							Finalmr=2;
						
							$.ajax({
								type: 'get',
								url: '/?page=' + vp,
								data: "loc=" + locaccor + "& cat=" + cataccor + "& post=" + postaccor + "& qual=" + qualaccor  + "& exp=" + expaccor + "& search=" + search + "& myvr=" + Finalmr,			
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
												$('.Jobs').append(data.Jobs);},200);
											}
									}
							});				
						}
				}, 300))
			}	
		

	});
