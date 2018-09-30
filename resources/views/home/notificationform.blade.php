<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>JOBUPTO</title>

        <!-- Fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        <!-- Styles -->
		<link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('css/notification.css')}}">  
</head>

<body>
	

		<div class="header">
			<div class="header_in">
				<a class="logo" href="{{ url('/') }}">JOBUPTO</a>

				<div class="menu-container" onclick="myFunction(this)">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
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
					<div class="menulink" ><a href="{{ url('/home') }}"><img class="menuflat" src="{{ asset("/images/home.png")}}" alt=""/><div class="menuname">Home</a></div></div>
					<div class="menulink" ><a href="{{ route('aboutus') }}"><img class="menuflat" src="{{ asset("/images/about_us.png")}}" alt=""/><div class="menuname">About Us</a></div></div>            
					<div class="menulink" ><a href="{{ route('contactus') }}"><img class="menuflat" src="{{ asset("/images/contact_us.png")}}" alt=""/><div class="menuname">Contact Us</a></div></div>            
					<div class="menulink" ><a href="{{ route('privacy') }}"><img class="menuflat" src="{{ asset("/images/privacy.png")}}" alt=""/><div class="menuname">Privacy Policy</a></div></div>            
				@else
					<div class="menulink" ><a href="{{ route('login') }}"><img class="menuflat" src="{{ asset("/images/login.png")}}" alt="" /><div class="menuname">Login</a></div></div>
					<div class="menulink" ><a href="{{ route('register') }}"><img class="menuflat" src="{{ asset("/images/register.png")}}" alt=""/><div class="menuname">Register</a></div></div>
				@endauth

            @endif		

		</div>		

		<div class="container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div id="notediv" class="panel panel-default">
						
						<input type="hidden" id="user_id" value="{{ Auth::user()->id }}" />
						<input type="hidden" id="user_nid" value="" />
						
						<div class="panel-body">
							<div class="gif" ><img src="{{ asset("/images/loading.gif")}}" alt=""/></div>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/notification.js') }}"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").classList.add('hidden');
}

function closeNav() {
    document.getElementById("mySidenav").classList.remove('hidden');
}
function myFunction(x) {
    x.classList.toggle("change");

}

</script>
		
		
</body>
</html>
