<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Younnie | Formulir Biodata Mahasiswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-image" style="background-image: url(/home-bg.jpg)">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">Younnie</a></h1>
  <!-- ======= Start Navbar ======= -->
  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto" href="/">Home</a></li>
      <li><a class="nav-link scrollto active" href="/#taks">Taks</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- ======= End navbar ======= -->
    </div>
  </header>
  <!-- ======= End Header ======= -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Form ======= -->
  <div id="form" class="form-mf sect-pt4 route mt-4 mb-4">
    <div class="container mt-4">
        <div class="card">
          <div class="card-header text-center font-weight-bold">
            <h1>Biodata Mahasiswa</h1>
          </div>
          <div class="card-body">
            <table class="table" border="2">
              <thead>
              {{-- Kolom NIM --}}
              <tr>
                <td>NIM</td>
                <td>{{ $data->nim }}</td>
              </tr>
              {{-- Kolom Nama --}}
              <tr>
                <td>Nama Lengkap</td>
                <td>{{ $data->fullname }}</td>
              </tr>
              {{-- Kolom Jenis Kelamin --}}
              <tr>
                <td>Umur</td>
                <td>{{ $data->umur }}</td>
              </tr>
              {{-- Kolom Fakultas --}}
              <tr>
                <td>Jenis Kelamin</td>
                <td>{{ $data->gender }}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>{{ $data->alamat }}</td>
              </tr>
              {{-- Kolom Hobi --}}
              <tr>
                <td>Hobi</td>
                <td>{{ $data->hobi }}</td>
              </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
  </div>
  <!-- ======= End Form ======= -->

</main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/typed.js/typed.umd.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/main.js"></script>
</body>

</html>