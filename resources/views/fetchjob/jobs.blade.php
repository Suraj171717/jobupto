


<div class="bcontainer">
	<div class="Jobs endless-pagination" >
		<div class="job_table">
		
			
			<?php if ($Jobs->isEmpty()) { ?>
				
			<div class="srry"><h1>Sorry!!  Jobs not found in this Category</h1></div>
				
			<?php } else { ?>
			
			
			<div class="table-head">
			
				<div class="toteel">
					<div class="total_jobs"><b> Total Jobs :</b> {{$Jobs->total()}}
						<span  class="filterspan" style="float:right;cursor:pointer;margin-right: 4%" ><b> Filters</b></span>
					</div>
				</div>
			
				<table class="myTable fixedheader">
					<thead>
						<tr>
							<th style="padding: 4px 0px;width: 13%;">Company</th>
							<th style="padding: 4px 0px;width: 10%;">Location</th>
							<th style="padding: 4px 0px;width: 8%;">Category</th>		
							<th style="padding: 4px 0px;width: 10%;">Post</th>
							<th style="padding: 4px 0px;width: 18%;">Vacancies</th>
							<th style="padding: 4px 0px;width: 11%;">Qualification</th>
							<th style="padding: 4px 0px;width: 7%;">Exprncs</th>
							<th style="padding: 4px 0px;width: 7%;">Package</th>
							<th style="padding: 4px 0px;width: 8%;">Last_Date</th>
							<th style="padding: 4px 0px;width: 4%;">Advt</th>
							<th style="padding: 4px 0px;width: 4%;">Apply</th>			
						</tr>
					</thead>
				</table>
			
			</div>    

			<div class="table-body">		
				<table class="myTable">
					<thead>
						<tr>
							<th style="padding: 4px 0px;width: 13%;">Company</th>
							<th style="padding: 4px 0px;width: 10%;">Location</th>
							<th style="padding: 4px 0px;width: 8%;">Category</th>		
							<th style="padding: 4px 0px;width: 10%;">Post</th>
							<th style="padding: 4px 0px;width: 18%;">Vacancies</th>
							<th style="padding: 4px 0px;width: 11%;">Qualification</th>
							<th style="padding: 4px 0px;width: 7%;">Exprncs</th>
							<th style="padding: 4px 0px;width: 7%;">Package</th>
							<th style="padding: 4px 0px;width: 8%;">Last_Date</th>
							<th style="padding: 4px 0px;width: 4%;">Advt</th>
							<th style="padding: 4px 0px;width: 4%;">Apply</th>			
						</tr>
					</thead>

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
					<?php } ?>
			</div>
		</div>
	</div>
		<div class="gif" ><img src="{{ asset("/images/loading.gif")}}" alt=""/></div>
</div>


<div class="scontainer">

	<div class="tttl">
		<div class="total_jobs"><b> Total Jobs :</b> {{$Jobs->total()}}
			<span  class="filterspan" style="float:right;cursor:pointer;margin-right: 4%" ><b> Filters</b></span>
		</div>
	</div>

<div class="ep">
<div class="Jobs tabclose endless-pagination" >	
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
					<div class="boxes"><b>Last Date:</b>{{ date('d-m-Y', strtotime($job->lastdate)) }}</div>
					<div class="boxes"><b>Advt:</b><a href="advts/{{ $job->advt }}" download="{{ $job->advt }}"><img src="{{ asset("/images/pdf.png")}}" alt=""/></a></div>
					<div class="boxes"><b>Apply:</b><a href="{{ $job->applynow }}"><img src="{{ asset("/images/wr.png")}}" alt=""/></a></div>
				</div>
				

			</div>
		</div>
	@endforeach
	
	<?php } ?>

</div>
</div>
<div class="gif"><img src="{{ asset("/images/loading.gif")}}" alt=""/></div>
</div>


