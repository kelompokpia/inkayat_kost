<!doctype html>
<html lang="en">
  <head>
{{-- <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-250488678-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-250488678-1');
</script> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Inkayat Kost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('fontawesome6.2.0/css/all.min.css') }} />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css" >

    <!-- BARU!!! -->
    <!-- Feathericon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  </head>

  <body style = "font-family: 'Secular One', sans-serif;" class=" hold-transition sidebar-mini layout-fixed">
    <main>
      <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #dbd9a1">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-inline-block">
            <a href="#" class="nav-link text-dark">Admin Inkayat Kost</a>
          </li>
        </ul>
      </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #dbd9a1">
        <h3 class="brand-text font-weight-light mt-3 mx-1">Menu Admin</h3>
        <hr>
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{url('home')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                  <p>
                    Home
                  </p>
                </a>
              </li>
              <li class="nav-item">
                @php
                  $tahun=date('Y');
                  $bulan=date('m');
                @endphp
                <a href="{{url('home/pembayaran/'.$tahun.'/'.$bulan)}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-money-bills"></i>
                  <p>
                    Pembayaran
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('home/datakamar')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-bed"></i>
                  <p>
                    Data Kamar
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('home/pengaturan')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-gears"></i>
                  <p>
                    Pengaturan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                  <p>
                    Keluar
                  </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </ul>
          </nav>
        </div>
    </aside>
        @yield('content')
    </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="{{ asset('adminLTE') }}/plugins/jquery/jquery.min.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="{{ asset('adminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/chart.js/Chart.min.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/sparklines/sparkline.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/moment/moment.min.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="{{ asset('adminLTE') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="{{ asset('adminLTE') }}/dist/js/adminlte.js"></script>

  <!-- Feathericon -->
  <script>
    feather.replace();
  </script>

  </body>
</html>