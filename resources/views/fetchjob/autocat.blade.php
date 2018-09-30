
	<?php if ($Jobs->isEmpty()) { ?>
				
	<div class="emptyselect"><b>No Jobs to select</b></div>
				
	<?php } else { ?>

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
					

	<?php } ?>
		
		
