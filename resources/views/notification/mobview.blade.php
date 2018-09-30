

	<div class="tttl">
		<div class="total_jobs"><b>{{$Jobs->total()}}</b> Jobs Found</div>
	</div>

<div class="Jobs endless-pagination">
			
	<?php if ($Jobs->isEmpty()) { ?>
		<div class="srry"><h1>Sorry!!  Jobs not found in this Category</h1></div>
	<?php } else { ?>
			
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
					<div class="boxes"><b>Last Date:</b>{{ $job->lastdate }}</div>
					<div class="boxes"><b>Advt:</b><a href="advts/{{ $job->advt }}" download="{{ $job->advt }}"><img src="{{ asset("/images/pdf.png")}}" alt=""/></a></div>
					<div class="boxes"><b>Apply:</b><a href="{{ $job->applynow }}"><img src="{{ asset("/images/wr.png")}}" alt=""/></a></div>
				</div>
				

			</div>
		</div>
	@endforeach
	
	<?php } ?>

</div>
	
<div class="gif"><img src="{{ asset("/images/loading.gif")}}" alt=""/></div>	
