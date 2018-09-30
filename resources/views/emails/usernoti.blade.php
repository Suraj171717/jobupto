
	
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <title>JOBUPTO</title>

	
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">

	
</head>
<body>
    <div id="container" style="display: block; width: auto; padding: 7px;">

        <div class="header" style="background:cyan; color:white; display:block; float:left; width:100%;" >
            <a class="logo" style="font-family: 'Sunflower', sans-serif;font-size: 25px;padding: 12px 40px;float: left;font-weight: 600;text-decoration: none;color: #fff;" href="http://www.jobupto.com">JobUpto</a>
        </div>


		<div class="center" style="float:left; width:100%; background:#ececec9c; padding: 25px 0;">
		
			<div class="panel-heading" style="padding: 10px 15px; border-bottom:1px solid transparent; border-top-left-radius:3px; border-top-right-radius:3px; color: #333; background-color:#ffffff; border-color: #ddd;margin-right: 20px; margin-left: 20px;" >
				<strong style="color:red;">JobUpto User Wants to Add an NEW Item in the List</strong>
			</div>

			<div class="panel-body"  style="padding: 10px 15px; border-bottom:1px solid transparent; border-top-left-radius:3px; border-top-right-radius:3px; color: #333; background-color:#ffffff; margin-right: 20px; margin-left: 20px;">
				

				<p style="color:red;">User Input Request</p>
				<p>LOCATION: <strong style="color:#00abff;">{{ $data['loc'] }}</strong></p>
				<p>CATEGORY: <strong style="color:#00abff;">{{ $data['cat'] }}</strong></p>
				<p>POST: <strong style="color:#00abff;">{{ $data['post'] }}</strong></p>
				<p>QUALIFICATION: <strong style="color:#00abff;">{{ $data['qual'] }}</strong></p>				
				
				<br>
				<p>Request Came From : <strong style="color:#00abff;">{{ $data['email'] }}</strong>.</p>
				<p>Thanks</p>
				<p>Team JobUpto</p>
			</div>
			
		</div>
	
		
    </div>

  
</body>
</html>
