<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SWOT HRM - Human Resource Management</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
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
.navbar-custom{
  background:#CC6600;
  border-bottom: 1px solid;
}
.navbar-custom a{
  color:#FFF;
 }

.open{
    background:black;
  }

  .tree-line{
    height:10px;
    background:#CCC; 
  }


  -->
    </style>

</head>
<body>
  
	<nav class="navbar navbar-default ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">HRM 1.0</a>
			</div>
               	@if (!Auth::guest())
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
          <li><a href="{{ url('/admin/emp') }}">Employees</a></li>
           <li><a href="{{ url('/admin/projects') }}">Projects</a></li>
             <li><a href="{{ url('/admin/leave') }}">Leave Requests</a></li>
                <li><a href="{{ url('/admin/timesheet') }}">Timesheet</a></li>
                    
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Departments<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/admin/dept') }}">Departments</a></li>                   
                    <li><a href="{{ url('/admin/posting') }}">Postings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('/admin/company-hierarchy') }}">Company Hierarchy</a></li>

              </ul>
          </li>

                        
                                            
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Attendance<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                   <li><a href="{{ url('/admin/attendance') }}">Attendance Log</a></li>
                   <li><a href="{{ url('/admin/attendance/guests') }}">Guest Vists</a></li>
             </ul>
            </li>
                        

                   
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Payroll<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/admin/payroll') }}">Generate</a></li>
                    <li><a href="{{ url('/admin/payroll/statements') }}">Payroll</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('/admin/salary') }}">+ Salary Logs</a></li>                    

            </ul>
          </li>

				</ul>
                @endif

				<ul class="nav navbar-nav navbar-right">

					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
						<li><a href="{{ url('/auth/register') }}"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Register</a></li>
					@else

						<li class="dropdown">

						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/profile') }}">Edit Profile</a></li>
<!--								<li><a href="{{ url('/auth/logout') }}">Logout</a></li> -->
							</ul>
						</li>
                        	<li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

  
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
    $('[data-toggle="tooltip"]').tooltip({
    'placement': 'top'
});
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      orientation: 'auto top',
        startDate: '+1d'
      });
    </script>
<script>
    $(function(){
      // bind change event to select
      $('#group_select').bind('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
     $('#milestone_select').bind('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
     $('#priority_select').bind('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>
	<!--AngularJS-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
