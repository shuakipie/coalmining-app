<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ADMIN LOGIN </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <?php
        $url=Config::get('app.url');
        ?>
        <link href="{{ asset('/admin/css/vendor.css') }}" rel="stylesheet">
        
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
    </head>

    <body>
        @yield('content')
        
        <script src="{{ asset('/admin/js/vendor.js') }}"></script>
        <script src="{{ asset('/admin/js/app.js') }}"></script>
    </body>

</html>