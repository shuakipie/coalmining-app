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

.box{
  border:1px solid #D7DDE4;
  border-radius: 10px;
  width:240px;
  /*text-align: center; */
  background: white;
  margin-right: 10px;
  padding:10px
}
.box .left-side{
width:30%;
float:left;
}
.box .right-side{
width:70%;
float:left;
text-align: right;
}

.box h3{
  font-size: 25px;
}

</style>
@stop

@section('content')
<article class="content charts-morris-page">
<div class="title-block">
<h3 class="title">{{ trans('lang.dashboard')}}</h3>
                        <p class="title-description"> Ginos Small Scale Coal Mining </p>
                    </div>

                      <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                                           <div class="row">
                                            <div class="col-md-3 box">
                                              <div class="left-side">
                                                <h3><i class="fa fa-group fa-3x"></i></h3>
                                               </div> 
                                               <div class="right-side">
                                                <strong>{{ trans_choice('lang.employee', $employee_count)}} </strong>
                                                <h3>{{ $employee_count }}</h3>
                                               </div> 
                                            </div>

                                            <div class="col-md-3 box">
                                              <div class="left-side">
                                                <h3><i class="fa fa-folder-open-o fa-3x"></i></h3>
                                               </div> 
                                               <div class="right-side">
                                                <strong>{{ trans_choice('lang.project', $project_count)}}</strong>
                                                <h3>{{ $project_count }}</h3>
                                               </div> 
                                            </div>

                                         <!--  <div class="col-md-3 box">
                                              <div class="left-side">
                                                <h3><i class="fa fa-money fa-3x"></i></h3>
                                               </div> 
                                               <div class="right-side">
                                                <strong>{{ trans('lang.payroll')}}</strong>
                                                <h3>{{ $pay_total }}</h3>
                                               </div> 
                                            </div> -->

                                         <!--   <div class="col-md-3 box">
                                              <div class="left-side">
                                                <h3><i class="fa fa-clock-o fa-3x"></i></h3>
                                               </div> 
                                               <div class="right-side">
                                                <strong>{{ trans('lang.timesheet')}}</strong>
                                                <h3>{{ $hours_total }}</h3>
                                                <small>{{ trans('lang.working')}} {{ trans('lang.hours')}}</small>
                                               </div> 
                                            </div>-->

                                           <!-- <div class="col-md-3 box">
                                              <h3><i class="fa fa-folder-open-o fa-2x"></i><br /> {{ $project_count }} Projects</h3>
                                            </div>
                                            <div class="col-md-3 box">
                                              <h3><i class="fa fa-money fa-2x"></i><br /> ${{ $pay_total }}</h3>
                                            </div>
                                            <div class="col-md-3 box">
                                              <h3><i class="fa fa-clock-o fa-2x"></i><br /> </h3>
                                            </div> -->

                                          </div>

                                           
                                        
                                    </div>
                                </div>
                         </section>
                    

                    <section class="example">
                           <div class="row">
                          <!--  <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">{{ trans('lang.daily')}} {{ trans('lang.performance')}}</h3> </div>
                                        <section class="example">
<?php
/*
foreach ($hours_data as $hours2){
          echo $hours2;
          echo "<br />";
        }
*/        
?>
       
                                           <div id="hours-chart"></div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                      </div>
                     
                    </section>

                    
                    <section class="section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">
             {{ trans('lang.top')}} 5 {{ trans_choice('lang.performer', 5)}}
            </h3> </div>
                                        <section class="example">
                                            <div id="top-earners"></div>
                                        </section>
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">
              {{ trans('lang.today')}} {{ trans('lang.attendance')}}
            </h3> </div>
                                        <section class="example">
                                           @foreach($emps as $emp)
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">{{ $emp->work_in }}
    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span>
    {{ $emp->emp->name }}
  </li>
</ul>

@endforeach
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                   
                </article>
                @section('script')

<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
<script src="//cdn.jsdelivr.net/spinjs/1.3.0/spin.min.js"></script>

<script>
Morris.Bar({
  element: 'top-earners',
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


Morris.Area({
  element: 'hours-chart',
  data: [
 <?php
if(count($hours_data) > 0){
foreach ($hours_data as $data){
  $value=date('H', strtotime($data->total)).".".date('i', strtotime($data->total));
  $value=floatval($value);
  //echo $value;
   echo "{ y: '".$data->date."', a: ".$value." },";
}
}
?>  
    /*
    { y: '2006', a: 100, b: 90 },
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
    */
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Working Hours'],
  lineColors: ['#E57B13']
  //parseTime: false
});

</script>
@stop

@endsection
