<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Younnie | New Form Mahasiswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/logo-home-page.png" rel="icon">
  <link href="/img/logo-home-page.png" rel="logo-icon">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-image" style="background-image: url(/img/home-bg.jpg)">
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
    <div class="container mt-4">
      <div class="card">
        <div class="card-header text-center font-weight-bold">
          <h1>Formulir Biodata Mahasiswa</h1>
        </div>
        <div class="card-body">
          <form name="formBiodata" action="/mahasiswa" method="post" onsubmit="return validateForm()">
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
            <div>
              <label><strong>Jenis Kelamin :</strong></label>
              <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki'>Male</p>
              <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan'>Female</p>
              <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Tidak Ingin Memberi Tahu'>Other</p>
            </div>
            <div class="form-group mb-3">
              <label><strong>Fakultas :</strong></label>
              <input type="text" name="fakultas" id="fakultas" placeholder="Fakultas" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label><strong>Program Studi :</strong></label>
                <select name="prodi" id="prodi" class="form-control">
                  <option selected>Pilih Program Studi</option>
                  <option value="S1 Arsitektur">S1 Arsitektur</option>
                  <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
                  <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                  <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                  <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
                  <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                  <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
                </select>
            </div>
            <div class="form-group mb-3">
              <label><strong>Email :</strong></label>
              <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control">
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
          var jeniskelamin = document.getElementsByName('jeniskelamin');
          var genValue = false;
          for (var i = 0; i < jeniskelamin.length; i++) {
              if (jeniskelamin[i].checked == true) {
                  genValue = true;
              }
          }
          if (!genValue) {
              alert("Anda belum memilih Jenis Kelamin Anda");
              return false;
          }
          // Validasi Fakultas
          if (document.forms["formBiodata"]["fakultas"].value == "") {
              alert("Anda belum memasukkan Fakultas Anda");
              document.forms["formBiodata"]["fakultas"].focus();
              return false;
          }
          // Validasi Program Studi
          if (document.forms["formBiodata"]["prodi"].selectedIndex < 1) {
              alert("Anda belum memilih Program Studi Anda");
              document.forms["formBiodata"]["prodi"].focus();
              return false;
          }
          // Validasi E-mail
          if (document.forms["formBiodata"]["email"].value == "") {
              alert("Anda belum memasukkan E-mail Anda");
              document.forms["formBiodata"]["email"].focus();
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
  <script src="/js/main.js"></script>
</body>

</html>