<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inkayat Kost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('fontawesome6.2.0/css/all.min.css') }} />
    {{-- <link rel="stylesheet" href="login/style.css"> --}}
  </head>
  <body style = "font-family: 'Secular One', sans-serif;" class="bg-white ">
    <main>
      <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top " style="background-color: #697631">
        <div class="container-fluid">
          <a class="navbar-brand text-black" href="#">ADMIN INKAYAT KOST</a>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li>
                <a class="nav-link btn text-light btn-dark mx-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></a>
              </li>
              <li>
                <a class="nav-link btn text-light btn-dark" href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <section>
      <div class="offcanvas offcanvas-start" style="background-color: #697631" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul>
          <a href="" class="text-decoration-none btn btn-dark w-75">Home</a>
        </ul>
        <ul>
          <a href="/home/pembayaran" class="text-decoration-none btn btn-dark w-75">Pembayaran</a>
        </ul>
        <ul>
          <a href="" class="text-decoration-none btn btn-dark w-75">Data Kamar</a>
        </ul>
        <ul>
          <a href="" class="text-decoration-none btn btn-dark w-75">Pengaturan</a>
        </ul>
      </div>
    </div>
    </section>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>