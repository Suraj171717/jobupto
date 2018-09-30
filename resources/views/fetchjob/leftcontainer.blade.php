
			
	<div class="leftcontainer_in" >

		<button class="accordion" id="accordion_top" >Location</button>
			<div class="accordion-content">
				<div id="acper" >
					<div class="al_content_disable" style=" width: 100%; background-color: #ffffff00; height: 200px; position: absolute;" ></div>
			  		<div id="al" >	
						@foreach($locs as $loc)
							<li class="lists">
								<div class="markmydivloc" style="padding: .2em;cursor: pointer;" >
									<div class="check_box check_loc" >
										<input type="checkbox" id="id-loc" name="markerType" value="{{$loc->id}}" class="class-loc" style="cursor: pointer;"/>
									</div>

									<div id="list-name">
											<span class="pull-right">({{$Jobs->where('jobloc_id',$loc->id)->count()}})</span>
										<b>{{ucwords($loc->name)}}</b>
									</div>
								</div>
							</li>
						@endforeach 
					</div>
				</div>
			</div>
		
		<button class="accordion" >Category</button>
			<div class="accordion-content ccc">
				<div id="acper" >
				<div class="ac_content_disable" style=" width: 100%; background-color: #ffffff00; height: 200px; position: absolute;" ></div>
				<div class="acpera" style="background-color: #fbf4a58c;" ><img class="loadergif" src="{{ asset("/images/filtergif.gif")}}" alt=""/></div>
					<div id="ac" >

						@foreach($cats as $cat)
							<li class="lists">
							<div class="markmydivcat" style="padding: .2em;cursor: pointer;" >
								<div class="check_box check_cat" >
									<input type="checkbox" id="id-cat" value="{{$cat->id}}" class="class-cat" style="cursor: pointer;"/>
								</div>
								
								<div id="list-name">
									<span class="pull-right">({{$Jobs->where('jobcat_id',$cat->id)->count()}})</span>
									<b>{{ucwords($cat->name)}}</b>
								</div>
							</div>
							</li>
						@endforeach
					</div>	
				</div>
			</div>
		
		<button class="accordion" >Post</button>
			<div class="accordion-content">
				<div id="acper" >
				<div class="ap_content_disable" style=" width: 100%; background-color: #ffffff00; height: 200px; position: absolute;" ></div>
				<div class="acpera casper" style="background-color: #fbf4a58c;" ><img class="loadergif" src="{{ asset("/images/filtergif.gif")}}" alt=""/></div>
					<div id="ap" >

						@foreach($posts as $post)
							<li class="lists">
							<div class="markmydivpost" style="padding: .2em;cursor: pointer;" >
								<div class="check_box check_post" >
									<input type="checkbox" id="id-post" value="{{$post->id}}" class="class-post" style="cursor: pointer;"/>
								</div>
								
								<div id="list-name">
									<span class="pull-right">({{$Jobs->where('jobpost_id',$post->id)->count()}})</span>
									<b>{{ucwords($post->name)}}</b>
								</div>
							</div>
							</li>
						@endforeach
					</div>
				</div>
			</div>
		
		<button class="accordion">Qualification</button>
			<div class="accordion-content">
				<div id="acper" >
				<div class="aq_content_disable" style=" width: 100%; background-color: #ffffff00; height: 200px; position: absolute;" ></div>
				<div class="acpera casper posper" style="background-color: #fbf4a58c;" ><img class="loadergif" src="{{ asset("/images/filtergif.gif")}}" alt=""/></div>				
					<div id="aq" >

						@foreach($quals as $qual)
							<li class="lists">
							<div class="markmydivqual" style="padding: .2em;cursor: pointer;" >
								<div class="check_box check_qual" >
									<input type="checkbox" id="id-qual" value="{{$qual->id}}" class="class-qual" style="cursor: pointer;"/>
								</div>
								
								<div id="list-name">
									<span class="pull-right">({{$Jobs->where('jobqual_id',$qual->id)->count()}})</span>
									<b>{{ucwords($qual->name)}}</b>
								</div>
							</div>
							</li>
						@endforeach 
					</div>
				</div>
			</div>
		
		<button class="accordion" id="accordion_bottom" >Experience</button>
			<div class="accordion-content">
				<div id="acper" >
				<div class="ae_content_disable" style=" width: 100%; background-color: #ffffff00; height: 200px; position: absolute;" ></div>
				<div class="acpera casper posper qualper" style="background-color: #fbf4a58c;" ><img class="loadergif" src="{{ asset("/images/filtergif.gif")}}" alt=""/></div>
					<div id="ae" >

						@foreach($exps as $exp)
							<li class="lists">
							<div class="markmydivexp" style="padding: .2em;cursor: pointer;" >
								<div class="check_box check_exp" >
									<input type="checkbox" id="id-exp" value="{{$exp->id}}" class="class-exp" style="cursor: pointer;"/>
								</div>
								
								<div id="list-name">
									<span class="pull-right">({{$Jobs->where('jobexp_id',$exp->id)->count()}})</span>
									<b>{{ucwords($exp->name)}}</b>
								</div>
							</div>
							</li>
						@endforeach 
					</div>
				</div>
			</div>

	</div>


