<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Younnie | List Data Mahasiswa</title>
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
      <li><a class="nav-link scrollto" href="/#taks">Taks</a></li>
      <li><a class="nav-link scrollto active" href="/mahasiswa">List Biodata</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- ======= End navbar ======= -->
    </div>
  </header>
  <!-- ======= End Header ======= -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <div id="form" class="form-mf sect-pt4 route mt-4 mb-4">
    <div class="container mt-5">
      <h1 class="text-center mb-5">List Biodata Mahasiswa</h1>
      <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama Lengkap</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Hobi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <form action="/mahasiswa/create" method="get">
          <button class="badge bg-success border-0 mb-2" type="submit">New Data</button>
        </form>
        @foreach ($data as $mahasiswa)
          <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->fullname }}</td>
            <td>{{ $mahasiswa->umur }}</td>
            <td>{{ $mahasiswa->gender }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            <td>{{ $mahasiswa->hobi }}</td>
            <td>
              <form action="/mahasiswa/{{ $mahasiswa->id }}/edit" method="GET">
              <button class="badge bg-primary border-0">Edit</button>
              </form>
              <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apa Anda yakin menghapus data ini?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
  <!-- ======= End Hasil Form ======= -->

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