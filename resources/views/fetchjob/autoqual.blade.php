
	<?php if ($Jobs->isEmpty()) { ?>
				
	<div class="emptyselect"><b>No Jobs to select</b></div>
				
	<?php } else { ?>

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
					

	<?php } ?>
		
		
