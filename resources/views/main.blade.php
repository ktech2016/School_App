<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('test/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <style>
        nav svg{
	    height: 20px;
    }
    </style>
    <body class="sb-nav-fixed">
        <!--NavBar section starts here-->
       @include('navbar')
         <!--NavBar section ends here-->
        <div id="layoutSidenav">
             <!--Left hand SideBar section starts here-->
             @include('sidebar')
            <!--Left hand SideBar section ends here-->
            <div id="layoutSidenav_content">
                <!--Main  Contents section starts here-->
                @yield('content')
            <!--Main  Contents section ends here-->
            <!--footer section ends here-->
            @include('footer')
                <!--Main  Contents section ends here-->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('test/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('test/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('test/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('test/js/datatables-simple-demo.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
