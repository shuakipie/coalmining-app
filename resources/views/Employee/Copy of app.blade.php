<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SWOT HRM - Human Resource Management</title>

  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('/datetime/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    

  
<script src="{{ asset('/js/sortable.js') }}"></script>


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
    padding-top: 70px;
    
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


.navbar-custom {
    /* background-color: #43484D; */
    background: #DC8C3E;
    color:#ffffff;
    border-radius:0;
    min-height:auto;
}
  
.navbar-custom .navbar-nav > li > a {
     color: #43484D;
    }
.navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
    color: #ffffff;
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
   
}

.navbar-custom .icon-bar {
   border: 1px solid #43484D;                
}

/*-- change navbar dropdown color --*/
.navbar-custom .navbar-nav .open .dropdown-menu>li>a,.navbar-custom .navbar-nav .open .dropdown-menu {
    color:#43484D;
}

/*
.btn{
  box-shadow: 0 2px 0 0 #525252;
  margin-left: 2px;
  margin-right: 2px
}
.btn-link, .btn-link2{
  box-shadow: none;
}

.btn-primary{
  background:#C1272D;
  border:none;
 }
 */
 .navbar-brand {
   padding:2px;
}


.btn:hover{
  background: #525252;
}



  -->
    </style>
@yield('styles')     
</head>
<body>
 <nav class="navbar navbar-default navbar-fixed-top">
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
          <li><a href="{{ url('/employee/dashboard') }}"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</a></li>
             <li><a href="{{ url('/employee/leave') }}"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span> Leave Requests
            </a></li>
                <li><a href="{{ url('/employee/timesheet') }}"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Timesheet</a></li>
                    
              

                   <li><a href="{{ url('/employee/attendance') }}"> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>  Attendance</a></li>     
                                            
              

                   
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Payroll <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/employee/payroll') }}">Salary Slips</a></li>
            </ul>
          </li>

        </ul>
                

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ session('emp_name') }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/employee/profile') }}">My Profile</a></li>
                <li><a href="{{ url('/employee/password') }}">Change Password</a></li>
              </ul>
            </li>
<li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
          
        </ul>
        
      </div>
    </div>
  </nav>
  

  
  @yield('content')

  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> 
  <script type="text/javascript">
  $('#model1').modal(options);
    $(document).ready(function()
    {
        $('.collapse').collapse();
        
        $('[data-toggle="tooltip"]').tooltip({
            'placement': 'top'
        });
        $('.tool-tip').tooltip();
      });

</script>
<!--  <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>-->
<script src="{{ asset('/js/material.js') }}"></script>
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
@yield('scripts')


    
</body>
</html>
