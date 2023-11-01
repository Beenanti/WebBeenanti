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
                    <h2><b>Riwayat Pengajuan Relawan Anda</b></h2>
                </div>
                <?php if ($rela) { ?>
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-8" data-aos="fade-up">
                            @foreach ($rela as $item)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Pengajuan Relawan ke {{$item['panti']['nama_panti']}}</h5>
                                    <p class="card-text">Detail kunjungan : Anda telah mengajukan sebagai relawan pada tanggal {{$item['tanggal']}} pukul {{$item['waktu']}} selama kurang lebih {{$item['durasi']}}
                                        <br>Bidang kegiatan : {{$item['bidang']}}
                                        <br>Detail kegiatan : {{$item['detail']}}
                                        <br>Status pengajuan :
                                        <?php if ($item['status']['nama_status'] == "blm_verif") {
                                            echo "Pengajuan relawan belum diverifikasi";
                                        } else {
                                            echo "Pengajuan relawan sudah diverifikasi";
                                        } ?>
                                    </p>

                                    <p class="card-text">
                                        <small class="text-muted section-title">
                                            <a href="{{$item['berkas']}}" class="text-warning stretched-link">
                                                Dokumen pengajuan anda
                                        </small></a>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="section-title">
                        <p>Anda belum memiliki riwayat pengajuan relawan</p>
                    </div>
                <?php } ?>
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