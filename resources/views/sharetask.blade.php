@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Share Task</div>
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




					<form class="form-horizontal" role="form" method="POST" action="{{ url('/tasks/shareupd') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input name="task_id" type="hidden" value="{{ $taskid }}">





                        	<div class="form-group">
							<label class="col-md-4 control-label">Users</label>
							<div class="col-md-6">
                            <select class="form-control" name="user">
    @foreach ($users as $user)
  <option value="{{ $user->id }} ">{{ $user->name }} -> {{ $user->email }}</option>
  @endforeach
</select>

							</div>
						</div>



						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Update
								</button>
                                <a class="btn btn-default" href="{{url('/tasks/all') }}">
Cancel
								</a>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
