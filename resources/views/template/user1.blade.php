<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asset | Guru</title>
 <!-- Tell the browser to be responsive to screen width -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }} ">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }} ">
 <!-- Google Font: Source Sans Pro -->
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="#" class="nav-link">KESUMA ASSET</a>
     </li>
   </ul>
   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     
     <li class="nav-item">
       </a>
     </li>
   </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="{{ url ('user1')}}" class="brand-link">
    <img src="{{ asset('assets/dist/img/asset.jpeg')}}"
          alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3"
          style="opacity: .8">
     <span class="brand-text font-weight-light">KESUMA ASSET</span>
  </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="{{ asset('assets/dist/img/default-user-image.png') }}" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
        <a href="{{url('users/profilusers')}}" class="d-block" ><?=nama_user()->nama_user?></a>
      </div>
    </div>
    @php
      $active = Request::segment(2);
    @endphp
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ url('users/databarangusers') }}" class="nav-link {{ $active == 'databarangusers' ? 'active' : null}}">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Daftar Barang
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('users/laporanusers')}}" class="nav-link {{ $active == 'laporanusers' ? 'active' : null}}">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Riwayat
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('logout/login')}}" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Log Out
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
        @yield('content') 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2021-2022 <a href="#">KesumaASSET</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }} "></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }} "></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }} "></script>
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
