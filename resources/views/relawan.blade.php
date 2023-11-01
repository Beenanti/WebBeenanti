<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beenanti</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('asset/img/gallery/logo.png.png')}}" rel="icon">
  <link href="{{asset('asset/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('asset/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('asset/css/stylesss.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><img src="{{asset('asset/img/gallery/logo.png.png')}}" class="img-fluid" alt=""><a href="index.html"> Beenanti</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/">App Features</a></li>
          <li><a class="nav-link scrollto" href="/">Gallery</a></li>
          <li><a class="nav-link scrollto" href="/">F.A.Q</a></li>
          <li><a class="nav-link scrollto" href="/">Collaboration</a></li>
          <li><a class="nav-link scrollto" href="/pantiweb">Panti Asuhan</a>
            <?php if (session()->has('token')) { ?>
          <li>
            <div class="dropdown">
              <a class="getstarted scrollto" href="/pantiweb">{{session('user')->nama_user}}</a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/riwayatDonasi">Riwayat Donasi</a></li>
                <li><a class="dropdown-item" href="/riwayatRelawan">Riwayat Relawan</a></li>
                <li><a class="dropdown-item" href="/riwayatKunjungan">Riwayat Kunjungan</a></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</button>
                  </form>
              </ul>
            </div>
          </li>
        <?php } else { ?>
          <li><a class="getstarted scrollto" href="/login">Get Started</a></li>
        <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

      </div>
    </section>
    <!-- End Testimonials Section -->


    <!-- ======= Karya Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2><b>Pengajuan Relawan Kepada {{$panti['nama_panti']}}</b></h2>
        </div>
        <div class="row" style="justify-content: center;">
          <div class="col-lg-6" data-aos="fade-up">
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            @if(session('danger'))
            <div class="alert alert-danger">
              {{ session('danger') }}
            </div>
            @endif
            <form action="/relawan/tambah" method="post" data-aos="fade-up" enctype="multipart/form-data">
              {{ csrf_field()}}
              <input type="text" name="id_panti" id="id_panti" value="{{$panti['id_panti']}}" hidden>
              <div class="form-group">
                <input placeholder="Nama Lengkap" type="text" name="name" class="form-control" id="name" value="{{session('user')->nama_user}}" readonly>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Email" type="email" class="form-control" name="email" id="email" value="{{session('user')->email}}" readonly>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Bidang keahlian relawan" type="text" class="form-control" name="bidang" id="bidang" required min="<?php echo date('Y-m-d'); ?>">
              </div>
              <div class="form-group mt-3">
                <input placeholder="Tanggal" type="date" class="form-control" name="tanggal" id="tanggal" required min="<?php echo date('Y-m-d'); ?>">
              </div>
              <div class="form-group mt-3">
                <input placeholder="Time" type="time" class="form-control" name="time" id="time" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Durasi kegiatan relawan" type="text" class="form-control" name="durasi" id="durasi" required>
              </div>
              <div class="form-group mt-3">
                <textarea placeholder="Detail kegiatan relawan" class="form-control" name="detail" rows="5" required></textarea>
              </div>
              <div class="form-group mt-3">
                <!-- <label class="col-md-3 control-label" for="berkas">Dokumen</label> -->
                <p>Masukkan Dokumen Pengajuan Relawan</p>
                <small class="text-muted">
                  <em>Dapat berupa proposal atau surat keterangan</em>
                </small>
                <input class="form-control" type="file" name="berkas" id="formFile">
              </div> <br>
              <div class="text-center">
                <button name="submit" type="submit" class="btn btn-outline-warning">Kirim Pengajuan</button>
              </div>
            </form>
          </div>

        </div>
    </section>
    <!-- End Karya Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <!-- <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Beenanti</h3>
            <p>
              Limau Manis <br>
              Padang<br>
              Sumatera Barat<br><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Mari bertemu di media sosial
              <strong>Instagram:</strong> @beenanti.id<br>
              <strong>Email:</strong> beenanti.id@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://instagram.com/beenanti.id" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Beenanti</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('asset/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('asset/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('asset/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('asset/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('asset/js/main.js')}}"></script>

</body>

</html>