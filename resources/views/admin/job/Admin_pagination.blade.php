
<?php if ($Jobs->isNotEmpty()) { ?>
	<div class="job_table">

		<table class="myTable">
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
	</div>	
<?php } ?>							