<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('adminassets/images/favicon-32x32.png')}}" type="image/png" />
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
    <style>
        label.error{
            color: red;
        }
    </style>
    <title>Admin</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <h2>Admin Login</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Sign in</h3>
                                    </div>
                                    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
                                        @if(Session::has('alert-' . $msg))
                                            <center><p style="color:red;font-weight:bold;">{{ Session::get('alert-' . $msg) }}</p></center>
                                        @endif
                                    @endforeach
                                    <div class="form-body">
                                        <form id="loginform" class="row g-3" action="{{url('admin')}}" method="post">@csrf
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="email" placeholder="Email Address" required="true" name="email">
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Enter Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="password" value="12345678" name="password" placeholder="Enter Password" required="true"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <script src="{{asset('adminassets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adminassets/js/jquery.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } 
                else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <script src="{{asset('adminassets/js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script>
            $('#loginform').validate();
        </script>
</body>
</html>