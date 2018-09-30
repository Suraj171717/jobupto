
	
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
				<strong style="color:red;">Account Activation Email</strong>
			</div>

			<div class="panel-body"  style="padding: 10px 15px; border-bottom:1px solid transparent; border-top-left-radius:3px; border-top-right-radius:3px; color: #333; background-color:#ffffff; margin-right: 20px; margin-left: 20px;">
				

				<p>Dear <strong style="color:sandybrown;">{{$user->name}}</strong></p>
				<p>Please click the button below to verify your JobUpto account.!</p>
				
				<a style="font-family: 'Sunflower'; color:#fff; background-color:#007bff; border-color:#007bff;
							display:inline-block; font-weight:400; text-align:center; white-space:nowrap;
							vertical-align: middle; -webkit-user-select: none; -moz-user-select: none;
							-ms-user-select: none; user-select: none; border: 1px solid transparent;
							padding: .375rem .75rem; font-size: 1rem;line-height: 1.5;border-radius: .25rem;
							text-decoration: none;" href="http://www.jobupto.com/verify/{{$user->email}}/{{$user->verifyToken}}">Verify</a>
				
				<p>Thanks</p>
				<p>Team JobUpto</p>
			</div>
			
		</div>
	
		
    </div>

  
</body>
</html>
