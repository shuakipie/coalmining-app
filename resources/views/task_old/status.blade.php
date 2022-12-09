@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
          <!--	Welcome back {{ Auth::user()->name }},<br /> -->
			<div class="panel panel-primary">
				<div class="panel-heading">Status of {{ $group }} Task Group</div>
				<div class="panel-body">
<p class="text-right">  <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> <strong > Finished Tasks</strong></p>

 @for ($j = 0; $j < count($milestones) ; $j++)
                	<div class="col-md-3 ">
               	<div class="panel panel-default">
				<div class="panel-heading">{{ $milestones {$j}->milestone }} </div>
    			<div class="panel-body">
@for ($i = 0; $i < $task_count{$j} ; $i++)

@if($tasks[$j][$i]->status==0)
<p class="text-center">                   {{ $tasks {$j} {$i} ->item }}</p>
@else
<p class="text-center">  <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>                 <strong >{{ $tasks {$j} {$i} ->item }}</strong></p>
@endif

@endfor
				</div>
			</div>
            </div>
@endfor
 			</div>
	</div>

			</div>

		</div>
	</div>


@endsection
