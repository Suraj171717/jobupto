

			
	@foreach($exps as $exp)
				
		<form action='' id='expadd' enctype="multipart/form-data" method="post">
			<div class="input-group">
				<input type="hidden" name="id" value="{{ $exp->id }}" />
				<input type="text"  name="name" class="form-control" style="width: 65%;" value="{{ $exp->name }}" required aria-describedby="basic-addon2">
				<input class="input-group-addon" type="submit" value="Edit" style="cursor:pointer; width:35%; padding:9px; background-color: #f36969; color: black;" />
			</div>
		</form>
		
	@endforeach
