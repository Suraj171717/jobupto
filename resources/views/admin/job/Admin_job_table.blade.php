		
		<div class="alert alert-info">
		  <strong>Total Jobs :</strong>{{$Jobs->total()}}
		</div>
		
<div class="Jobs endless-pagination" >
	<div class="job_table">
		
			
		<?php if ($Jobs->isEmpty()) { ?>
			
		<div class="srry"><h1> No Jobs Available....!! </h1></div>
			
		<?php } else { ?>
			
	
		<table class="myTable" id="sample_1">
			<thead>
				<tr>
					<th style="padding: 2px; width: 2%; text-align: center;"><input type="checkbox" class="group-checkable" /></th>
					<th style="padding: 2px; width: 11%; text-align: center;">Company</th>
					<th style="padding: 2px; width: 10%; text-align: center;">Location</th>
					<th style="padding: 2px; width: 7%; text-align: center;">Category</th>		
					<th style="padding: 2px; width: 10%; text-align: center;">Post</th>
					<th style="padding: 2px; width: 12%; text-align: center;">Vacancies</th>
					<th style="padding: 2px; width: 10%; text-align: center;">Qualification</th>
					<th style="padding: 2px; width: 7%; text-align: center;">Exprncs</th>
					<th style="padding: 2px; width: 7%; text-align: center;">Package</th>
					<th style="padding: 2px; width: 8%; text-align: center;">Last Date</th>
					<th style="padding: 2px; width: 4%; text-align: center;">Advt</th>
					<th style="padding: 2px; width: 4%; text-align: center;">Apply</th>
					<th style="padding: 2px; width: 4%; text-align: center;">Edit</th>					
				</tr>
			</thead>

			@foreach($Jobs as $job)
				
				<tr>
					<td style="padding: 2px; width: 2%; text-align: center;"><input type="checkbox" class="checkboxes" data-id="{{ $job->id }}" /></td>
					<td style="padding: 2px; width: 11%; text-align: center;"><div class="cell3" >{{ $job->job_company }}</div></td>
					<td style="padding: 2px; width: 10%; text-align: center;"><div class="cell1">{{ $job->locations }}</div></td>
					<td style="padding: 2px; width: 7%; text-align: center;"><div class="cell2">{{ $job->categories }}</div></td>	
					<td style="padding: 2px; width: 10%; text-align: center;"><div class="cell4">{{ $job->posts }}</div></td>
					<td style="padding: 2px; width: 12%; text-align: center;"><div class="cell5">{{ $job->job_vacancies }}</div></td>
					<td style="padding: 2px; width: 10%; text-align: center;"><div class="cell6">{{ $job->qualifications }}</div></td>
					<td style="padding: 2px; width: 7%; text-align: center;"><div class="cell7">{{ $job->experiences }}</div></td>
					<td style="padding: 2px; width: 7%; text-align: center;"><div class="cell7">{{ $job->job_status }}</div></td>
					<td style="padding: 2px; width: 8%; text-align: center;"><div class="cell8">{{ $job->lastdate }}</div></td>
					<td style="padding: 2px; width: 4%; text-align: center;"><div class="cell9"><a href="storage/advts/{{ $job->advt }}" download="{{ $job->advt }}"><img src="{{ asset("/images/pdf.png")}}" alt=""/></a></div></td>
					<td style="padding: 2px; width: 4%; text-align: center;"><div class="cell99"><a href="{{ $job->applynow }}"><img src="{{ asset("/images/wr.png")}}" alt=""/></a></div></td>	          
					<td style="padding: 12px 2px; width: 4%; text-align: center;">
						<div class="cell33">
							<input class='btn btn-danger jobdel' type="submit" value="Delete" id='btndelet' data-id="{{ $job->id }}" />
							<input class='btn btn-info jobedit' type="submit" value="Edit" id='btnedit' data-id="{{ $job->id }}" />
						</div>
					</td>
				</tr>
		
			@endforeach
		</table>
		<?php } ?>
	</div>	
</div>
</div>
									