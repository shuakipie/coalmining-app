@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Milestone</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				 @if (Session::has('message'))
						<div class="alert alert-success">
							<strong>Status!</strong>  {{ Session('message') }} 
        				</div>
					@endif



					<form class="form-horizontal" role="form" method="POST" action="{{ url('/milestones/docreate') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Milestone*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="milestone" value="">
							</div>
						</div>
                      	<div class="form-group">
							<label class="col-md-4 control-label">Assigned Group*</label>
							<div class="col-md-6">
                            <select class="form-control" name="group">
    @foreach ($groups as $group)
  <option value="{{ $group->id }} ">{{ $group->category}}</option>
  @endforeach
</select>
<a href="{{ URL::to('groups/create') }}">+ Create New Group</a>

							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
								   Create Milestone
								</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
