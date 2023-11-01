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
  <style>
    .clickable-br {
      display: inline;
      cursor: pointer;
    }
  </style>
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

    <script>
      function copyToClipboard(text) {
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        alert("Teks berhasil disalin: " + text);
      }
    </script>
    <!-- ======= Karya Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2><b>Donasi Kepada {{$panti['nama_panti']}}</b></h2>
        </div>
        <div class="row" style="justify-content: center;">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <i class="bx bxs-bank"></i>
                <h4>Bank Account</h4>
                <p>Bank BRI<span class="clickable-br" onclick="copyToClipboard('549301018742533')"> <br>549301018742533</span><br>a.n Intan Yuliana Putri</i></p>
              </div>
              <div class="col-lg-6 info">
                <h4>QR Code</h4>
                <img src="https://api.beenanti.org/galeri/qris_beenanti.jpg" alt="QRIS" style="width: 150px; height: 150px;">
                <p>a.n Intan Yuliana Putri</p>
              </div>
              <div class="col-lg-6 info">
                <a href="https://goo.gl/maps/jhRZjqFxB6ZmVveJ9"><i class="bx bx-map"></i></a>
                <h4>Address</h4>
                <p>Universitas Andalas,<br>Padang, Sumatera Barat</p>
              </div>
              <div class="col-lg-6 info">
                <a href="https://wa.me/+6282170950159"><i class="bx bx-phone"></i></a>
                <h4>Call Us</h4>
                <p>+62 821 7095 0159</p>
              </div>
              <div class="col-lg-6 info">
                <a href="mailto:beenanti.id@gmail.com"><i class="bx bx-envelope"></i></a>
                <h4>Email Us</h4>
                <p>beenanti.id@gmail.com</p>
              </div>
              <div class="col-lg-6 info">
                <a href="https://instagram.com/beenanti.id"><i class="bx bxl-instagram"></i></a>
                <h4>Instagram</h4>
                <p>@beenanti.id</p>
              </div>
            </div>
          </div>
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
            <form action="/donasi/tambah" method="post" data-aos="fade-up" enctype="multipart/form-data">
              {{ csrf_field()}}
              <input type="text" name="id_panti" id="id_panti" value="{{$panti['id_panti']}}" hidden>
              <div class="form-group">
                <input placeholder="Nama Lengkap" type="text" name="name" class="form-control" id="name" value="{{session('user')->nama_user}}" readonly>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Email" type="email" class="form-control" name="email" id="email" value="{{session('user')->email}}" readonly>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Nama Donasi" type="text" class="form-control" name="nama_donasi" id="nama_donasi" required>
              </div>
              <div class="form-group mt-3">
                <select class="form-control" name="jenis_kebutuhan" required>
                  <option label="Jenis Kebutuhan" disabled selected></option>
                  <option value="sd">Sandang</option>
                  <option value="pg">Pangan</option>
                  <option value="pn">Papan</option>
                  <option value="by">Biaya</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Jumlah Donasi" type="text" class="form-control" name="jumlah_donasi" id="jumlah_donasi" required min="<?php echo date('Y-m-d'); ?>">
              </div>
              <div class="form-group mt-3">
                <select class="form-control" name="satuan" required>
                  <option label="Satuan" disabled selected></option>
                  <option value="bh">Buah</option>
                  <option value="kg">Kilogram</option>
                  <option value="rp">Rupiah</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <small class="text-muted">
                  <em>(*Diisi apabila donasi perlu dijemput)</em>
                </small>
                <input placeholder="Alamat Donatur" type="text" class="form-control" name="time" id="time">
              </div>
              <div class="form-group mt-3">
                <!-- <label class="col-md-3 control-label" for="berkas">Dokumen</label> -->
                <p>Masukkan Bukti Donasi</p>
                <small class="text-muted">
                  <em>Dapat berupa bukti transfer atau foto penyerahan barang</em>
                </small>
                <input class="form-control" type="file" name="bukti_tanda_terima" id="formFile">
              </div> <br>
              <div class="text-center">
                <button name="submit" type="submit" class="btn btn-outline-warning">Kirim Donasi</button>
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