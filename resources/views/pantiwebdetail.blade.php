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

  <!-- =======================================================
  * Template Name: Appland
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8B04MTIk7abJDVESr6SUF6f3Hgt1DPAY"></script>

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
          <li><a class="nav-link scrollto active" href="/pantiweb">Panti Asuhan</a></li>
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

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><b>{{$panti['nama_panti']}}</b></h2>
        </div>
        <div class="section-title" data-aos="fade-up">
          <?php if ($panti['galeri']) { ?>
            <div class="row" style="justify-content: center;">
              <img src="{{$panti['galeri'][0]['url']}}" class="card-img-top" alt="..." style="width: 50%; ">
            </div>
          <?php } ?>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <a href="" onclick="openGoogleMaps()"><i class="bx bx-map"></i></a>
                <h4>Address</h4>
                <p>{{$panti['alamat']}}<br>Padang, Sumatera Barat</p>
              </div>
              <div class="col-lg-6 info">
                <a href="https://wa.me/{{$panti['nohp']}}"><i class="bx bx-phone"></i></a>
                <h4>Call Us</h4>
                <p>{{$panti['nohp']}}</p>
              </div>
              <div class="col-lg-6 info">
                <a href="mailto:{{$panti['email']}}"><i class="bx bx-envelope"></i></a>
                <h4>Email</h4>
                <p>{{$panti['email']}}</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bxl-instagram"></i>
                <h4>Sosial Media</h4>
                <p>{{$panti['sosmed']}}</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <!--<div id="googleMap" style="width:100%;height:380px;"></div>-->
            <div id="map" style="height: 400px; width: 100%;"></div>
            <script>
              // Inisialisasi peta
              function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                  center: {
                    lat: -0.867959,
                    lng: 100.455848
                  }, // Ganti dengan koordinat pusat peta
                  zoom: 11 // Ganti dengan tingkat zoom yang Anda inginkan
                });

                // Tambahkan marker untuk beberapa objek
                <?php foreach ($panti as $item) { ?>
                  var locations = [{
                    lat: <?php echo json_encode($panti['koordinat'][0]); ?>,
                    lng: <?php echo json_encode($panti['koordinat'][1]); ?>,
                    name: <?php echo json_encode($panti['nama_panti']); ?>
                  }];

                  for (var i = 0; i < locations.length; i++) {
                    var marker = new google.maps.Marker({
                      position: {
                        lat: locations[i].lat,
                        lng: locations[i].lng
                      },
                      map: map,
                      title: locations[i].name
                    });
                  }
                <?php } ?>
              }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8B04MTIk7abJDVESr6SUF6f3Hgt1DPAY&callback=initMap"></script>


          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <?php
    if (session()->has('token')) {
      // Jika sesi tersedia
      $id_panti = $panti['id_panti'];
      $url1 = "/donasi/" . $id_panti;
      $url2 = "/relawan/" . $id_panti;
      $url3 = "/kunjungan/" . $id_panti;
    } else {
      // Jika sesi tidak tersedia
      $url1 = "/login";
      $url2 = "/login";
      $url3 = "/login";
      $onClickDonasi = "onDonasi()";
      $onClickRelawan = "onRelawan()";
      $onClickKunjungan = "onKunjungan()";
    }
    ?>
    <div class="content-navbar" data-aos="fade-up">
      <a href="<?php echo $url1; ?>" <?php if (isset($onClickDonasi)) {
                                        echo "onclick='$onClickDonasi'";
                                      } ?>>Donasi</a>
      <a href="<?php echo $url2; ?>" <?php if (isset($onClickRelawan)) {
                                        echo "onclick='$onClickRelawan'";
                                      } ?>>Relawan</a>
      <a href="<?php echo $url3; ?>" <?php if (isset($onClickKunjungan)) {
                                        echo "onclick='$onClickKunjungan'";
                                      } ?>>Kunjungan</a>

      <!-- <a href="" onclick="openGoogleMaps()">Rute</a> -->
      <a href="/karya/{{$panti['id_panti']}}">Karya</a>
    </div>
    <script>
      function onDonasi() {
        // Menampilkan pesan alert
        alert('Anda harus login untuk melakukan Donasi.');
      }

      function onRelawan() {
        // Menampilkan pesan alert
        alert('Anda harus login untuk mengajukan relawan.');
      }

      function onKunjungan() {
        // Menampilkan pesan alert
        alert('Anda harus login untuk mengajukan kunjungan.');
      }
    </script>
    <script>
      function openGoogleMaps() {
        var lat = <?php echo json_encode($panti['koordinat'][0]); ?>; // Ganti dengan nilai latitude yang diinginkan
        var long = <?php echo json_encode($panti['koordinat'][1]); ?>; // Ganti dengan nilai longitude yang diinginkan
        var url = "https://www.google.com/maps/search/?api=1&query=" + lat + "," + long;
        window.open(url, '_blank');
      }
    </script>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">


      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><b>Program dan Fasilitas</b></h2>
          <p>{{$panti['nama_panti']}} merancang progam guna <br> melahirkan generasi qurani, cerdas, dan mandiri</p>
        </div>

        <div class="testimonials-slider " data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="row">
              <div class="col-lg-6">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Detail Panti Asuhan</h3>
                  <p>
                  <table class="table table-bordered table-striped mb-none">
                    <tbody>
                      <tr class="gradeX">
                        <td>Lembaga</td>
                        <td>: {{$panti['nama_panti']}}</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Nama Pimpinan</td>
                        <td>: {{$panti['nama_pimpinan']}}</td>
                      </tr>
                      <!-- <tr class="gradeX">
                        <td>Akreditasi</td>
                        <td>: B</td>
                      </tr> -->
                      <tr class="gradeX">
                        <td>Jumlah Anak</td>
                        <td>: {{$panti['jumlah_anak']}} orang anak</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Jumlah Pengurus</td>
                        <td>: {{$panti['jumlah_pengurus']}} orang</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Jam Operasional</td>
                        <td>: 07.00-21.00 WIB</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Jenis Panti</td>
                        <td>: {{$panti['jenis']}}</td>
                      </tr>
                      <!-- <tr class="gradeX">
                        <td>Infrastruktur</td>
                        <td>: Ruang tamu, ruang serba guna, dapur, asrama, kamar mandi</td>
                      </tr> -->
                    </tbody>
                  </table>
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Kebutuhan Panti Asuhan</h3>
                  <p>
                  <table class="table table-bordered table-striped mb-none">
                    <tbody>
                      <tr class="gradeX">
                        <td>Sandang </td>
                        <td>:@foreach ($sandang as $item) {{$item['nama']}} @endforeach</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Pangan</td>
                        <td>: @foreach ($pangan as $item) {{$item['nama']}} @endforeach
                        </td>
                      </tr>
                      <tr class="gradeX">
                        <td>Papan</td>
                        <td>: @foreach ($papan as $item) {{$item['nama']}} @endforeach</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Bantuan/ donasi yang diterima</td>
                        <td>: Hibah, donasi tetap dan tidak tetap</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Jumlah donatur tetap bulanan</td>
                        <td>: @foreach ($donatur as $item) {{$item['nama']}} donatur ( <u>+</u> {{$item['jumlah']}} )@endforeach</td>
                      </tr>
                      <tr class="gradeX">
                        <td>Biaya rutin panti per bulan</td>
                        <td>: Rp. @foreach ($biaya as $item) {{$item['jumlah']}}@endforeach</td>
                      </tr>
                    </tbody>
                  </table>
                  </p>
                </div>
              </div>
            </div>


          </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><b>Kegiatan</b></h2>
          <?php if ($galeri) { ?>
            <p>Dokumentasi kegiatan dan program {{$panti['nama_panti']}}</p>
            <!-- <p>Tahajud - Subuh Berjamaah - Tahfiz - Muhadharah - Keterampilan Memasak - Gotong Royong - Kultum - Makan Bersama</p> -->
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper">
            @foreach ($galeri as $item)
            <div class="swiper-slide"><a href="{{$item['url']}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{$item['url']}}" class="img-fluid" alt=""></a></div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    <?php } else { ?>
      <div class="section-title">
        <p>{{$panti['nama_panti']}} belum memiliki dokumentasi kegiatan</p>
      </div>
    <?php } ?>
    </section><!-- End Gallery Section -->




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