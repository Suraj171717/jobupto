


<?php if ($Jobs->isNotEmpty()) { ?>
				
				

<div class="bcontainer">
	<div class="job_table">
		<table class="myTable">

			@foreach($Jobs as $job)

						<tr>
							<td style="width: 13%;"><div class="cell3">{{ $job->job_company }}</div></td>
							<td style="width: 10%;"><div class="cell1">{{ $job->locations }}</div></td>
							<td style="width: 8%;"><div class="cell2">{{ $job->categories }}</div></td>	
							<td style="width: 10%;"><div class="cell4">{{ $job->posts }}</div></td>
							<td style="width: 18%;"><div class="cell5">{{ $job->job_vacancies }}</div></td>
							<td style="width: 11%;"><div class="cell6">{{ $job->qualifications }}</div></td>
							<td style="width: 7%;"><div class="cell7">{{ $job->experiences }}</div></td>
							<td style="width: 7%;"><div class="cell7">{{ $job->job_status }}</div></td>
							<td style="width: 8%;"><div class="cell8">{{ date('d-m-Y', strtotime($job->lastdate)) }}</div></td>
							<td style="width: 4%;"><div class="cell9"><a href="storage/advts/{{ $job->advt }}" download="{{ $job->advt }}"><img src="{{ asset("/images/pdf.png")}}" alt=""/></a></div></td>
							<td style="width: 4%;"><div class="cell99"><a href="{{ $job->applynow }}"><img src="{{ asset("/images/wr.png")}}" alt=""/></a></div></td>	          
						</tr>

			@endforeach
		</table>
	</div>
</div>




<div class="scontainer">

	@foreach($Jobs as $job)			
		<div class="container">
			<div class="job_box">

				<div class="box1">
					<div class="boxes"><b>{{ $job->job_company }}</b></div>
					<div class="boxes"><b>{{ $job->locations }}</b></div>
					<div class="boxes"><b>{{ $job->categories }}</b></div>
					<div class="boxes"><b>Post:</b>{{ $job->posts }}</div>
					<div class="boxes"><b>Qualification:</b>{{ $job->qualifications }}</div>
					<div class="boxes"><b>Exprncs:</b>{{ $job->experiences }}</div>
					<div class="boxes"><b>Package:</b>{{ $job->job_status }}</div>
				</div>

				<div class="box2">
					<div class="boxes"><b>Vacancies & Fee:</b>{{ $job->job_vacancies }}</div>
				</div>

				<div class="box3">
					<div class="boxes"><b>Last Date:</b>{{ date('d-m-Y', strtotime($job->lastdate)) }}</div>
					<div class="boxes"><b>Advt:</b><a href="advts/{{ $job->advt }}" download="{{ $job->advt }}"><img src="{{ asset("/images/pdf.png")}}" alt=""/></a></div>
					<div class="boxes"><b>Apply:</b><a href="{{ $job->applynow }}"><img src="{{ asset("/images/wr.png")}}" alt=""/></a></div>
				</div>
				

			</div>
		</div>
	@endforeach

</div>



<?php } ?>
















