<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GINO'S SMALL SCALE COAL MINING</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/hover-min.css') }}" rel="stylesheet">
    <link href="{{ asset('/datetime/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    

  
<script src="{{ asset('/js/sortable.js') }}"></script>

           <script>
           $('.tool-tip').tooltip()
           </script>
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <style type="text/css">
    <!--
    tr.ok td{
text-decoration: line-through;
    }

  .btn-link2{
    color:red;
  }

  
  body{
    padding-top: 50px;
    /*background: #374A5D;
    background: #E57B13;*/
    
  }
  .panel-home{
    background: #E57B13;
    color:white;
    text-align: right;
  }
  
  .table-striped2 th{
    background: #272822;
    color:white;
    font-weight: normal;
    border-bottom:2px solid black;
  }
  .panel-home2{
    background: #643C16;
    color:white;
    text-align: right;
  }
  
  .big{
    font-size: 65px;
    text-align: left;
    
  }


/*Now the Navbar CSS*/

.jumbotron{
  min-height:80px;
  padding:8px;
  background: #272822;
   -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}
.container .jumbotron {
    border-radius: 6px;
}

.jumbotron p{
  padding-top: 15px;
   color:#F5F5F5;
}
.jumbotron h1{
  font-size:40px;
  color:#F5F5F5
}
.navbar-custom {
    /* background-color: #43484D; */
    background: white;
    color:#272822;
    border-radius:0;
    min-height:auto;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
    /*border-bottom:1px solid #F5F5F5; */
}
  
.navbar-custom .navbar-nav > li > a {
     color: #272822;
    }
.navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
    color: #E57B13;
    background-color:transparent;
}


      
.navbar-custom .navbar-nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    
}
      
.navbar-custom .navbar-brand {
   color:#FFF;
   padding:2px;
   /* background: #2ABF9E; */
   /*background: #28A7E9; */
   
}

.navbar-custom .navbar-toggle,
.navbar-custom .nav .open>a, .navbar-custom .nav .open>a:hover, .navbar-custom .nav .open>a:focus {
/*   background:#E57B13;
   color:white;
   */
}

.navbar-custom .icon-bar {
   border: 1px solid #43484D;                
}

/*-- change navbar dropdown color --*/
.navbar-custom .navbar-nav .open .dropdown-menu>li>a,.navbar-custom .navbar-nav .open .dropdown-menu {
    color:#43484D;

}

.navbar-custom .active{
  background:#F5F5F5;
}
.navbar-custom .navbar-nav > li.active > a {
  color:#272822;
}

/*
.btn {
  box-shadow: 0 3px 0 0 #272822;
}
.btn:active, .btn.active {
  box-shadow: none;
  margin-bottom: -3px;
  margin-top: 3px;
}
*/
.btn-link, .btn-link2{
  box-shadow: none;
}
.breadcrumb{
  background: transparent;
}
.breadcrumb li{
   color:#F9F9F9;
}
.breadcrumb li a{
   text-decoration: underline;
   color:#F9F9F9;
}

.btn-default{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
}


  -->
    </style>
@yield('styles')     
</head>
<body>
  


  @if (!Auth::guest())
<?php
    $url=$_SERVER["REQUEST_URI"];
    $keys = parse_url($url); // parse the url
    //print_r($keys);
    $path = explode("/", $keys['path']); // splitting the path
    //print_r($path);
    $sel=$path[4];
    
    //$last = end($path); // get the value of the last element
?>  
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
          <img alt="Brand" src="{{ asset('images/smarthrm-logo.png') }}">
          <!--<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> HRM 1.0 -->
        </a>
			</div>
	
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav">
					<li <?php if($sel=='dashboard') echo 'class="active"'; ?>><a href="{{ url('/admin/dashboard') }}"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</a></li>
          <li <?php if($sel=='emp') echo 'class="active"'; ?>><a href="{{ url('/admin/emp') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Employees</a></li>
           <li <?php if($sel=='projects') echo 'class="active"'; ?>><a href="{{ url('/admin/projects') }}"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp; Projects
            @if($project_count>0)
            <span class="badge">{{ $project_count }}</span>
            @endif
          </a></li>
             <li <?php if($sel=='leave') echo 'class="active"'; ?>><a href="{{ url('/admin/leave') }}"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span> Leave Requests
                @if($leave_count>0)
            <span class="badge">{{ $leave_count }}</span>
            @endif
            </a></li>
                <li <?php if($sel=='timesheet') echo 'class="active"'; ?>><a href="{{ url('/admin/timesheet') }}"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Timesheet</a></li>
                    
              <li  <?php if($sel=='dept') echo 'class="dropdown active"'; else echo 'class="dropdown"'; ?>>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
               <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Departments<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/admin/dept') }}">Departments</a></li>                   
                    <li><a href="{{ url('/admin/posting') }}">Postings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('/admin/company-hierarchy') }}">Company Hierarchy</a></li>

              </ul>
          </li>

                        
                                            
              <li  <?php if($sel=='attendance') echo 'class="dropdown active"'; else echo 'class="dropdown"'; ?>>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Attendance<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                   <li><a href="{{ url('/admin/attendance') }}">Attendance Log</a></li>
                   <li><a href="{{ url('/admin/attendance/guests') }}">Guest Vists</a></li>
                   <li role="separator" class="divider"></li>
                    <li><a href="{{ url('/admin/attendance/calendar-view') }}">Calendar View</a></li>
             </ul>
            </li>
                        

                   
            <li  <?php if($sel=='payroll') echo 'class="dropdown active"'; else echo 'class="dropdown"'; ?>>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Payroll <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/admin/payroll') }}">Generate</a></li>
                    <li><a href="{{ url('/admin/payroll/statements') }}">Salary Slips</a></li>
                  <!--  <li role="separator" class="divider"></li>
                    <li><a href="{{ url('/admin/salary') }}">+ Salary Logs</a></li>                     -->

            </ul>
          </li>

				</ul>
                

				<ul class="nav navbar-nav navbar-right">
<li  <?php if($sel=='settings') echo 'class="dropdown active"'; else echo 'class="dropdown"'; ?>>
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Settings <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/admin/settings/profile') }}">Change Password</a></li>
                <li><a href="{{ url('/admin/settings/general') }}">General Settings</a></li>
                <li><a href="{{ url('/admin/settings/system-logs') }}">System Logs</a></li>
                <!-- <li><a href="{{ url('/optimize-db') }}">Optimize DB</a></li> -->
							</ul>
						</li>
<li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
					
				</ul>
        
			</div>
		</div>
	</nav>
  @endif

  
	@yield('content')

	<!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> 
  <script type="text/javascript">
    $(document).ready(function()
    {
        $('.collapse').collapse()
        $('#model1').modal(options);
        $('[data-toggle="tooltip"]').tooltip({
            'placement': 'top'
        });

</script>
  <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script src="{{ asset('/datetime/js/bootstrap-material-datetimepicker.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
       
      $('#date').bootstrapMaterialDatePicker
      ({
        time: false,
        clearButton: true
      });

      $('#date2').bootstrapMaterialDatePicker
      ({
        time: false,
        clearButton: true
      });


      $('#time').bootstrapMaterialDatePicker
      ({
        date: false,
        shortTime: false,
        format: 'HH:mm'
      });

      $('#date-format').bootstrapMaterialDatePicker
      ({
        format: 'YYYY-m-d HH:mm'
      //$('#date-format').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm' });
      
      });
      $('#date-fr').bootstrapMaterialDatePicker
      ({
        format: 'YYYY-M-d HH:mm',
        lang: 'fr',
        weekStart: 1, 
        cancelText : 'ANNULER',
        nowButton : true,
        switchOnClick : true
      });

      $('#date-end').bootstrapMaterialDatePicker
      ({
        weekStart: 0, format: 'YYYY-MM-D', time: false,
      });
      
      $('#date-start').bootstrapMaterialDatePicker
      ({
        weekStart: 0, format: 'YYYY-MM-D', time: false, shortTime : true
      }).on('change', function(e, date)
      {
        $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
      });

       $('#min-date').bootstrapMaterialDatePicker({ format : 'YYYY-m-d', minDate : new Date() });

      //time start, end
      $('#time-end').bootstrapMaterialDatePicker
      ({
        weekStart: 0, format: 'YYYY-MM-D HH:mm'
      });
      
      $('#time-start').bootstrapMaterialDatePicker
      ({
        weekStart: 0, format: 'YYYY-MM-D HH:mm', shortTime : true
      }).on('change', function(e, date)
      {
        $('#time-end').bootstrapMaterialDatePicker('setMinTime', date);
      });

      $('#min-time').bootstrapMaterialDatePicker({ format : 'YYYY-m-d HH:mm', minDate : new Date() });


      //$('#min-date').bootstrapMaterialDatePicker({ format : 'YYYY-m-d HH:mm', minDate : new Date() });

      $.material.init()
    });
    </script>
  
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script> -->

    <!-- Bootstrap Functions -->

	<!--AngularJS-->
	  <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>  -->


@yield('script')


    
</body>
</html>
