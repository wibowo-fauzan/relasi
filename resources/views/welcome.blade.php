<!DOCTYPE html>
<html lang="en">
<head>

  <title>Layanan Konseling</title>
  <link href="{{ asset('FlexStart/assets/img/loggo.png') }}" rel="icon">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="template/css/bootstrap.min.css">
     <link rel="stylesheet" href="template/css/font-awesome.min.css">
     <link rel="stylesheet" href="template/css/aos.css">
     <link rel="stylesheet" href="template/css/owl.carousel.min.css">
     <link rel="stylesheet" href="template/css/owl.theme.default.min.css">
         <!-- Vendor CSS Files -->
    <link href="{{ asset('FlexStart/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('FlexStart/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('FlexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ asset('FlexStart/assets/vendor/glightbox/css/glightbox.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('FlexStart/assets/vendor/remixicon/remixicon.css') }}"
        rel="stylesheet">
    <link href="{{ asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.css') }}"
        rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('FlexStart/assets/css/style.css') }}" rel="stylesheet">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="template/css/templatemo-digital-trend.css">
     <link rel="stylesheet" href="{{ asset('FlexStart/welcome.css') }}">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap');
      </style>
    </head>
    <body>
        
        <!-- MENU BAR -->
        <header id="header" class="header fixed-top">
          <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
              
              <a href="index.html" class="logo d-flex align-items-center">
                  <img src="{{ asset('FlexStart/assets/img/loggo.png') }}" alt="">
                  <span>StarLing</span>
                </a>
                
              <nav id="navbar" class="navbar">
                <ul>
                    @auth
                    @if(auth()->user())
                    <li>
                        <a href="" class="nav-link scrollto">{{ auth()->user()->username }}</a>
                    </li>
                    @endif
                    @endauth
                    {{-- <li><a class="nav-link scrollto " href="#hero">Home</a></li> --}}
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    {{-- <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li> --}}

                    @auth
                    @if(auth()->user()->role === 'admin')
                    <li class="nav-item">
                                <a class="nav-link scrollto" id="tentang-link" href="{{ 'dashboard' }}">Dashboard</a>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" id="layanan-link"
                                href="{{ 'https://smktarunabhakti.net/index.php/sarana-lainnya-before-import/' }}">Layanan</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="kontak-link"
                                    href="{{ 'https://smktarunabhakti.net/index.php/contact-us-before-import/' }}">Kontak</a>
                            </li>
                            {{-- gurubk --}}
                        @elseif(auth()->user()->role === 'gurubk')
                            <li class="nav-item">
                                <a class="nav-link scrollto" id="tentang-link" href="{{ '' }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" id="layanan-link" href="{{ '' }}">Layanan</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link scrollto" id="kontak-link" href="{{ '' }}">Kontak</a>
                              </li>
                              {{-- murid --}}
                        @elseif(auth()->user()->role === 'murid')
                        <li class="nav-item">
                                <a class="nav-link scrollto" id="tentang-link"
                                href="{{ 'https://smktarunabhakti.net/index.php/whytarbak-before-import/identitas-sekolah-before-import/' }}">Tentang</a>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" id="layanan-link"
                                href="{{ 'https://smktarunabhakti.net/index.php/sarana-lainnya-before-import/' }}">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" id="kontak-link"
                                href="{{ 'https://smktarunabhakti.net/index.php/contact-us-before-import/' }}">Kontak</a>
                              </li>
                            {{-- walikelas --}}
                            @elseif(auth()->user()->role === 'walikelas')
                            <li class="nav-item">
                                <a class="nav-link scrollto" id="tentang-link"
                                    href="{{ 'walikelas' }}">Dashboard</a>
                                  </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" id="layanan-link" href="{{ '' }}">Layanan</a>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link scrollto" id="kontak-link" href="{{ '' }}">Kontak</a>
                              </li>
                        @endif
                    @else
                    @endauth

                    <li class="nav-item">
                        @if (Route::has('login'))
                        @auth
                        <form action="{{ route('logout') }}" method="POST">
                          @csrf
                          <button class="btn btn-primary">Log Out</button>
                      </form>
                      @else
                      <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                      {{-- <a href="{{ route('login') }}" class="nav-link contact" >Log in</a>
  
                          @if (Route::has('register')) --}}
                              {{-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> --}}
                          {{-- @endif --}}
                      @endauth
              @endif
                    </li>
                  </ul>
                 
                  <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
  
            </div>
      </header>


     <!-- HERO -->
     <section id="hero" class="hero d-flex align-items-center">

          <div class="container">
              <div class="row">
                  <div class="col-lg-6 d-flex flex-column justify-content-center">
                      <h1 data-aos="fade-up">Layanan Bimbingan Konseling SMK Taruna Bhakti</h1>
                      <h2 data-aos="fade-up" data-aos-delay="400">Cinta memang seperti skripsi, butuh bimbingan</h2>
                      <div data-aos="fade-up" data-aos-delay="600">
                          <div class="text-center text-lg-start">
                              <a href="#about"
                              class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                              <span>Login</span>
                                  <i class="bi bi-arrow-right"></i>
                              </a>
                          </div>
                        </div>
                  </div>
                  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                      <img src="{{ asset('FlexStart/assets/img/logolanding.png') }}"
                          class="img-fluid" alt="">
                  </div>
                </div>
            </div>
      </section><!-- End Her -->
      
      <!-- ABOUT -->
     <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h1 id="tentangKami">Tentang Kami</h1>
                <p>
                  Bimbingan Konseling SMK Taruna Bhakti Depok adalah sebuah layanan yang disediakan oleh SMK Taruna Bhakti Depok untuk membantu siswa dalam menghadapi berbagai masalah pribadi, akademik, dan sosial-emosional. Program bimbingan konseling ini bertujuan untuk meningkatkan kesejahteraan siswa serta membantu mereka mencapai potensi penuh mereka di dalam dan di luar lingkungan sekolah.
                </p>
              </div>
            </div>
  
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('FlexStart/assets/img/aboutlanding.png') }}" class="img-fluid" alt="">
            </div>
  
          </div>
        </div>
     
  </section>
{{-- TEAMM --}}
     <section id="team" class="team">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Guru Bk</h2>
            <p>SMK Taruna Bhakti</p>
          </header>
  
          <div class="row gy-4">
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('FlexStart/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Quotes</span>
                  <p>“Berhenti menahan diri. 
                      Jika anda tidak senang            
                    melakukan perubahan.”</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('FlexStart/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Gunawan</h4>
                  <span>Quotes</span>
                  <p>"nothing is impossible. Anything can happen as long as we believe. "</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('FlexStart/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Ricky Suderajat</h4>
                  <span>Quotes</span>
                  <p>"Be a strong wall in the hard times and be a smiling sun in the good times."  </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('FlexStart/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Kasandra</h4>
                  <span>Quotes</span>
                  <p>"Do not blame your past, because the past will never change."  </p>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section>
      {{-- END TEAM --}}

       <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </header>
  
          <div class="row">
            <div class="col-lg-6">
              <!-- F.A.Q List 1-->
              <div class="accordion accordion-flush" id="faqlist1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                        Visi dari SMK Taruna Bhakti Depok?
                    </button>
                  </h2>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                        Menghasilkan lulusan yang kompeten dalam IPTEK DAN  IMTAQ, serta mampu bersaing pada tingkat nasional dan global
                    </div>
                  </div>
                </div>
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                    </button>
                  </h2>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                  </div>
                </div>
  
               
  
              </div>
            </div>
  
            <div class="col-lg-6">
  
              <!-- F.A.Q List 2-->
              <div class="accordion accordion-flush" id="faqlist2">
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                        Misi dari SMK Taruna Bhakti Depok ?
                    </button>
                  </h2>
                  <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                       - Menumbuhkan semangat kreatifitas, bersinergi dan kompetitif kepada seluruh warga sekolah. <br>
                       - Melaksanakan kurikulum melalui pembelajaran dan penilaian berbasis kompetensi, Berbasis wirausaha, berwawasan lingkungan.dan berlandaskan kejujuran.<br>
                       - Meningkatkan kualitas sumber daya manusia melalui sertifikasi Kompetensi Tingkat Nasional dan Internasional.<br>
                       - Mengembangkan potensi peserta didik melalui kegiatan Minat dan Bakat dan pembinaan kedisiplinan.<br>
                       - Menerapkan layanan prima dalam pengelolaan sekolah melalui Sistem Manajeman Mutu.<br>
                    </div>
                  </div>
                </div>
  
               
  
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                      Varius vel pharetra vel turpis nunc eget lorem dolor?
                    </button>
                  </h2>
                  <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End F.A.Q Section -->

    

        <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('FlexStart/assets/img/loggo.png') }}" alt="">
              <span>StarLing</span>
            </a>
            <p>If you want to take part in daily activities at SMK Taruna Bhakti, don't forget to follow us below</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


     <!-- Vendor JS Files -->
  <script src="{{ asset('FlexStart/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('FlexStart/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('FlexStart/assets/js/main.js') }}"></script>
     
    </body>
    </html>