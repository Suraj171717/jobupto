
	<?php if ($Jobs->isEmpty()) { ?>
				
	<div class="emptyselect"><b>No Jobs to select</b></div>
				
	<?php } else { ?>

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
					
	<?php } ?>

		
		
