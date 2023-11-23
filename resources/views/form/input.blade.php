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
          <h1>Formulir Biodata Mahasiswa</h1>
        </div>
        <div class="card-body">
          <form name="formBiodata" action="/hasil" method="post" onsubmit="return validateForm()">
          @csrf
            <div class="form-group mb-3">
              <label><strong>NIM :</strong></label>
              <input type="text" name="nim" id="nim" placeholder="NIM" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label><strong>Nama lengkap :</strong></label>
              <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label><strong>Umur :</strong></label>
              <input type="text" name="umur" id="umur" placeholder="Umur" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label><strong>Jenis Kelamin :</strong></label>
                <select name="gender" id="gender" class="form-control">
                  <option selected>--Pilih--</option>
                  <option value="Laki - Laki">Male</option>
                  <option value="Perempuan">Female</option>
                  <option value="Tidak Ingin Memberi Tahu">Other</option>
                </select>
            </div>
            <div class="form-group mb-3">
              <label><strong>Alamat :</strong></label>
              <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label><strong>Hobi :</strong></label>
              <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi">
            </div>
            <div>
              <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <script>
        function validateForm() {
          // Validasi NIM
          if (document.forms["formBiodata"]["nim"].value == "") {
              alert("Anda belum memasukkan NIM Anda");
              document.forms["formBiodata"]["nim"].focus();
              return false;
          }
          // Validasi Nama Lengkap
          if (document.forms["formBiodata"]["fullname"].value == "") {
              alert("Anda belum memasukkan Nama Lengkap Anda");
              document.forms["formBiodata"]["fullname"].focus();
              return false;
          }
          // Validasi Umur
          if (document.forms["formBiodata"]["umur"].value == "") {
              alert("Anda belum memasukkan Umur Anda");
              document.forms["formBiodata"]["umur"].focus();
              return false;
          }
          // Validasi Jenis Kelamin
          if (document.forms["formBiodata"]["gender"].selectedIndex < 1) {
              alert("Anda belum memilih Jenis Kelamin Anda");
              document.forms["formBiodata"]["gender"].focus();
              return false;
          }
          // Validasi E-mail
          if (document.forms["formBiodata"]["alamat"].value == "") {
              alert("Anda belum memasukkan Alamat Anda");
              document.forms["formBiodata"]["alamat"].focus();
              return false;
          }
          // Validasi Hobi
          if (document.forms["formBiodata"]["hobi"].value == "") {
              alert("Anda belum memasukkan Hobi yang Anda miliki");
              document.forms["formBiodata"]["hobi"].focus();
              return false;
          }
        }
    </script>
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