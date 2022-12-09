@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create New Task</div>
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



					<form class="form-horizontal" role="form" method="POST" action="{{ url('/tasks/docreate') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Task Title*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="title" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Task Description*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="description" value="" >
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Schedule Date*</label>
							<div class="col-md-6">
                            <div class='input-group date'>
<input type='text' class="form-control" name="schedule_dt" data-provide="datepicker" />
  <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span></div>

							</div>
						</div>
                        	<div class="form-group">
							<label class="col-md-4 control-label">Milestone*</label>
							<div class="col-md-6">
                            <select class="form-control" name="milestone">
    @foreach ($milestone as $milestones)
  <option value="{{ $milestones->id }} ">{{ $milestones->milestone }}</option>
  @endforeach
</select>
<p class="text-right">
<a href="{{ URL::to('milestones/create') }}">+ Create New Milestone</a>
</p>

							</div>
						</div>
                        	<div class="form-group">
							<label class="col-md-4 control-label">Priority</label>
							<div class="col-md-6">
                            <select class="form-control" name="priority">

  <option value="0">LOW</option>
  <option value="1">MEDIUM</option>
  <option value="2">HIGH</option>

    </select>

							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
								   Create Task
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
