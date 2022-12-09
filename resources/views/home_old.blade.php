@extends('app')
@section('styles')
<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
<style>
    .red > li.active > a, .red > li.active > a:focus {
        color: white;
        background-color: #D9534F;
    }

        .red > li.active > a:hover {
            background-color: #D33B36;
            color:white;
        }
.red > li > a{
  color:#D33B36;
}
</style>
@stop

@section('content')
<div class="container">
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<p>Hi, {{ Auth::user()->name }} Welcome to GINO'S SMALL SCALE COAL MINING</p>

	</div>
	<h1>Dashboard</h1>
	<div class="row">

		<div class="col-md-12 col-md-offset-0">
          
      
      		

                <div class="col-md-3">
                    <div class="panel">
        <div class="panel-heading panel-home">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="glyphicon glyphicon-user big" aria-hidden="true"></h1>
                        </div>
                        <div class="col-md-8">
                            <h3>Employees</h3>
                            <h3>{{ $employee_count }}</h3>
                        </div>
                        
                    </div>
      </div>
            </div>
          </div>
          <div class="col-md-3">
             <div class="panel">
        <div class="panel-heading panel-home2">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="glyphicon glyphicon-tasks big" aria-hidden="true"></h1>
                        </div>
                        <div class="col-md-8">
                            <h3>Projects</h3>
                            <h3>{{ $project_count }}</h3>
                        </div>
                        
                    </div>
      </div>
            </div>
            </div>
            <div class="col-md-3">
             <div class="panel">
        <div class="panel-heading panel-home">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="glyphicon glyphicon-certificate big" aria-hidden="true"></h1>
                        </div>
                        <div class="col-md-8">
                            <h3>Payroll Paid</h3>
                            <h3>$ {{ $pay_total }}</h3>
                        </div>
                        
                    </div>
      </div>
            </div>
          </div>
          <div class="col-md-3">
             <div class="panel">
        <div class="panel-heading panel-home2">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="glyphicon glyphicon-time big" aria-hidden="true"></h1>
                        </div>
                        <div class="col-md-8">
                            <h3>Hours Spent</h3>
                            <h3>{{ $hours_total }}</h3>
                        </div>
                        
                    </div>
      </div>
            </div>
          </div>

               	
        <hr />
 
<div class="row" data-wow-delay="0.6s">
<div class="col-md-12">    
    <div class="col-md-6">
                <div class="panel">
                <div class="panel-heading panel-home">Top 5 Performers</div>
                <div class="panel-body">
                    <div id="bar-example"></div>
            </div>
            </div>
            </div> 
<div class="col-md-6">
                <div class="panel">
                <div class="panel-heading panel-home">Today Attendance</div>
                <div class="panel-body">
@foreach($emps as $emp)
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">{{ $emp->work_in }}
    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span>
    {{ $emp->emp->name }}
  </li>
</ul>

@endforeach
            </div>
            </div>
</div>
</div>
</div>

 
       
               

            	
			
  

			</div>

		</div>
	</div>
@section('script')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
<script src="//cdn.jsdelivr.net/spinjs/1.3.0/spin.min.js"></script>

<script>
Morris.Bar({
  element: 'bar-example',
  data: [
 <?php
if(count($employees) > 0){
foreach ($employees as $emp){
   echo "{ y: '".$emp->emp->name."', a: ".date('H', strtotime($emp->total))." },";
}
}
?>
 
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Worked Hours'],
  barColors: ['#E57B13']
});


Morris.Bar({
  element: 'bar-example2',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});

</script>
@stop



@endsection
