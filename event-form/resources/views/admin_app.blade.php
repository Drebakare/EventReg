<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>Xown Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Lexican" name="author" />
{{--
    <link rel="shortcut icon" href="assets/images/favicon.ico">
--}}
    <link rel="stylesheet" href="{{asset('_admin/assets/libs/twitter-bootstrap-wizard/prettify.css')}}">
    <link href="{{asset('_admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{asset('_admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('_admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('_admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{asset('_admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('_admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- dropzone css -->
    <!-- Responsive datatable examples -->
    <link href="{{asset('_admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('_admin/assets/libs/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <style>
        .vl {
            border-left: 4px solid navy;
            height: 65px;
        }
    </style>
</head>
<body data-sidebar="dark">
    <div id="layout-wrapper">
        @include('Admin.layout.header')
        @include('Admin.layout.sidebar')
        <div class="main-content">
            @yield('contents')
            @include('Admin.layout.footer')
        </div>
    </div>
<script src="{{asset('_admin/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('_admin/assets/js/pages/dashboard.init.js')}}"></script>
<script src="{{asset('_admin/assets/js/app.js')}}"></script>
    <!-- Required datatable js -->
    <script src="{{asset('_admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('_admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('_admin/assets/js/pages/datatables.init.js')}}"></script>

    <script src="{{asset('_admin/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('_admin/assets/js/pages/form-element.init.js')}}"></script>

    <script src="{{asset('_admin/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/file-upload/file-upload-with-preview.min.js')}}"></script>
    <script src="{{asset('_admin/assets/js/pages/form-repeater.int.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

    <script src="{{asset('_admin/assets/libs/twitter-bootstrap-wizard/prettify.js')}}"></script>

    <!-- form wizard init -->
    <script src="{{asset('_admin/assets/js/pages/form-wizard.init.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="{{asset('_admin/assets/jquery-qrcode-master/src/jquery.qrcode.js')}}"></script>
    <script type="text/javascript" src="{{asset('_admin/assets/jquery-qrcode-master/src/qrcode.js')}}"></script>
    <script src=
            "https://files.codepedia.info/files/uploads/iScripts/html2canvas.js">
    </script>
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

@yield('script_contents')
</body>
</html>


