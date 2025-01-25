<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <!-- <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" /> -->
    <!-- simplebar CSS-->
    <!-- <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" /> -->
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">Dashtreme Admin</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kategori-asset.index') }}">
                        <i class="zmdi zmdi-label"></i> <span>Kategori Asset</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sub-kategori-asset.index') }}">
                        <i class="zmdi zmdi-label-alt"></i> <span>Sub Kategori Asset</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('distributor.index') }}">
                        <i class="zmdi zmdi-truck"></i> <span>Distributor</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('merk.index') }}">
                        <i class="zmdi zmdi-tag"></i> <span>Merk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('satuan.index') }}">
                        <i class="zmdi zmdi-balance"></i> <span>Satuan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('master-barang.index') }}">
                        <i class="zmdi zmdi-collection-item"></i> <span>Master Barang</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('depresiasi.index') }}">
                        <i class="zmdi zmdi-money"></i> <span>Depresiasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengadaan.index') }}">
                        <i class="zmdi zmdi-shopping-cart"></i> <span>Pengadaan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('lokasi.index') }}">
                        <i class="zmdi zmdi-pin"></i> <span>Lokasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mutasi-lokasi.index') }}">
                        <i class="zmdi zmdi-swap"></i> <span>Mutasi Lokasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('opname.index') }}">
                        <i class="zmdi zmdi-assignment"></i> <span>Opname</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('hitung-depresiasi.index') }}">
                        <i class="zmdi zmdi-account-calendar"></i> <span>Hitung Depresiasi</span>
                    </a>
                </li>
            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="" class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                            <p class="user-subtitle">mccoy@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                @yield('content')

                <!--End Dashboard Content-->

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Dashtreme Admin
                </div>
            </div>
        </footer>
        <!--End footer-->



    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- simplebar js -->
    <!-- <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script> -->
    <!-- sidebar-menu js -->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <!-- loader scripts -->
    <!-- <script src="{{ asset('assets/js/jquery.loading-indicator.js') }}"></script> -->
    <!-- Custom scripts -->
    <script src="{{ asset('assets/js/app-script.js') }}"></script>


    <!-- Index js -->
    <script src="{{ asset('assets/js/index.js') }}"></script>


</body>

</html>