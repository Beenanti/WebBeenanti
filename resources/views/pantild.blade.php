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
  

  <!-- Template Main CSS File -->
  <link href="{{asset('asset/css/stylesss.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-0.8487641,100.3644999),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

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
          <li class="dropdown"><a class="nav-link scrollto active" href="#"><span>Panti Asuhan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto active" href="/pantild">Panti Asuhan Liga Dakwah</a></li>
              <li><a class="nav-link scrollto" href="/pantinh">Panti Asuhan Nurul Hikmah</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="#features">Get Started</a></li>
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
          <h2><b>Panti Asuhan Liga Dakwah</b></h2>
          <p>Panti Asuhan Liga Dakwah membina anak-anak tingkat SMP sampai SMA <br> khusus perempuan yang berasal dari berbagai daerah di Sumatera Barat, Riau, Jambi, dan Bengkulu</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                
                <a href="https://goo.gl/maps/URaDYziJZM95RbWy7"><i class="bx bx-map"></i></a>
                <h4>Address</h4>
                <p>Jl. By Pass KM 18 Simpang Koto Panjang, Lubuak Minturun, <br>Padang, Sumatera Barat</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+62 813 7448 3610</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email</h4>
                <p>pantiligadakwah@gmail.com</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Facebook</h4>
                <p>Panti Asuhan Liga Dakwah</p>
              </div>
            </div>
          </div>
        
          <div class="col-lg-6">
              <!--<div id="googleMap" style="width:100%;height:380px;"></div>-->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3801627073994!2d100.36140777190923!3d-0.8491418330627855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c73a570a56d5%3A0xee8b71dc4007a19c!2sPanti%20Asuhan%20Liga%20Dakwah%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1689319398076!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <div class="content-navbar" data-aos="fade-up">
        <a href="#section1">Donasi</a>
        <a href="#section2">Relawan</a>
        <a href="#section3">Kunjungan</a>
        <a href="/rute">Rute</a>
        <a href="/karya">Karya</a>
    </div>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
    

      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><b>Program dan Fasilitas</b></h2>
          <p>Panti Asuhan Liga Dakwah merancang progam guna <br> melahirkan generasi qurani, cerdas, dan mandiri</p>
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
                        <td>: Yayasan Liga Dakwah</td>
                      </tr>   
                      <tr class="gradeX">
                        <td>Nama Pimpinan</td>
                        <td>: Hj. Nuraini, S.Pd</td>
                      </tr>  
                      <tr class="gradeX">
                        <td>Akreditasi</td>
                        <td>: B</td>
                      </tr> 
                      <tr class="gradeX">
                        <td>Jumlah Anak</td>
                        <td>: 52 orang anak (perempuan)</td>
                      </tr> 
                      <tr class="gradeX">
                        <td>Jumlah Pengurus</td>
                        <td>: 8 orang</td>
                      </tr>  
                      <tr class="gradeX">
                        <td>Jam Operasional</td>
                        <td>: 07.00-21.00 WIB</td>
                      </tr>    
                      <tr class="gradeX">
                        <td>Infrastruktur</td>
                        <td>: Ruang tamu, ruang serba guna, dapur, asrama, kamar mandi</td>
                      </tr>                  
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
                        <td>: Mukena, handuk, baju olahraga muslimah</td>
                      </tr>   
                      <tr class="gradeX">
                        <td>Pangan</td>
                        <td>: Beras, Minyak Goreng, gula, telur (sembako)</td>
                      </tr>  
                      <tr class="gradeX">
                        <td>Papan</td>
                        <td>: Kasur, bantal, selimut, sprai, lemari</td>
                      </tr> 
                      <tr class="gradeX">
                        <td>Bantuan/ donasi yang diterima</td>
                        <td>: Hibah, donasi tetap dan tidak tetap</td>
                      </tr>  
                      <tr class="gradeX">
                        <td>Jumlah donatur tetap bulanan</td>
                        <td>: 15 donatur ( <u>+</u> 34.275.000)</td>
                      </tr> 
                      <tr class="gradeX">
                        <td>Biaya rutin panti per bulan</td>
                        <td>: 39.025.000</td>
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
          <p>Dokumentasi kegiatan dan program Panti Asuhan Liga Dakwah</p>
          <p>Tahajud - Subuh Berjamaah - Tahfiz - Muhadharah - Keterampilan Memasak - Gotong Royong - Kultum - Makan Bersama</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="{{asset('asset/img/gallery/tahajud.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('asset/img/gallery/tahajud.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('asset/img/gallery/subuh.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('asset/img/gallery/subuh.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('asset/img/gallery/tahfiz.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('asset/img/gallery/tahfiz.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('asset/img/gallery/muhadharah.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('asset/img/gallery/muhadharah.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('asset/img/gallery/keterampilan memasak.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('asset/img/gallery/keterampilan memasak.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('asset/img/gallery/goro.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('asset/img/gallery/goro.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('asset/img/gallery/kultum.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('asset/img/gallery/kultum.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('asset/img/gallery/makan bersama.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('asset/img/gallery/makan bersama.jpg')}}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
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