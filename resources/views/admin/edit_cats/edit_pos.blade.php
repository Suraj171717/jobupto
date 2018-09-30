

			
	@foreach($posts as $post)
				
		<form action='' id='posadd' enctype="multipart/form-data" method="post">
			<div class="input-group">
				<input type="hidden" name="id" value="{{ $post->id }}" />
				<input type="text"  name="name" class="form-control" style="width: 75%;" value="{{ $post->name }}" required aria-describedby="basic-addon2">
				<input class="input-group-addon" type="submit" value="Edit" style="cursor:pointer; width:25%; padding:9px; background-color: #f36969; color: black;" />
			</div>
		</form>
		
	@endforeach
