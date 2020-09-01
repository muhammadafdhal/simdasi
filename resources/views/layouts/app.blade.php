<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <style type="text/css">
        .range-dtp {
            position: relative;
        }

        .range-dtp i {
            position: absolute;
            bottom: 10px;
            right: 10px;
            top: auto;
            cursor: pointer;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('system/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('system/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('system/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('system/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('system/assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('system/assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('system/assets/vendor/datatables/css/select.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('system/assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{ asset('system/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{ asset('system/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet"
        href="{{ asset('system/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('system/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{ asset('system/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('system/assets/vendor/inputmask/css/inputmask.css')}}" />
    <link rel="stylesheet" href="{{ asset('system/dateRange/css/daterangepicker.css') }}" type="text/css">
    <title>Simdasi</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Data Arsip</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{ asset('system/assets/images/avatar-1.jpg')}}" alt=""
                                    class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{Auth::user()->name}} </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                        class="fas fa-power-off mr-2"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @yield('status-dashboard')" href="/"><i class="fas fa-columns"></i>
                                    <span>
                                        Dashboard</span></a>
                            </li>

                            @if (Auth::user()->level == "Pegawai" || Auth::user()->level == "Admin")
                                
                            
                            <li class="nav-item">
                                <a class="nav-link @yield('status-kelahiran')" href="{{ url('data-kelahiran')}}"><i class="fas fa-child"></i>
                                    <span>
                                        Data Kelahiran</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('status-domisili')" href="{{ url('data-domisili')}}"><i class="fas fa-people-carry"></i> <span>
                                        Data Domisili</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('dropdown-wilayah')" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-5" aria-controls="submenu-5"><i
                                        class="fas fa-fw fa-map-marker-alt"></i>Wilayah</a>
                                <div id="submenu-5" class="collapse submenu @yield('status-dropdown')" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link @yield('status-provinsi')" href="{{ url('provinsi')}}">Provinsi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @yield('status-kabkota')" href="{{ url('kabkota')}}">Kabkota</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @yield('status-kecamatan')" href="{{ url('kecamatan')}}">Kecamatan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @yield('status-keldes')" href="{{ url('keldes')}}">Kelurahan</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @yield('status-user')" href="{{ url('pengguna')}}"><i class="fas fa-users"></i> <span>
                                        Manajemen User</span></a>
                            </li>

                            @endif

                            @if (Auth::user()->level == "Pimpinan")
                                
                            <li class="nav-item">
                                <a class="nav-link @yield('status-rekap-kelahiran')" href="{{ url('rekap-kelahiran')}}"><i class="fas fa-id-card"></i> <span>
                                        Laporan Data Kelahiran</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('status-rekap-domisili')" href="{{ url('rekap-domisili')}}"><i class="fas fa-id-card"></i> <span>
                                        laporan Data Domisili </span></a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    @yield('content')
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Kerja Praktek © 2020 Sistem Informasi Data Kepengurusan Kelahiran & Pindah Domisili
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    
    <script src="{{ asset('system/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('system/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('system/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('system/assets/libs/js/main-js.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>+
    <script src="{{ asset('system/assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('system/assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('system/assets/vendor/datatables/js/data-table.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('system/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('system/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{ asset('system/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="system/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    
    <script src="{{ asset('system/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{ asset('system/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{ asset('system/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{ asset('system/assets/libs/js/dashboard-ecommerce.js')}}"></script>
    <script src="{{ asset('system/assets/libs/js/dropdown.js')}}"></script>
    <!-- js untuk jquery -->
    <script src="{{ asset('system/dateRange/js/jquery-1.11.2.min.js') }}"></script>
    <!-- js untuk bootstrap -->
    <script src="{{ asset('system/dateRange/js/bootstrap.js') }}"></script>
    <!-- js untuk moment -->
    <script src="{{ asset('system/dateRange/js/moment.js') }}"></script>
    <!-- js untuk daterangepicker -->
    <script src="{{ asset('system/dateRange/js/daterangepicker.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.range-dtp i').click(function () {
                $(this).parent().find('input').click();
            });

            $('#range-tanggal').daterangepicker({
                autoUpdateInput: false,
                format: 'DD/MM/YYYY',
                useCurrent: false,
                "showDropdowns": true,
                "autoApply": true,
            }, function (start, end, label) {
                $('#range-tanggal').val(start.format('DD/MM/YYYY') + " - " + end.format('DD/MM/YYYY'))
            });

        });
    </script>
</body>

</html>
