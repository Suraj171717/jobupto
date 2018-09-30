<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>JobUpto - Free Job Alert | Job search in India | Government Jobs | Railway Jobs | Bank Jobs | SSC Recruitments</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="JobUpto gives a platfrom to search new jobs opening and provides latest notification of all types of Job Recruitments like Government jobs, Railway jobs, Bank jobs and much more. " />
	<meta name="keywords" content="Free Job Alert, Government jobs, Govt jobs 2018, Govt jobs today, Job search in India, Railway jobs, Railway recruitments, Bank jobs, Bank recruitments, SSC recruitments, SSC CGL recruitments, govt jobs, SSC online dates, UPSC notifications, RRB recruitments, Latest govt jobs, latest govt jobs notifications." />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<meta property="og:title" content="Free Job Alert | Job search in India " />
	<meta property="og:type" content="jobs.search" />
	<meta property="og:image" content="https://www.jobupto.com/images/ico.png" />
	<meta property="og:description" content="JobUpto gives a platfrom to search new jobs opening and provides latest notification of all types of Job Recruitments like Government jobs, Railway jobs, Bank jobs and much more. " />
	<meta property="og:url" content="https://www.jobupto.com/" />
	
	<meta name="author" content="SurajGawhare">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{!! asset('images/ico.png') !!}"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
</head>

<body>
	
	<div class="container-main" style="min-height: 100%;">
	
		<div class="header">
			@include('home.header')                
        </div>


		
		<div id="mySidenav" class="sidenav">
			<div class="sidenavlink" style="cursor: pointer;"  ><img class="sidenavflat" src="{{ asset("/images/cancel.png")}}" alt="close"/></div>
			<div class="leftcontainer">
				<div id="leftconti" class="padd">
					<div class="notegif" ><img class="loadergif" src="{{ asset("/images/loading.gif")}}" alt=""/></div>
				</div>
			</div>
		</div>

		<div id="mySidemenu" class="sidemenu">
		
            @if (Route::has('login'))

				@auth
					<div class="menulink" ><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img class="menuflat" src="{{ asset("/images/logout.png")}}" alt=""/><div class="menuname">Logout</a></div></div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>					
					<div class="menulink" ><a href="{{ route('notification') }}"><img class="menuflat" src="{{ asset("/images/notification.png")}}" alt=""/><div class="menuname">Notification</a></div></div>
					<div class="menulink" style="display:none;"><a href=""><img class="menuflat" src="{{ asset("/images/userform.png")}}" alt=""/><div class="menuname">Fill My Form</a></div></div>
					<div class="menulink" ><a href="{{ route('aboutus') }}"><img class="menuflat" src="{{ asset("/images/about_us.png")}}" alt=""/><div class="menuname">About Us</a></div></div>            
					<div class="menulink" ><a href="{{ route('contactus') }}"><img class="menuflat" src="{{ asset("/images/contact_us.png")}}" alt=""/><div class="menuname">Contact Us</a></div></div>            
					<div class="menulink" ><a href="{{ route('privacy') }}"><img class="menuflat" src="{{ asset("/images/privacy.png")}}" alt=""/><div class="menuname">Privacy Policy</a></div></div>            
                @else
					<div class="menulink" ><a href="{{ route('login') }}"><img class="menuflat" src="{{ asset("/images/login.png")}}" alt="" /><div class="menuname">Login</a></div></div>
				@endauth

            @endif		
		</div>			

		<div class="smallcontainer">
			<div id="updateDave">		
			@include('home.mobview') 
			</div>
		</div>	

		
		<div class="bigcontainer">
			<div id="updateDiv">
				@include('home.cent')
			</div>	
		</div>

	</div>
		
		<div class="footer">
			@include('home.footer')                
        </div>		
		
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/home.js') }}"></script>
		<script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>		
		
</body>
</html>
