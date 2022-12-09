<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> {{ $brand }} | Employer Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <!-- bootstrap 3.0.2 -->
    <link href="{{ asset('temp_new/css/bootstrap.min.css?version=2') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset('temp_new/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('/datetime/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('temp_new/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('temp_new/css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('temp_new/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
   <!-- <link href="{{ asset('temp_new/css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <!-- <link href="{{ asset('temp_new/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="{{ asset('temp_new/css/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="{{ asset('temp_new/css/style.css?version=2') }}" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">
/*<div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas"> */
aside{   
    background: #39435C;
    /*border:2px solid red; */
}
          </style>
          @yield('styles')   
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                {{ $brand }}
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                       <!-- <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/26115.jpg" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/26115.jpg" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Director Design Team

                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers

                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> Today</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/26115.jpg" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department

                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers

                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> 2 days</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-success" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-info" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li> -->
                                                    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        {{ Config::get('languages')[App::getLocale()] }}
    </a>
    <ul class="dropdown-menu">
        @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <li>
                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                </li>
            @endif
        @endforeach
    </ul>
</li>
                         <?php $rand=rand(1,1000); ?>                  
@if(count($emps) > 0)
@foreach ($emps as $member)  
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span>{{ $member->name}} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">{{ trans('lang.manage')}}</li>

                               <!-- <li>
                                    <a href="#">
                                    <i class="fa fa-clock-o fa-fw pull-right"></i>
                                        <span class="badge badge-success pull-right">10</span> Updates</a>
                                    <a href="#">
                                    <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                        <span class="badge badge-danger pull-right">5</span> Messages</a>
                                    <a href="#"><i class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge badge-info pull-right">3</span> Subscriptions</a>
                                    <a href="#"><i class="fa fa-question fa-fw pull-right"></i> <span class=
                                        "badge pull-right">11</span> FAQ</a>
                                </li> -->

                                <li class="divider"></li>

                                    <li>
                                        <a href="{{ URL('/employee/profile') }}">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                            {{ trans('lang.profile')}}
                                        </a>
                                        <a data-toggle="modal" href="{{ URL('/employee/password') }}">
                                        <i class="fa fa-lock fa-fw pull-right"></i>
                                            {{ trans('lang.password')}}
                                        </a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                            <a href="{{ URL('employee/logout') }}"><i class="fa fa-ban fa-fw pull-right"></i>{{ trans('lang.logout')}}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">

@if($member->photo!="")             


                                    <img src="{{ asset('../uploads/photo/'.$member->photo.'') }}?ver={{ $rand }}" class="img-circle" alt="User Image" />
                                    @else
                                    <img src="{{ asset('images/10.jpg') }}" class="img-circle" alt="User Image" />
                                    @endif
                                
                                </div>
                                <div class="pull-left info">
                                    <p>{{ trans('lang.hello')}}, {{ $member->name }}</p>
                                    <h4><span class="label label-success">{{ $member->post->post}}</span></h4>
                                    @endforeach
                                    @endif

                                    <a href="#"><i class="fa fa-circle text-success"></i>
                                        {{ trans('lang.online')}} </a>
                                </div>
                            </div>
                            <!-- search form -->
                           <!-- <form action="#" method="get" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form> -->
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
<?php
$url=Route::getCurrentRoute()->getPath();
?>                            
                            <ul class="sidebar-menu">
                                <li <?php if($url=="employee/dashboard") echo 'class="active"'; ?> >
                                    <a href="{{ URL('employee/dashboard') }}">
                                        <i class="fa fa-dashboard"></i> <span>{{ trans('lang.dashboard')}}</span>
                                    </a>
                                </li>
                              
                                <!-- <li>
                                    <a href="{{ URL('user/coupon') }}">
                                        <i class="fa fa-tags"></i> <span>Coupon</span>
                                    </a>
                                </li> -->

                               <!-- <li>
                                    <a href="{{ URL('user/idcard') }}">
                                        <i class="fa fa-tag"></i><span>ID Card</span>
                                    </a>
                                </li> -->

                                <li <?php if($url=="/employee/attendance") echo 'class="active"'; ?> >
                                    <a href="{{ URL('/employee/attendance') }}">
                                        <i class="fa fa-calendar"></i> <span>{{ trans('lang.attendance')}}</span>
                                    </a>
                                </li>
                          <!--         <li <?php if($url=="/employee/timesheet") echo 'class="active"'; ?> >
                                    <a href="{{ URL('/employee/timesheet') }}">
                                        <i class="fa fa-clock-o"></i> <span>{{ trans('lang.timesheet')}}</span>
                                    </a>
                                </li>  </li> -->
                                <li <?php if($url=="/employee/leave") echo 'class="active"'; ?> >
                                    <a href="{{ URL('/employee/leave') }}">
                                        <i class="fa fa-road"></i> <span>{{ trans('lang.vacation')}}</span>
                                    </a>
                                </li>
                                

               

 <li>
                                    <a href="{{ URL('employee/logout') }}">
                                        <i class="fa fa-sign-out"></i> <span>{{ trans('lang.logout')}}</span>
                                    </a>
                                </li>

 


                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">


                   @yield('content')

                <!--<div class="footer-main">
                    Copyright &copy , 2016-17
                </div> -->
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

         <!-- <script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
        <!--<script src="{{ asset('calendar/lib/jquery.min.js') }}"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
       <!--  <script src="{{ asset('temp_new/js/jquery.min.js') }}" type="text/javascript"></script> -->

        <!-- jQuery UI 1.10.3 -->
        <script src="{{ asset('temp_new/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script src="{{ asset('temp_new/js/bootstrap.min.js') }}" type="text/javascript"></script>
        

    

        <!-- daterangepicker -->
        <!--<script src="{{ asset('temp_new/js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script> -->

        <script src="{{ asset('temp_new/js/plugins/chart.js') }}" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="{{ asset('temp_new/js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
        
        <!-- calendar -->
<!--        <script src="{{ asset('temp_new/js/plugins/fullcalendar/fullcalendar.js') }}" type="text/javascript"></script> -->

        <!-- Director App -->
        <script src="{{ asset('temp_new/js/Director/app.js') }}" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('temp_new/js/Director/dashboard.js') }}" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>

  <!--  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>  -->

<!--  <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>-->


<script src="{{ asset('/js/material.js') }}"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
<script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
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
<script type="text/javascript">
    $(document).ready(function()
    {

        //$('#model1').modal(options);

        $('.collapse').collapse();
        
        $('[data-toggle="tooltip"]').tooltip({
            'placement': 'top'
        });
        $('.tool-tip').tooltip();

        
        $('[data-toggle="popover"]').popover();
        
      });
</script>         
  
</body>
</html>

</body>
</html>