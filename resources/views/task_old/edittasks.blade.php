@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Task</div>
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



                     @foreach ($tasks as $task)
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/tasks/update') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input name="id" type="hidden" value="{{ $task->id }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Task*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="title" value="{{ $task->item }}">
							</div>
						</div>
                         	<div class="form-group">
							<label class="col-md-4 control-label">Description*</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="description" value="{{ $task->description }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Schedule Date*</label>
							<div class="col-md-6">
							    <div class='input-group date'>
<input type='text' class="form-control datepicker" name="schedule_dt" data-provide="datepicker" value="{{ $task->schedule_dt }}" />
  <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span></div>
							</div>
						</div>

					 	<div class="form-group">
							<label class="col-md-4 control-label">Finished Date</label>
							<div class="col-md-6">
                              <div class='input-group date'>
<input type='text' class="form-control datepicker" name="finish_dt" data-provide="datepicker" value="{{ $task->finish_dt }}" />
  <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span></div>

							</div>
						</div>
                        	<div class="form-group">
							<label class="col-md-4 control-label">Milestone</label>
							<div class="col-md-6">
                            <select class="form-control" name="milestone">
  <option value="{{ $task->milestone->id }}" selected>{{ $task->milestone->milestone }}</option>
    @foreach ($milestone as $milestones)
  <option value="{{ $milestones->id }} ">{{ $milestones->milestone }}</option>
  @endforeach
</select>

							</div>
						</div>
                        	<div class="form-group">
							<label class="col-md-4 control-label">Priority</label>
							<div class="col-md-6">
                            <select class="form-control" name="priority">
@if($task->priority=='0')
 <option value="0" selected>LOW</option>
  <option value="1">MEDIUM</option>
  <option value="2">HIGH</option>
@elseif($task->priority=='1')
 <option value="0">LOW</option>
  <option value="1" selected>MEDIUM</option>
  <option value="2">HIGH</option>
  @else
 <option value="0">LOW</option>
  <option value="1">MEDIUM</option>
  <option value="2" selected>HIGH</option>
@endif
</select>

							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Update
								</button>
                                <a class="btn btn-default" href="{{url('/tasks/view/all/list') }}">
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
