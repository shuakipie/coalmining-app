<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> GINO'S SMALL SCALE COAL MINING</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <?php
           $url=Config::get('app.url');
        ?>
        <link href="{{ asset('/admin/css/vendor.css?version=2') }}" rel="stylesheet">
        <!--<link rel="stylesheet" id="theme-style" href="/admin/css/app.css"> -->
        <!-- Theme initialization -->
       <link href="{{ asset('/admin/css/app-orange.css?version=2') }}" rel="stylesheet">
       <!--<script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            //var themeName = themeSettings.themeName || '';
            var themeName = 'orange';
            if (themeName)
            {

                //alert('ok');
         document.write('<link rel="stylesheet" id="theme-style" href="<?php echo $url; ?>/admin/css/app-' + themeName + '.css?version=2">'); 
            }
            else
            {
                //alert('no');
                document.write('<link rel="stylesheet" id="theme-style" href="<?php echo $url; ?>/admin/css/app.css?version=2">');
            }
        </script>  -->
        <style type="text/css">
        ul.breadcrumb{
            background: transparent;
        }
        nav.text-xs-right a, .dropdown-menu a{
            text-decoration: none;
        }
        table.table th, table.table td{
            font-size: 85%;
        }
        </style>
        <link href="{{ asset('/datetime/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    

  

   @yield('styles')    
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
          <i class="fa fa-bars"></i>
        </button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <!--<form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form> -->
                    </div>
                    <!--<div class="header-block header-block-buttons">
                        <a href="https://github.com/modularcode/modular-admin-html" class="btn btn-oval btn-sm rounded-s header-btn"> <i class="fa fa-external-link"></i> Support </a> 
                        <a href="https://github.com/modularcode/modular-admin-html/releases/download/v1.0.1/modular-admin-html-1.0.1.zip" class="btn btn-oval btn-sm rounded-s header-btn"> <i class="fa fa-book"></i> Documentation </a> 
                    </div> -->
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                       <!--     <li class="notifications new">
                                <a href="" data-toggle="dropdown"> <i class="fa fa-tasks"></i> <sup>
                <span class="counter">8</span>
              </sup> </a>
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li> <a href="">
                      View All
                    </a> </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li> -->
                           <!-- <li class="notifications new">
                                <a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <sup>
                <span class="counter">8</span>
              </sup> </a>
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
                                                </div>
                                            </a>
                                        </li> 
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li> <a href="">
                      View All
                    </a> </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li>-->
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
                    <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('{{ asset('images/333.jpg') }}')"> </div>
                        <span class="name">
                            {{ Auth::user()->name }}
                        </span> </a>
                              <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="{{ url('/admin/settings/profile') }}"><i class="fa fa-user icon"></i> {{ trans('lang.profile')}}</a>
                <a class="dropdown-item" href="{{ url('/admin/settings/general') }}"><i class="fa fa-gear icon"></i> {{ trans('lang.general')}} {{ trans('lang.settings')}} </a>
                <a class="dropdown-item" href="{{ url('/admin/settings/system-logs') }}"><i class="fa fa-bell icon"></i> {{ trans('lang.system')}} {{ trans_choice('lang.log',2)}}</a>

                                   <!-- <a class="dropdown-item" href="#">  Profile </a>
                                    <a class="dropdown-item" href="#">  Notifications </a>
                                    <a class="dropdown-item" href="#">  Settings </a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('/auth/logout') }}"> <i class="fa fa-power-off icon"></i> {{ trans('lang.logout')}} </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div>{{ $brand }}</div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li class = "{{ set_active('admin/dashboard') }}">
                                    <a href="{{ url('admin/dashboard') }}"> <i class="fa fa-home"></i> {{ trans('lang.dashboard')}}</a>

                                </li>
                                 <li class = "{{ set_active('admin/emp') }}">
                                    <a href="{{ url('admin/emp') }}"> <i class="fa fa-users"></i> {{ trans_choice('lang.employee',2)}} </a>
                                </li>
                                <!--<li>
                                    <a href="#"> <i class="fa fa-file"></i> {{ trans('lang.documents')}} Documents <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/documents/emp') }}">Employee {{ trans('lang.documentes')}}Documents</a> </li>
                                        <li> <a href="{{ url('admin/documents/appointletter') }}">{{ trans('lang.appointment')}} {{ trans('lang.letter')}}Appointment Letter</a> </li>
                   <li> <a href="{{ url('admin/documents/idcard') }}">{{ trans('lang.idcard')}} ID Card</a> </li>
                   <li> <a href="{{ url('admin/documents/vcard') }}">{{ trans('lang.vcard')}} Business Card</a> </li>
                                    </ul>
                                </li> -->
                                 
                              <!--   <li class = "{{ set_active('admin/projects') }}">
                                    <a href="{{ url('admin/projects') }}"> <i class="fa fa-th-large"></i> {{ trans_choice('lang.project',2)}}<i class="fa arrow"></i> </a>
                                    <ul>
                    <li> <a href="{{ url('admin/projects') }}">
                    {{ trans_choice('lang.project',2)}}
                  </a> </li>
                  <!-- 
                  <li> <a href="{{ url('admin/projects/tasks') }}">
                   {{ trans('lang.milestone')}} &amp; {{ trans('lang.tasks')}}  Milestones &amp; Tasks 
                  </a> </li>
                   
                    <li> <a href="{{ url('admin/projects/idea') }}">
                    {{ trans('lang.idea')}} {{ trans('lang.management')}} Idea Management
                  </a> </li>
                   <li> <a href="{{ url('admin/projects/testing') }}">
                    {{ trans('lang.testing')}} {{ trans('lang.tracking')}} Testing Management
                  </a> </li>
                   <li> <a href="{{ url('admin/projects/bugs') }}">
                    {{ trans('lang.bug')}} {{ trans('lang.tracking')}}Bug Tracking
                  </a> </li>
                  <li> <a href="{{ url('admin/projects/resource') }}">
                    {{ trans('lang.resource')}} {{ trans('lang.management')}}Resource Management
                  </a> </li> 
                  -->
                   

                                    <!-- </ul>
                                </li> -->
                                  <!--<li class = "{{ set_active('admin/leave') }}"> -->
<!-- <li class="{{ set_active(['admin/leave', Request::is('admin/leave/*'), 'admin/leave']) }}">
                                    <a href="{{ url('admin/leave') }}"> <i class="fa fa-plane"></i> {{ trans('lang.vacation')}} <span class="label label-default">{{ $leave_count }}</span> <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/leave') }}">
                    {{ trans('lang.vacation')}}  {{ trans_choice('lang.request',2) }}
                  </a> </li>
                                        <li> <a href="{{ url('admin/leave/report') }}">
                     {{ trans('lang.vacation')}}  {{ trans('lang.report') }}
                  </a> </li>
                   <!--<li> <a href="{{ url('admin/leave/holidays') }}">
                    {{ trans('lang.holiday')}} Holidays
                  </a> </li>  -->
                         <!--           </ul>
                                </li> --> <!-- 
<li class="{{ set_active(['admin/timesheet', Request::is('admin/timesheet/*'), 'admin/timesheet']) }}">
                                    <a href="{{ url('admin/timesheet') }}"> <i class="fa fa-clock-o"></i> EXPENSE RECORDS <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/timesheet/report') }}">
                    OVERALL EXPENSE REPORTS
                  </a> </li>
                                        <li> <a href="{{ url('admin/timesheet') }}">
                   EXPENSE LOGS
                  </a> </li>
                                    </ul>
                                </li> -->
                                 <li class="{{ set_active(['admin/attendance', Request::is('admin/attendance/*'), 'admin/attendance']) }}">
                                    <a href="{{ url('admin/attendance') }}"> <i class="fa fa-calendar"></i> Employee Attendance<i class="fa arrow"></i> </a>
                                    <ul>
                                 <!--       <li> <a href="{{ url('admin/attendance/guests') }}">
                    {{ trans('lang.visitors')}} {{ trans_choice('lang.log',2)}}
                  </a> </li>-->
                                                          <li> <a href="{{ url('admin/attendance') }}">
                    Daily Time Records
                  </a> </li>
                    <li> <a href="{{ url('admin/attendance/report') }}">
                   Overall Reports
                  </a> </li>
                  <li> <a href="{{ url('admin/attendance/calendar-view') }}">
                    {{ trans('lang.calendar')}} {{ trans('lang.view')}}
                  </a> </li>
                  
                  
                  
                                    </ul>
                                </li>
                                <li class="{{ set_active(['admin/company', Request::is('admin/company/*'), 'admin/company']) }}">
             <a href="{{ url('admin/company/hierarchy') }}"> <i class="fa fa-sitemap"></i> {{ trans('lang.company')}}<i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/company/dept') }}">
                    Banlot Organization
                  </a> </li>
                                        <li> <a href="{{ url('admin/company/posting') }}">
                  Company  {{ trans_choice('lang.designation',2)}}
                  </a> </li>

                <!--  <li> <a href="{{ url('admin/company/hierarchy') }}">
                    {{ trans('lang.hierarchy')}} {{ trans('lang.tree')}}
                  </a> </li> -->
                                    </ul>
                                </li>

                                <!-- <li>
                                    <a href="#"> <i class="fa fa-comment"></i> {{ trans('lang.communication')}}Communication <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/communication/notice') }}">
                    {{ trans('lang.notice')}} {{ trans('lang.board')}}Notice Board
                  </a> </li>
                                        <li> <a href="{{ url('admin/communication/inbox') }}">
                    {{ trans('lang.inbox')}} Inbox
                  </a> </li>
                    <li> <a href="{{ url('admin/communication/survey') }}">
                    {{ trans('lang.survey')}} Surveys
                  </a> </li>
                  <li> <a href="{{ url('admin/communication/chat') }}">
                    {{ trans('lang.team')}} {{ trans('lang.chat')}}Team Chat
                  </a> </li>


                                    </ul>
                                </li> -->
                                <!--  <li>
                                    <a href="#"> <i class="fa fa-heart"></i> {{ trans('lang.recruitment')}}Recruitment <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/recruitment/applicants') }}">
                    {{ trans('lang.applicants')}} Applicants
                  </a> </li>
                                        <li> <a href="{{ url('admin/recruitment/schedule') }}">
                    {{ trans('lang.interview')}} {{ trans('lang.schedules')}}Interview Schedules
                  </a> </li>
                    <li> <a href="{{ url('admin/recruitment/interview') }}">
                    {{ trans('lang.interview')}} {{ trans('lang.sessions')}}Interview Sessions
                  </a> </li>


                                    </ul>
                                </li>  -->
                                 <!-- <li>
                                    <a href="#"> <i class="fa fa-check-square-o"></i> {{ trans('lang.assessment')}} Assessment <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/assesment/self') }}">
                    {{ trans('lang.self')}} {{ trans('lang.assessment')}} {{ trans('lang.qa')}} Self Assessment QA
                  </a> </li>
                                        <li> <a href="{{ url('admin/assesment/360') }}">
                    360 {{ trans('lang.feedback')}} 360 Feedback
                  </a> </li>
                    <li> <a href="{{ url('admin/assesment/appraisal') }}">
                    {{ trans('lang.performance')}} {{ trans('lang.appraisal')}} Performance Appraisal
                  </a> </li>
                <li> <a href="{{ url('admin/assesment/certifications') }}">
                    {{ trans('lang.certification')}} Certifications
                  </a> </li>
                  <li> <a href="{{ url('admin/assesment/tests') }}">
                    {{ trans('lang.tests')}} Tests
                  </a> </li>



                                    </ul>
                                </li> -->
                              <!--   <li class="{{ set_active(['admin/payroll', Request::is('admin/payroll/*'), 'admin/payroll']) }}">
                                   <a href="{{ url('admin/payroll/statements') }}"> <i class="fa fa-briefcase"></i> {{ trans('lang.payroll')}}<i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/payroll') }}">
                    {{ trans('lang.generate')}} {{ trans('lang.payroll')}}
                  </a> </li> -->
                                      <!--  <li> <a href="{{ url('admin/payroll/report') }}">
                    {{ trans('lang.payroll')}} {{ trans('lang.report')}} Payroll Report
                  </a> </li> -->

                 <!-- <li> <a href="{{ url('admin/payroll/statements') }}">
                    {{ trans('lang.salary')}} {{ trans('lang.slips')}}
                  </a> </li>
                 <!-- <li> <a href="{{ url('admin/payroll/benefits') }}">
                    {{ trans('lang.benefits')}} {{ trans('lang.management')}} Benefits Management
                  </a> </li>
                  <li> <a href="{{ url('admin/payroll/deductions') }}">
                    {{ trans('lang.deductions')}} {{ trans('lang.management')}} Deductions Management
                  </a> </li>
                  <li> <a href="{{ url('admin/payroll/bonus') }}">
                    {{ trans('lang.bonus')}} {{ trans('lang.management')}} Bonus Management
                  </a> </li>
                  <li> <a href="{{ url('admin/payroll/advanced') }}">
                    {{ trans('lang.advanced')}} {{ trans('lang.roi')}} {{ trans('lang.report')}} Advanced ROI Report
                  </a> </li> -->
                                    </ul>
                                </li>
                              <!-- <li>
                                    <a href="#"> <i class="fa fa-money"></i> {{ trans('lang.timesheet')}} Finance <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="{{ url('admin/finance/expenses') }}">
                    {{ trans('lang.expenses')}} Expenses
                  </a> </li>
                                        <li> <a href="{{ url('admin/finance/roi') }}">
                    {{ trans('lang.roi')}} {{ trans('lang.report')}}ROI Report
                  </a> </li>

                  
                                    </ul>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                <div class="col-xs-4"> <label class="title">static</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
                                    <span></span>
                                </label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="sidebarPosition" value="">
                                    <span></span>
                                </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                    <span></span>
                                </label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="headerPosition" value="">
                                    <span></span>
                                </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                    <span></span>
                                </label> </div>
                                                <div class="col-xs-4"> <label>
                                    <input class="radio" type="radio" name="footerPosition" value="">
                                    <span></span>
                                </label> </div>
                                            </div>
                                        </div>
                                       <!-- <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green" data-theme="green"></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue active" data-theme=""></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div> -->
                                    </li>
                                </ul>
                                <!--<a href=""> <i class="fa fa-cog"></i> Customize </a> -->
                                
                            </li>
                        </ul>
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                @yield('content')
                <footer class="footer">
                   <!-- <div class="footer-block buttons"> <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe> </div>  -->
                    <div class="footer-block author">
                        <ul>
                            <li> GINOS SMALL SCALE COAL MINING</li>
                           
                             | <strong>ATTENDANCE AND PAYROLL</strong>
                        </ul>
                    </div>
                </footer> 
                <!--<div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
                                <h4 class="modal-title">Media Library</h4> </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a> </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row"> </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Insert Selected</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                                <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4> </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
<script src="{{ asset('temp_new/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/admin/js/vendor.js') }}"></script>
        <script src="{{ asset('/admin/js/app.js') }}"></script>
        
        <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
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
    
    <script src="{{ asset('/js/sortable.js') }}"></script>

           <script>
           $('.tool-tip').tooltip()
           </script>

           @yield('script')
           @yield('scripts')
    </body>

</html>