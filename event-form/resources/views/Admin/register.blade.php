<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Register | Xown Solution</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Xownsolutions Event Registration Admin" name="description" />
        <meta content="Xownsolutions" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('_admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('_admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('_admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    </head>
    <body>
    {{--<div class="home-btn d-none d-sm-block">
        <a href="#" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>--}}
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Free Register</h5>
                                        <p>Register as an Admin</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('_admin/assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <div href="{{--index.html--}}">
                                    <div class="avatar-md profile-user-wid mb-4">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <img src="{{asset('_admin/assets/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="{{route('user.register')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="useremail">Email</label>
                                        <input name="email" type="email" class="form-control" id="useremail" placeholder="Enter email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Confirm Password</label>
                                        <input name="password_confirmation" type="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="{{route('login')}}" class="font-weight-medium text-primary"> Login</a> </p>
                        <p>© 2020 Xownsolutions. Crafted with <i class="mdi mdi-heart text-danger"></i> by Xownsolutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('_admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/node-waves/waves.min.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('_admin/assets/js/app.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
        @if(session('failure'))
        toastr.error('{{session("failure")}}');
        @endif
        @if(count($errors)>0)
        @foreach($errors->all() as $error)
        toastr.error('{{$error}}');
        @endforeach
        @endif
        @if(session('success'))
        toastr.success('{{session("success")}}');
        @endif
    </script>
    </body>

</html>
