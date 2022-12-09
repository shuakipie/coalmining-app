<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Smart HRM | Project Management | Applicant Tracking </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <?php
        $url=Config::get('app.url');
        ?>
        <link href="{{ asset('/admin/css/vendor.css') }}" rel="stylesheet">
        <!--<link rel="stylesheet" id="theme-style" href="<?php echo url(); ?>/admin/css/app.css"> -->
        <!-- Theme initialization -->
       <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            //var themeName = themeSettings.themeName || '';
            var themeName = 'orange';
            if (themeName)
            {

                //alert('ok');
         document.write('<link rel="stylesheet" id="theme-style" href="<?php echo $url; ?>/admin/css/app-' + themeName + '.css">'); 
            }
            else
            {
                //alert('no');
                document.write('<link rel="stylesheet" id="theme-style" href="<?php echo $url; ?>/admin/css/app.css">');
            }
        </script> 
        <style type="text/css">
        ul.breadcrumb{
            background: transparent;
        }
        nav.text-xs-right a, .dropdown-menu a{
            text-decoration: none;
        }
        </style>
        <link href="{{ asset('/datetime/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    

  
<script src="{{ asset('/js/sortable.js') }}"></script>

           <script>
           $('.tool-tip').tooltip()
           </script>
   @yield('styles')    
    </head>

    <body>
        <div class="main-wrapper">
            
             
               
                
                @yield('content')
              
            </div>
               
        <script src="{{ asset('/admin/js/vendor.js') }}"></script>
        <script src="{{ asset('/admin/js/app.js') }}"></script>
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
    @yield('script')
    </body>

</html>