@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Projects
                    <div class="muted pull-right">
                        <a href="{{ URL('/groups/create/')}}" class="btn btn-success btn-xs">Add Group</a>
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


                     @if(count($groups) > 0)


                     <table class="table table-hover sortable">
                     <thead>
                         <tr>
                            <th>Id</th>
                            <th>Group</th>
                            <th></th>
                         </tr>
                     </thead>
                     <tbody>
                      @foreach ($groups as $group)
                     <tr>
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->category }}</td>
                            <td>
<p class="text-right">
<a class="btn btn-info btn-xs"  href="{{ URL::to('groups/edit/' . $group->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>&nbsp;<a class="btn btn-xs btn-danger" href="{{ URL::to('groups/delete/' . $group->id) }}" data-toggle="tooltip" data-placement="top" title="Warning: Group Deletion will delete all milestones, tasks under the group" onclick="return confirm('Warning: Group Deletion will delete all milestones, tasks under the group. Are your sure?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>&nbsp;
<a class="btn btn-default btn-xs"  href="{{ URL::to('groups/milestones/' . $group->id) }}"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> View Milestones</a>
<a class="btn btn-default btn-xs " href="{{ URL::to('groups/tasks/' . $group->id) }}"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> View Tasks</a>
<a class="btn btn-default btn-xs " href="{{ URL::to('groups/status/' . $group->id) }}"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> Status</a>
</p>

                           </td>

                        </tr>
                         @endforeach
                     </tbody>

                     </table>
                       {!! str_replace('/?', '?', $groups->render()) !!}

                    @else
                       <h3>Oops! No Groups Found!</h3>
                    @endif


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
