<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$pageName ?? ""}}</title>

 @include('layouts._headeLinks')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
     <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
       <a  class="nav-link">
            @php
                $today =   new DateTime();
                print $today->format('Y/M/d l H:i A');
            @endphp
        </a>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        @include('layouts.contentHeader')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts._footerLinks')

@yield('script')
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>

           $(()=>{
            $(document).Toasts('create', {
                title: 'Error',
                position: 'topRight',
                body: '{{$error}}',
                class:"bg-danger",
                icon:"fas fa-exclamation-circle",
                delay: 750,
                })
             })

        </script>
    @endforeach
@endif
    @if (session('success'))
        <script>

           $(()=>{
            $(document).Toasts('create', {
                title: 'Successfully',
                position: 'topRight',
                body: "{{session('success')}}",
                class:"bg-success",
                icon:"fas fa-check-circle",
                delay: 750,
                })
             })

        </script>
    @endif
</body>
</html>
