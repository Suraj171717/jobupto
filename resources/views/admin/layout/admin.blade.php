<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
      
        <title>Admin JobUpto</title>
		<link rel="icon" href="{!! asset('images/ico.png') !!}"/>
	  
		<!-- Fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
		<link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('css/admin.css')}}">
		

	
</head>
<body>

	
	<div class="alert alert-info needlaptop">
		 <h1><strong>SORRY !!..</strong>You Need Laptop To Access Admin Area.</h1>
	</div>	
	
	<div class="header disheader">
	@include('admin.layout.includes.header')
	</div>
	
<div class="page-content dispage">
    @if(Session::has('message'))
        <div class="alert alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

	
		<div id="mySidemenu" class="sidemenu">
					<div class="menulink" ><a href="{{ route('admin-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img class="menuflat" src="{{ asset("/images/logout.png")}}" alt=""/><div class="menuname">Logout</a></div></div>
                                        <form id="logout-form" action="{{ route('admin-logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>				
					<div class="menulink" ><a href="{{ url('/admin') }}"><img class="menuflat" src="{{ asset("/images/home.png")}}" alt=""/><div class="menuname">Admin Home</a></div></div>
					<div class="menulink addcat addjobtoggle" ><a><img class="menuflat" src="{{ asset("/images/add_category.png")}}" alt=""/><div class="menuname">Add category</a></div></div>
					<div class="menulink addjob addjobtoggle" ><a><img class="menuflat" src="{{ asset("/images/create.png")}}" alt=""/><div class="menuname">Add Job</a></div></div>
		</div>	
	
    <div class="row">

		<div class="admincreateform">
			<?php if ($Jobs->isNotEmpty()) { ?>	
				<input class='btn btn-danger' type="submit" value="Delete All Checked" id='deljobform' />
			<?php } ?>
		
			<input class='btn btn-info addjob disaddjob' type="submit" value="Add New Job" />

		</div>
	
		<div id="jobdiv">
			@include('admin.job.Admin_job_table')
		</div>	
		
		<div class="gif"><img src="{{ asset("/images/loading.gif")}}" alt=""/></div>
	</div>
	
</div><!--/Page Content-->

		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="{{ asset('js/admin.js') }}"></script>
<script>
		function myFunction(x) {
			x.classList.toggle("change");
		}

    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });

    });
</script>

</body>
</html>