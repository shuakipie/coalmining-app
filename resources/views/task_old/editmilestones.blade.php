@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Milestone</div>
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



                     @foreach ($milestones as $milestone)
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/milestones/update') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input name="id" type="hidden" value="{{ $milestone->id }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Milestone*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="milestone" value="{{ $milestone->milestone }}">
							</div>
						</div>
                       	<div class="form-group">
							<label class="col-md-4 control-label">Group*</label>
							<div class="col-md-6">
                            <select class="form-control" name="group">
  <option value="{{ $milestone->group->id }}" selected>{{ $milestone->group->category }}</option>
    @foreach ($group as $groups)
  <option value="{{ $groups->id }} ">{{ $groups->category }}</option>
  @endforeach
</select>

							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Update
								</button>
                                <a class="btn btn-default" href="{{url('/milestones') }}">
Cancel
								</a>
							</div>
						</div>
					</form>
                        @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
