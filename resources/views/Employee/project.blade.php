@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">

		<div class="col-md-10 col-md-offset-1">
<p class="text-right">
<strong>Filter:</strong>&nbsp; <select id="group_select">
 <option value="" selected>By Group</option>
 @foreach ($groups as $group)
<option value="{{ URL::to('groups/tasks/' . $group->id.'/') }}">{{ $group->category }}</option>
@endforeach
</select> /
<select id="milestone_select">
 <option value="" selected>By Milestone</option>
 @foreach ($milestones as $milestone)
<option value="{{ URL::to('milestones/tasks/' . $milestone->id.'/') }}">{{ $milestone->milestone }}</option>
@endforeach
</select>   /
<select id="priority_select">
 <option value="" selected>By Priority</option>
<option value="{{ URL::to('tasks/view/priority/low/') }}">Low</option>
<option value="{{ URL::to('tasks/view/priority/medium/') }}">Medium</option>
<option value="{{ URL::to('tasks/view/priority/high/') }}">HIgh</option>
</select>
<!--<select id="dynamic_select">
    <option value="" selected>Pick a Website</option>
    <option value="http://www.google.com/">Google</option>
    <option value="http://www.youtube.com/">YouTube</option>
    <option value="http://www.stackoverflow.com/">Stack Overflow</option>
</select>
-->


<!--<strong>Priority</strong>&nbsp;&nbsp;<span class="label label-success">Low</span>&nbsp;<span class="label label-warning">Medium</span>&nbsp;<span class="label label-danger">High</span> -->
<!--<img src="{{ asset('/images/0.png') }}">&nbsp;Low&nbsp;&nbsp;<img src="{{ asset('/images/1.png') }}">&nbsp;Medium&nbsp;&nbsp;<img src="{{ asset('/images/2.png') }}">&nbsp;High -->
</p>

			<div class="panel panel-default">
				<div class="panel-heading">My Tasks
                    <div class="muted pull-right">
                        <a href="{{ URL('/tasks/create/')}}" class="btn btn-success btn-xs">Add Task</a>
                     </div>
                </div>
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
							<strong>  {{ Session('message') }} </strong>
        				</div>
					@endif


                     @if(count($tasks) > 0)


                     <table class="table table-hover sortable">
                     <thead>
                         <tr>
                         <th></th>
                            <th>Task</th>
                            <th>Group -> Milestone</th>
                            <th>Schedule Dt</th>
                            <th>Finished Dt</th>
                            <th></th>
                         </tr>
                     </thead>
                     <tbody>
                      @foreach ($tasks as $task)
                       @if($task->status==0)
                        <tr>
                        @else
                       <tr class='ok'>
                         @endif
                        <td>
                        @if($task->status==0)

  <a href="{{ URL::to('tasks/finished/' . $task->id . '/1') }}">  <img src="{{ asset('/images/unchecked_checkbox.png') }}"></a>
<!--<form method="POST" action="{{ URL::to('tasks/finished/' . $task->id) }}">
<form method="POST" action="{{ URL::to('tasks/finished/') }}">
<input type="hidden" name="idw" value="{{ $task->id }}" />
<input type="checkbox" aria-label="..." onClick="this.form.submit()">
</form>
-->
@else
  <a href="{{ URL::to('tasks/finished/' . $task->id.'/0') }}">  <img src="{{ asset('/images/checked_checkbox.png') }}"></a>
<!-- <img src="{{ asset('/images/checked_checkbox.png') }}"> -->
@endif
</td>
          <!--                  <td>



     <!--                      <img src="{{ asset('/images/'.$task->priority.'.png') }}"> -
     </td> -->
                            <td>{{ $task->item }}
@if($task->priority==0)
<a href="{{ URL::to('tasks/view/priority/low') }}"><span class="label label-success">Low</span></a>
@elseif($task->priority==1)
<span class="label label-warning">Medium</span>
@else
<span class="label label-danger">High</span>
@endif<br />
                            <small>{{ $task->description }}</small>
                            </td>
                            <td>{{ $task->milestone->group->category }}<br />
                            &nbsp;&raquo; <small>{{ $task->milestone->milestone }}</small></td>
                         <!--   <td>{{ $task->created_at }}</td> -->
                            <td>{{ $task->schedule_dt }}</td>
                            <td>
                            @if($task->finish_dt!="0000-00-00")
                            {{ $task->finish_dt }}
                            @else
                            N/a
                            @endif
                            </td>
                            <td>
<a class="btn btn-info btn-xs"  href="{{ URL::to('tasks/edit/' . $task->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp;<a class="btn btn-xs btn-danger" href="{{ URL::to('tasks/delete/' . $task->id) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a>&nbsp;<a class="btn btn-xs btn-warning" href="{{ URL::to('tasks/share/' . $task->id) }}"><span class="glyphicon glyphicon-share" aria-hidden="true"></span></a>
                         <!--    <div class="btn-group">
	<button class="btn btn-info">Update</button>
    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" style="z-index:0;"><span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a href="{{ URL::to('tasks/edit/' . $task->id) }}">Edit</a></li>
    <li><a href="{{ URL::to('tasks/delete/' . $task->id) }}">Delete</a></li>
     <li class="divider"></li>
    </ul>
    </div> -->

                            </td>
                        </tr>
                         @endforeach
                     </tbody>

                     </table>
                       <!--  <?php echo $tasks->render(); ?> -->
                       {!! str_replace('/?', '?', $tasks->render()) !!}
<!--                        {!! $tasks->render() !!} -->
                    @else
                       <h3>Oops! No Tasks Found!</h3>
                    @endif


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
