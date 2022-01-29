<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Odhyyon- Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" />





    <link href="{{ asset('js/backend/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('js/backend/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <!-- Responsive datatable examples -->
    <link href="{{ asset('js/backend/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('css/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/backend/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .page-content-wrapper {
            padding: 35px 0 0 15px !important;
        }

        .buttonNav {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

    </style>
</head>

<body class="fixed-left">
    <!-- Begin page -->
    <!-- Loader -->

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            @include('layouts.sidebar')
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <div class="topbar">
                    <nav class="navbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <!-- language-->

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <img src="image/backend/images/users/avatar-1.jpg" alt="user"
                                        class="rounded-circle" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>{{ Auth::user()->name }}</h5>
                                    </div>
                                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>

                                    <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit(); "><i
                                                class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect"><i
                                        class="mdi mdi-menu"></i></button>
                            </li>
                            <li class="hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control" /> <a href="#"><i
                                            class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                </div>
                <!-- Top Bar End -->
                <div class="page-content-wrapper">

                    {{ $slot }}
                    <!-- container -->
                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->
            <footer class="footer">© 2019 Annex by Mannatthemes.</footer>
        </div>
        <!-- End Right content here -->
    </div>
    <!-- jQuery  -->

    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{ asset('js/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/backend/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/backend/js/detect.js') }}"></script>
    <script src="{{ asset('js/backend/js/fastclick.js') }}"></script>
    <script src="{{ asset('js/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/backend/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('js/backend/js/waves.js') }}"></script>
    <script src="{{ asset('js/backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/backend/js/jquery.scrollTo.min.js') }}"></script>
    <!-- Required datatable js -->
    <script src="{{ asset('js/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('js/backend/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('js/backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/backend/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('js/backend/pages/datatables.init.js') }}"></script>
    
    <!-- App js -->
    <!--- summerNote -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    <script src="{{ asset('js/backend/js/app.js') }}"></script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Write Here',
            tabsize: 2,
            height: 100
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#datatable2").DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#checkboxClients").click(function() {
                $(".clientsDrop").toggleClass("showClient");
            });
        });
    </script>
</body>

</html>
