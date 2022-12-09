@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Milestones
                    <div class="muted pull-right">
                        <a href="{{ URL('/milestones/create/')}}" class="btn btn-success btn-xs">Add Milestone</a>
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


                     @if(count($milestones) > 0)


                     <table class="table table-hover sortable">
                     <thead>
                         <tr>
                            <th>Id</th>
                            <th>Milestone</th>
                            <th>Group</th>
                            <th></th>
                         </tr>
                     </thead>
                     <tbody>
                      @foreach ($milestones as $milestone)
                     <tr>
                            <td>{{ $milestone->id }}</td>
                            <td>{{ $milestone->milestone }}</td>
                            <td>{{ $milestone->group->category }}</td>
                            <td>
<a class="btn btn-info btn-xs"  href="{{ URL::to('milestones/edit/' . $milestone->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>&nbsp;<a class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Warning: Milestone Deletion will delete all tasks under the milestone" href="{{ URL::to('milestones/delete/' . $milestone->id) }}" onclick="return confirm('Warning: Milestone Deletion will delete all tasks under the milestone. Are your sure?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>&nbsp;<a class="btn btn-default btn-xs"  href="{{ URL::to('milestones/tasks/' . $milestone->id) }}"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> View Tasks</a>
                           </td>
                        </tr>
                         @endforeach
                     </tbody>

                     </table>
                       {!! str_replace('/?', '?', $milestones->render()) !!}

                    @else
                       <h3>Oops! No milestones Found!</h3>
                    @endif


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
