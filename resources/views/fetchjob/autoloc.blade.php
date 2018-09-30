					@foreach($locs as $loc)
						<li class="lists">
							<div class="markmydivloc" style="padding: .2em;" >
								<div class="check_box check_loc" >
									<input type="checkbox" id="id-loc" name="markerType" value="{{$loc->id}}" class="class-loc" style="cursor: pointer;"/>
								</div>

								<div id="list-name">
										<span class="pull-right">({{$Jobs->where('jobloc_id',$loc->id)->count()}})</span>
									<b>{{ucwords($loc->name)}}</b>
								</div>
							</div>
						</li>
					@endforeach