<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link href="css/backend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/backend/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/backend/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div class="accountbg"></div>
        {{ $slot }}
        </div>
        <!-- jQuery  -->
        <script src="js/backend/js/jquery.min.js"></script>
        <script src="js/backend/js/popper.min.js"></script>
        <script src="js/backend/js/bootstrap.min.js"></script>
        <script src="js/backend/js/modernizr.min.js"></script>
        <script src="js/backend/js/detect.js"></script>
        <script src="js/backend/js/fastclick.js"></script>
        <script src="js/backend/js/jquery.slimscroll.js"></script>
        <script src="js/backend/js/jquery.blockUI.js"></script>
        <script src="js/backend/js/waves.js"></script>
        <script src="js/backend/js/jquery.nicescroll.js"></script>
        <script src="js/backend/js/jquery.scrollTo.min.js"></script>
        <script src="js/backend/plugins/skycons/skycons.min.js"></script>
        <script src="js/backend/plugins/raphael/raphael-min.js"></script>
        <script src="js/backend/plugins/morris/morris.min.js"></script>
        <script src="js/backend/pages/dashborad.js"></script>
        <!-- App js -->
        <script src="js/backend/js/app.js"></script>
    </body>
    
</html>
