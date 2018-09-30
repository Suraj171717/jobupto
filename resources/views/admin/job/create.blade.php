

<div class="submitted-table" >

	<div class="job_table">
			
		<?php if ($Jobs->isEmpty()) { ?>
				
		<div class="srry"><h1>Sorry!!  Jobs not found</h1></div>
			
		<?php } else { ?>
				
		
		<table class="myTable">
			<thead>
				<tr>
					<th style="padding: 2px; width: 12%; text-align: center;">Company</th>
					<th style="padding: 2px; width: 10%; text-align: center;">Location</th>
					<th style="padding: 2px; width: 8%; text-align: center;">Category</th>		
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
					<td style="padding: 2px; width: 12%; text-align: center;"><div class="cell3" >{{ $job->job_company }}</div></td>
					<td style="padding: 2px; width: 10%; text-align: center;"><div class="cell1">{{ $job->locations }}</div></td>
					<td style="padding: 2px; width: 8%; text-align: center;"><div class="cell2">{{ $job->categories }}</div></td>	
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
							<input class='btn btn-danger jobdelcrt' type="submit" value="Delete" id='btndelet' data-id="{{ $job->id }}" />
							<input class='btn btn-info jobedit' type="submit" value="Edit" id='btnedit' data-id="{{ $job->id }}" />
						</div>
					</td>
				</tr>
			@endforeach
		
		</table>
		<?php } ?>
	</div>	
</div>






<div class="fill-form">

	<div class="hedi"><h3>Add Job</h3></div>

	<div class="filla">

		<form action='' id='jobadd' enctype="multipart/form-data" method="post">
            
			<div class="txtareadiv" >
				<div class="form-group" style="width: auto;">
					<label class="col-md-4 control-label">Vacancies</label>
					<textarea  id="Vacancies" class="form-control" name="job_vacancies" required />
					<span class="red" style="color:red; position: absolute;" id="Vacancies-alert"></span>
				</div>			
			</div>
			
			
			<div class="nontxtareadiv">

			<div class="form-group">
                <label class="col-md-4 control-label">Location</label>
				<?php $locs = DB::table('locations')->orderby('name', 'ASC')->get();?>

                <select id="Location" class="form-control" name="jobloc_id" required >
					<option value="" hidden>select</option>
					@foreach($locs as $loc)
						<option value="{{$loc->id}}">{{ucwords($loc->name)}}</option>
					@endforeach
				</select>
				<span class="red" style="color:red; position: absolute;" id="Location-alert"></span>
			</div>

			
			<div class="form-group">
                <label class="col-md-4 control-label">Category</label>
				<?php $cats = DB::table('categories')->orderby('name', 'ASC')->get();?>
				
                <select id="Category" class="form-control" name="jobcat_id" required >
					<option value="" hidden>select</option>
					@foreach($cats as $cat)
						<option value="{{$cat->id}}">{{ucwords($cat->name)}}</option>
					@endforeach
				</select>
				<span class="red" style="color:red; position: absolute;" id="Category-alert"></span>
			</div>
			
			
			<div class="form-group">
                <label class="col-md-4 control-label">Post</label>
				<?php $posts = DB::table('posts')->orderby('name', 'ASC')->get();?>
				
				<select id="Post" class="form-control" name="jobpost_id" required >
					<option value="" hidden>select</option>
					@foreach($posts as $post)
						<option value="{{$post->id}}">{{ucwords($post->name)}}</option>
					@endforeach
				</select>
				<span class="red" style="color:red; position: absolute;" id="Post-alert"></span>
			</div>
			
			
			<div class="form-group">
                <label class="col-md-4 control-label">Qualification</label>
				<?php $quals = DB::table('qualifications')->orderby('name', 'ASC')->get();?>
				
                <select id="Qualification" class="form-control" name="jobqual_id" required >
					<option value="" hidden>select</option>
					@foreach($quals as $qual)
						<option value="{{$qual->id}}">{{ucwords($qual->name)}}</option>
					@endforeach
				</select>
				<span class="red" style="color:red; position: absolute;" id="Qualification-alert"></span>
			</div>
			
			
			<div class="form-group">
                <label class="col-md-4 control-label">Experience</label>
				<?php $exps = DB::table('experiences')->orderby('name', 'ASC')->get();?>

                <select id="Experience" class="form-control" name="jobexp_id" required >
					<option value="" hidden>select</option>
					@foreach($exps as $exp)
						<option value="{{$exp->id}}">{{ucwords($exp->name)}}</option>
					@endforeach	
				</select>
				<span class="red" style="color:red; position: absolute;" id="Experience-alert"></span>
			</div>
			
			<div class="form-group">
                <label class="col-md-4 control-label">online_Fillable</label>
                <select id="on_fil" class="form-control" name="online_fillable" required >
					<option value="0" hidden>No</option>
					<option value="0">No</option>
					<option value="1">Yes</option>
				</select>
				<span class="red" style="color:red; position: absolute;" id="online_fillable-alert"></span>
			</div>			
			
			<div class="form-group">
                <label class="col-md-4 control-label">Company</label>
                <input type="text" id="Company" class="form-control" name="job_company" required />
				<span class="red" style="color:red; position: absolute;" id="Company-alert"></span>
			</div>
			
			
			<div class="form-group" id="packwidth">
                <label class="col-md-4 control-label">Package</label>
                <input type="text" id="Package" class="form-control" name="job_status" required />
				<span class="red" style="color:red; position: absolute;" id="Package-alert"></span>
			</div>
			
			
			<div class="form-group" id="lastdatewidth" >
                <label class="col-md-4 control-label">Last_Date</label>
                <input type="text" id="Last_Date" class="form-control" name="lastdate" required />
				<span class="red" style="color:red; position: absolute;" id="Last_Date-alert"></span>
			</div>

			
			<div class="form-group">
                <label class="col-md-4 control-label">Final_Date</label>
                <input type="text" id="finaldate" class="form-control" name="final_date" required />
				<span class="red" style="color:red; position: absolute;" id="final_date-alert"></span>
			</div>
						
			
			<div class="form-group">
                <label class="col-md-4 control-label">Advertisement</label>
                <input type="file" name="advt" id="Advertisement" class="form-control" required />
				<span class="red" style="color:red; position: absolute;" id="Advertisement-alert"></span>
			</div>
		
			
			<div class="form-group">
                <label class="col-md-4 control-label">Apply</label>
                <input type="text" id="Apply" class="form-control" name="applynow" required />
				<span class="red" style="color:red; position: absolute;" id="Apply-alert"></span>
			</div>


			<div class="sbm-btn">
				<input class='btn btn-primary btn-info' type="submit" value="Submit" id='btnsubmit' />
			</div>
			
			</div>
			
		</form>
	</div>	
</div>
