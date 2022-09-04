<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('adminassets/images/favicon-32x32.png')}}" type="image/png" />
    <link href="{{asset('adminassets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{asset('adminassets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('adminassets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('adminassets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminassets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('adminassets/js/pace.min.js')}}"></script>
    <link href="{{asset('adminassets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminassets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{asset('adminassets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('adminassets/css/icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminassets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('adminassets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('adminassets/css/header-colors.css')}}" />
    <title>Admin</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <h4 class="logo-text">Dashboard</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="pricing-table.html">
                        <div class="parent-icon"><i class="bx bx-diamond"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
            </ul>
        </div>
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                    </div>
                    
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Admin</p>
                                <p class="designattion mb-0">Sushil Kumar Raj</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{url('admin/logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">All User
                                    <div style="display: flex;float: right;margin-left: 20px;">
                                        <span>Age </span> &nbsp; <input filterby="userage" class="form-control" type="number" name="age" id="age" placeholder="Filter By Age">&nbsp; 
                                        <span>Income </span>&nbsp; <input class="form-control" type="text" name="income" id="income" placeholder="Filter By Income">
                                    </div>
                                </h5>
                            </div>
                            <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>DOB</th>
                                        <th>Genger</th>
                                        <th>Income</th>
                                        <th>Age</th>
                                        <th>Occupation</th>
                                        <th>Through</th>
                                    </tr>
                                </thead>
                                <tbody id="appendFilterUser">
                                    
                                        @include('admin.append_filter_user')
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>DOB</th>
                                        <th>Genger</th>
                                        <th>Income</th>
                                        <th>Age</th>
                                        <th>Occupation</th>
                                        <th>Through</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2022. All right reserved.</p>
        </footer>
    </div>
    <script src="{{asset('adminassets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adminassets/js/jquery.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('adminassets/plugins/chartjs/js/Chart.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-knob/excanvas.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-knob/jquery.knob.js')}}"></script>
    <script>
    $(function() {
        $(".knob").knob();
    });
    </script>
    <script src="{{asset('adminassets/js/index.js')}}"></script>
    <script src="{{asset('adminassets/js/app.js')}}"></script>
    <script src="{{asset('adminassets/js/custom-admin.js')}}"></script>
</body>
</html>