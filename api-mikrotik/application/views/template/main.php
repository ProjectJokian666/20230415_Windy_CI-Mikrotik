<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <!-- <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= site_url('dashboard') ?>" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a> -->
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('auth/logout') ?>" onclick="return confirm('Apakah anda yakin akan keluar?')" role="button">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= basename('') ?>" class="brand-link">
                <i class="nav-icon fas fa-laptop"></i>
                <span class="brand-text font-weight-light">PUSKOM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- SidebarSearch Form -->
                <div class="form-inline">

                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= site_url('dashboard') ?>" class="nav-link <?= $title == 'Dashboard PUSKOM' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <!-- MENU HOTSPOT -->
                        <!-- <li class="nav-item <?= $title == 'Users Hotspot' | $title == 'Hotspot Active' | $title == 'Edit User' | $title == 'Hotspot Profile' | $title == 'Users Binding' | $title == 'Users Host' | $title == 'Users Cookies' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= $title == 'Users Hotspot' | $title == 'Edit User' | $title == 'Hotspot Active' | $title == 'Hotspot Profile' | $title == 'Users Binding' | $title == 'Users Host' | $title == 'Users Cookies' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-wifi"></i>
                                <p>
                                    Hostpot
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('hotspot/active') ?>" class="nav-link <?= $title == 'Hotspot Active' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('hotspot/users') ?>" class="nav-link <?= $title == 'Users Hotspot' | $title == 'Edit User' ? 'active' : '' ?> ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('hotspot/profile') ?>" class="nav-link <?= $title == 'Hotspot Profile' ? 'active' : '' ?> ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('hotspot/binding') ?>" class="nav-link <?= $title == 'Users Binding' ? 'active' : '' ?> ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Binding</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('hotspot/host') ?>" class="nav-link <?= $title == 'Users Host' ? 'active' : '' ?> ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Host</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('hotspot/cookies') ?>" class="nav-link <?= $title == 'Users Cookies' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cookies</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- MENU PPP -->
                        <!-- <li class="nav-item <?= $title == 'PPP Secret' | $title == 'PPP PPPOE' | $title == 'PPP Profile' | $title == 'PPP Active' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= $title == 'PPP Secret' | $title == 'PPP PPPOE' | $title == 'PPP Profile' | $title == 'PPP Active' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    PPP
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('ppp/secret') ?>" class="nav-link <?= $title == 'PPP Secret' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PPP Secret</p>
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a href="<?= site_url('ppp/pppoe') ?>" class="nav-link <?= $title == 'PPP PPPOE' ? 'active' : '' ?> ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PPPOE</p>
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a href="<?= site_url('ppp/profile') ?>" class="nav-link <?= $title == 'PPP Profile' ? 'active' : '' ?> ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('ppp/active') ?>" class="nav-link <?= $title == 'PPP Active' ? 'active' : '' ?> ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- interface -->
                        <li class="nav-item">
                            <a href="<?= site_url('interfaces') ?>" class="nav-link <?= $title == 'Interfaces' ? 'active' : '' ?>">
                                <i class="fas fa-ethernet"></i>
                                <p>
                                    Interfaces
                                </p>
                            </a>
                        </li>
                        <!-- Log -->
                        <li class="nav-item">
                            <a href="<?= site_url('log') ?>" class="nav-link <?= $title == 'Log' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-sticky-note"></i>
                                <p>
                                    Log
                                </p>
                            </a>
                        </li>
                        <!-- Resources -->
                        <li class="nav-item">
                            <a href="<?= site_url('resources') ?>" class="nav-link <?= $title == 'Resources' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Resource
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard v2</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url('assets/template/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/template/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets/template/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/template/') ?>dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?= base_url('assets/template/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?= base_url('assets/template/') ?>plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets/template/') ?>plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/template/') ?>dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/template/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $('#dataTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
<!-- Hidden Error -->
<?php ini_set('display_errors', 'off'); ?>