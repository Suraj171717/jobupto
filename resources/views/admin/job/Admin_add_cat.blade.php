		

		

	<div class="job_table">
		
		<div class="loc_box">
		
			<div class="fixx_bar"><b> LOCATIONS </b></div>

			<div class="add_loc_new">
		
				<?php if ($locs->isEmpty()) { ?>
					
					<div class="srry"><h2> No location Available....!! </h2></div>
					
				<?php } else { ?>
				
		
					<table class="myTable" ">
						<thead>
							<tr>
								<th style="padding: 2px; width: 70%; text-align: center;">Location</th>
								<th style="padding: 2px; width: 4%; text-align: center;">Edit</th>					
							</tr>
						</thead>

						@foreach($locs as $loc)
							
							<tr>
								<td style="padding: 2px; width: 70%; text-align: center;"><div class="cell1">{{ $loc->name }}</div></td>
								<td style="padding: 12px 2px; width: 4%; text-align: center;">
									<div class="cell33">
										<input class='btn btn-danger locdel' type="submit" value="Del" data-id="{{ $loc->id }}" />
										<input class='btn btn-info locedit' type="submit" value="Edit" data-id="{{ $loc->id }}" />
									</div>
								</td>
							</tr>
					
						@endforeach
					</table>
					
				<?php } ?>
				
			</div>
			
			<div class="new_add locaddnew">
				<form action='' id='locadd' enctype="multipart/form-data" method="post">
					<div class="input-group">
						<input type="text"  name="name" class="form-control" style="width: 75%;" placeholder="Add New Location" required aria-describedby="basic-addon2">
						<input class="input-group-addon" type="submit" value="Add" style="cursor: pointer;width: 25%;    padding: 9px;" />
					</div>
				</form>
			</div>
	
		</div>
	
	
	
	
		<div class="cat_box">
		
			<div class="fixx_bar"><b> CATEGORIES </b></div>
			
			<div class="add_cat_new">
				
				<?php if ($cats->isEmpty()) { ?>
					
				<div class="srry"><h2> No categories Available....!! </h2></div>
					
				<?php } else { ?>
					
			
				<table class="myTable" >
					<thead>
						<tr>
							<th style="padding: 2px; width: 75%; text-align: center;">Category</th>		
							<th style="padding: 2px; width: 4%; text-align: center;">Edit</th>					
						</tr>
					</thead>

					@foreach($cats as $cat)
						
						<tr>
							<td style="padding: 2px; width: 75%; text-align: center;"><div class="cell2">{{ $cat->name }}</div></td>	
							<td style="padding: 12px 2px; width: 4%; text-align: center;">
								<div class="cell33">
									<input class='btn btn-danger catdel' type="submit" value="Del" data-id="{{ $cat->id }}" />
									<input class='btn btn-info catedit' type="submit" value="Edit" data-id="{{ $cat->id }}" />
								</div>
							</td>
						</tr>
				
					@endforeach
				</table>
				<?php } ?>
				
			</div>

			<div class="new_add cataddnew">
				<form action='' id='catadd' enctype="multipart/form-data" method="post">
					<div class="input-group">
						<input type="text"  name="name" class="form-control" style="width: 75%;" placeholder="Add New Category" required aria-describedby="basic-addon2">
						<input class="input-group-addon" type="submit" value="Add" style="cursor: pointer;width: 25%;    padding: 9px;" />
					</div>
				</form>
			</div>
		
		</div>		
		
		
		<div class="pos_box">
		
			<div class="fixx_bar"><b> POST </b></div>		
		
			<div class="add_post_new">
				
			<?php if ($posts->isEmpty()) { ?>
				
			<div class="srry"><h2> No posts Available....!! </h2></div>
				
			<?php } else { ?>
				
		
			<table class="myTable" >
				<thead>
					<tr>
						<th style="padding: 2px; width: 70%; text-align: center;">Post</th>
						<th style="padding: 2px; width: 4%; text-align: center;">Edit</th>					
					</tr>
				</thead>

				@foreach($posts as $post)
					
					<tr>
						<td style="padding: 2px; width: 70%; text-align: center;"><div class="cell4">{{ $post->name }}</div></td>
						<td style="padding: 12px 2px; width: 4%; text-align: center;">
							<div class="cell33">
								<input class='btn btn-danger posdel' type="submit" value="Del" data-id="{{ $post->id }}" />
								<input class='btn btn-info posedit' type="submit" value="Edit" data-id="{{ $post->id }}" />
							</div>
						</td>
					</tr>
			
				@endforeach
			</table>
			<?php } ?>
		</div>

			<div class="new_add posaddnew">
				<form action='' id='posadd' enctype="multipart/form-data" method="post">
					<div class="input-group">
						<input type="text"  name="name" class="form-control" style="width: 75%;" placeholder="Add New Post" required aria-describedby="basic-addon2">
						<input class="input-group-addon" type="submit" value="Add" style="cursor: pointer;width: 25%;    padding: 9px;" />
					</div>
				</form>
			</div>

			<div class="pos_old_edit"></div>
		
		</div>		
		
		
		
		
		<div class="qual_box">
		
			<div class="fixx_bar"><b> QUALIFICATIONS </b></div>		
		
			<div class="add_qual_new">
				
			<?php if ($quals->isEmpty()) { ?>
				
			<div class="srry"><h2> No Qualification Available....!! </h2></div>
				
			<?php } else { ?>
				
		
			<table class="myTable" >
				<thead>
					<tr>
						<th style="padding: 2px; width: 85%; text-align: center;">Qualification</th>
						<th style="padding: 2px; width: 4%; text-align: center;">Edit</th>					
					</tr>
				</thead>

				@foreach($quals as $qual)
					
					<tr>
						<td style="padding: 2px; width: 85%; text-align: center;"><div class="cell6">{{ $qual->name }}</div></td>
						<td style="padding: 12px 2px; width: 4%; text-align: center;">
							<div class="cell33">
								<input class='btn btn-danger qualdel' type="submit" value="Del" data-id="{{ $qual->id }}" />
								<input class='btn btn-info qualedit' type="submit" value="Edit" data-id="{{ $qual->id }}" />
							</div>
						</td>
					</tr>
			
				@endforeach
			</table>
			<?php } ?>
		</div>

			<div class="new_add qualaddnew">
				<form action='' id='qualadd' enctype="multipart/form-data" method="post">
					<div class="input-group">
						<input type="text"  name="name" class="form-control" style="width: 75%;" placeholder="Add New Qualification" required aria-describedby="basic-addon2">
						<input class="input-group-addon" type="submit" value="Add" style="cursor: pointer;width: 25%;    padding: 9px;" />
					</div>
				</form>
			</div>
			
			<div class="qual_old_edit"></div>
		
		</div>
		
		
		
		<div class="exp_box">
		
			<div class="fixx_bar"><b> EXPERIENCES </b></div>
		
			<div class="add_exp_new">
				
			<?php if ($exps->isEmpty()) { ?>
				
			<div class="srry"><h2> No Experience Available....!! </h2></div>
				
			<?php } else { ?>
				
		
			<table class="myTable" >
				<thead>
					<tr>
						<th style="padding: 2px; width: 76%; text-align: center;">Exprncs</th>
						<th style="padding: 2px; width: 4%; text-align: center;">Edit</th>					
					</tr>
				</thead>

				@foreach($exps as $exp)
					
					<tr>
						<td style="padding: 2px; width: 70%; text-align: center;"><div class="cell7">{{ $exp->name }}</div></td>
						<td style="padding: 12px 2px; width: 4%; text-align: center;">
							<div class="cell33">
								<input class='btn btn-danger expdel' type="submit" value="Del" data-id="{{ $exp->id }}" />
								<input class='btn btn-info expedit' type="submit" value="Edit" data-id="{{ $exp->id }}" />
							</div>
						</td>
					</tr>
			
				@endforeach
			</table>
			<?php } ?>
		</div>
		
			<div class="new_add expaddnew">
				<form action='' id='expadd' enctype="multipart/form-data" method="post">
					<div class="input-group">
						<input type="text"  name="name" class="form-control" style="width: 65%;" placeholder="Add New" required aria-describedby="basic-addon2">
						<input class="input-group-addon" type="submit" value="Add" style="cursor: pointer;width: 35%;    padding: 9px;" />
					</div>
				</form>
			</div>
			
			<div class="exp_old_edit"></div>
		
		</div>		
	
	
	</div>	
							