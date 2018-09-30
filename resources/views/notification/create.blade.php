

			<?php if ($note->isEmpty()) { ?>

                <div class="panel-heading"><strong style="color:red;">NOTIFICATION</strong> Request Form</div>

				<div class="panel-body">
				<form action='' id='theform' >
                            <input type="hidden" id="token" value="{{ csrf_token() }}" />
                            <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" />
                            <input type="hidden" id="user_name" value="{{ Auth::user()->name }}" />
                            <input type="hidden" id="email" value="{{ Auth::user()->email }}" />

							
							
							<div class="panel-body">							
                            <label for="email" class="labcont control-label">Notification will be Send On: <strong style="color:#0058f9;">{{ Auth::user()->email }}</strong></label>
							</div>


							<div class="panel-body">							
								<div class="alert my-alert alert-info">
									Please specify your Requirements in the given four categories! Else the system will send notification of all types of Jobs to your above E-mail Address.
								</div>
							</div>							

							<div class="panel-body">							
								<div class="alert my-alert alert-danger">
									If you do not found your desired field in the list..! <strong  style="color:red;">Acknowledge Us.</strong>
								</div>
							</div>
							
							
							<div class="panel-body" id="hide_success">
								<div class="alert alert-success">
									<strong>Success!</strong> Data Send successfully, System will upgrade the list if found neccessary. <strong>ThankYou For Your Support</strong>...!!
								</div>
							</div>						
<!--							
							<div class="panel-body">		
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control" placeholder="e.g. John@Xmail.com" required /><span class="red" style="color:red;    position: absolute;" id="email-alert"></span>
                            </div>
							</div>
                       
							<div class="panel-body">
                            <label for="mobile" class="col-md-4 control-label">Mobile No.</label>
                            <div class="col-md-6">
                                <input type="text" id="mobile" class="form-control" required /><span class="red" style="color:red;    position: absolute;" id="mobile-alert"></span>
                            </div>
							</div>
-->                       						
				
					<button type="button" class="accordion" id="accordion_top" >Select Location</button>	
					<div class="accordion-content">
						<div id="acper" >
						
							<div class="input-group">
								<input id="loc_req" type="text" class="form-control" placeholder="Acknowledge Us" aria-describedby="basic-addon2">
								<span class="userrequest input-group-addon" style="cursor: pointer;" >send</span>
							</div>
							
							<div id="al" >	  
								<?php $locs = DB::table('locations')->orderby('name', 'ASC')->get();?>

								@foreach($locs as $loc)
								<li class="lists">
								<div class="check_box check_loc" >
								<input type="checkbox" id="id-loc" value="{{$loc->id}}" class="class-loc" style="cursor: pointer;"/>
								</div>
								<div id="list-name">
								<b>{{ucwords($loc->name)}}</b>
								</div>
								</li>
								@endforeach  
							</div>
						</div>
					</div>
				
					<button type="button" class="accordion" >Select Category</button>
					<div class="accordion-content">
						<div id="acper" >

							<div class="input-group">
								<input id="cat_req" type="text" class="form-control" placeholder="Acknowledge Us" aria-describedby="basic-addon2">
								<span class="userrequest input-group-addon" style="cursor: pointer;" >send</span>
							</div>
							
							<div id="ac" >
								<?php $cats = DB::table('categories')->orderby('name', 'ASC')->get();?>

								@foreach($cats as $cat)
								<li class="lists">
								<div class="check_box check_cat" >
								<input type="checkbox" id="id-cat" value="{{$cat->id}}" class="class-cat" style="cursor: pointer;"/>
								</div>
								<div id="list-name">
								<b>{{ucwords($cat->name)}}</b>
								</div>
								</li>
								@endforeach
							</div>	
						</div>
					</div>
				
					<button type="button" class="accordion" >Select Post</button>
					<div class="accordion-content">
						<div id="acper" >

							<div class="input-group">
							  <input id="post_req" type="text" class="form-control" placeholder="Acknowledge Us" aria-describedby="basic-addon2">
							  <span class="userrequest input-group-addon" style="cursor: pointer;"  >send</span>
							</div>
													
							<div id="ap" >
								<?php $posts = DB::table('posts')->orderby('name', 'ASC')->get();?>

								@foreach($posts as $post)
								<li class="lists">
								<div class="check_box check_post" >
								<input type="checkbox" id="id-post" value="{{$post->id}}" class="class-post" style="cursor: pointer;"/>
								</div>
								<div id="list-name">
								<b>{{ucwords($post->name)}}</b>
								</div>
								</li>
								@endforeach 
							</div>
						</div>
					</div>
				
					<button type="button" class="accordion">Select Qualification</button>
					<div class="accordion-content">
						<div id="acper" >	

							<div class="input-group">
							  <input id="qual_req"  type="text" class="form-control" placeholder="Acknowledge Us" aria-describedby="basic-addon2">
							  <span class="userrequest input-group-addon" style="cursor: pointer;" >send</span>
							</div>
													
							<div id="aq" >
								<?php $quals = DB::table('qualifications')->orderby('name', 'ASC')->get();?>

								@foreach($quals as $qual)
								<li class="lists">
								<div class="check_box check_qual" >
								<input type="checkbox" id="id-qual" value="{{$qual->id}}" class="class-qual" style="cursor: pointer;"/>
								</div>
								<div id="list-name">
								<b>{{ucwords($qual->name)}}</b>
								</div>
								</li>
								@endforeach 
							</div>
						</div>
					</div>
					
					<div class="form-group">

						<input class='btn btn-primary btn-info' type="submit" value="Submit" id='notificationsubmit' />

					</div>				
				</form>
				</div>
				
				
				
			<?php } else { ?>
			
                <div class="panel-heading"><strong style="color:red;">NOTIFICATION</strong> Status</div>
			
				<div class="panel-body">
				
						<div class="col-sm-11">
						@foreach($note as $noti)
							<p class="alert alert-success">Dear User You Have Successfully Created <strong>NOTIFICATION</strong> Request On {{ date('d-m-Y', strtotime($noti->created_at)) }}</p>
                            <input type="hidden" id="noteid" value="{{ $noti->id }}" />
						@endforeach
						</div>

						<div class="col-sm-11">
							  <p class="alert alert-info">To Stop Receiving <strong style="color:red;">NOTIFICATION</strong>
							  <br>
							  <button type="button" class="btn btn-info del-btn">STOP</button>
							  <button type="button" class="btn btn-info del-btn">Update NOTIFICATION</button>
							  </p>
						</div>

						<div class="col-sm-11">
							  <button type="button" class="btn btn-info inb-btn" >Go To Inbox</button>
						</div>						
						
				</div>
			
			<?php } ?>