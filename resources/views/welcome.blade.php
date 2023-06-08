<!DOCTYPE html>
<html lang="en">
<head>

     <title>Bimbingan Konseling</title>
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
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#testimonial">Team</a></li>



                    @auth
                      {{-- <li><a class="nav-link scrollto" href="#hero">Home</a></li> --}}                      
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
                              <a class="nav-link scrollto" id="tentang-link" href="{{ 'guru' }}">Dashboard</a>
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
                                  <button class="getstarted scrollto">Log Out</button>
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
                      <img src="{{ asset('FlexStart/assets/img/hero-img.png') }}"
                          class="img-fluid" alt="">
                  </div>
                </div>
            </div>
      </section><!-- End Her -->
      
      <!-- ABOUT -->
      <section class="about section-padding pb-0" id="about">
          <div class="container">
              <div class="row">
                  
                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">
                             
                             <h2 class="mb-4" data-aos="fade-up">Tentang Kami</h2>
                             
                             <p class="mb-0" data-aos="fade-up">Bimbingan Konseling SMK Taruna Bhakti Depok adalah sebuah layanan yang disediakan oleh SMK Taruna Bhakti Depok untuk membantu siswa dalam menghadapi berbagai masalah pribadi, akademik, dan sosial-emosional.</p> <br>
                             
                             <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                                 
                               <img src="template/img/ik.png" class="img-fluid" alt="office" width="450">
                            </div>
                            
                            <br> <p> Program bimbingan konseling ini bertujuan untuk meningkatkan kesejahteraan siswa serta membantu mereka mencapai potensi penuh mereka di dalam dan di luar lingkungan sekolah.</p>
                         </div>
                         
                        </div>
                        
                    </div>
                </div>
     </section>

     
     <!-- PROJECT -->
     <section class="project section-padding" id="project">
         <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Please take a look through our
                            <strong>featured Digital Trends</strong>
                        </h2>
                        
                        <div class="owl-carousel owl-theme" id="project-slide">
                            <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/project/project-image01.jpg" class="img-fluid" alt="project image">
                                
                                <div class="project-info">
                                    <small>Marketing</small>
                                    
                                    <h3>
                                        <a href="project-detail.html">
                                            <span>Sweet Go Agency</span>
                                            <i class="fa fa-angle-right project-icon"></i>
                                        </a>
                                    </h3>
                                   </div>
                              </div>
                              
                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image02.jpg" class="img-fluid" alt="project image">
                                   
                                   <div class="project-info">
                                        <small>Website</small>
                                        
                                        <h3>
                                             <a href="project-detail.html">
                                                 <span>Smart Ladies</span>
                                                 <i class="fa fa-angle-right project-icon"></i>
                                                </a>
                                        </h3>
                                    </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                  <img src="images/project/project-image03.jpg" class="img-fluid" alt="project image">
                                  
                                  <div class="project-info">
                                        <small>Branding</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Shoes factory</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                                </a>
                                        </h3>
                                   </div>
                                </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image04.jpg" class="img-fluid" alt="project image">
                                   
                                   <div class="project-info">
                                        <small>Social Media</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Race Bicycle</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                            </h3>
                                        </div>
                                    </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                  <img src="images/project/project-image05.jpg" class="img-fluid" alt="project image">
                                  
                                  <div class="project-info">
                                        <small>Video</small>
                                        
                                        <h3>
                                            <a href="project-detail.html">
                                                <span>Ultimate HealthCare</span>
                                                <i class="fa fa-angle-right project-icon"></i>
                                            </a>
                                        </h3>
                                    </div>
                              </div>
                            </div>
                    </div>
                    
                </div>
          </div>
        </section>

        
        <!-- TESTIMONIAL -->
        <section class="testimonial section-padding" id="testimonial">
          <div class="container">
               <div class="row">
                   
                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">
                            
                            <img src="images/female-avatar.png" class="img-fluid" alt="website">
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-7 col-12">
                        <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>
                        
                        <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>
                        
                      <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">“Bertahan hidup artinya selalu siap untuk berubah karena perubahan adalah jalan menuju kedewasaan. Dan kedewasaan adalah sikap untuk selalu mengembangkan kualitas pribadi tanpa henti.” <br><strong>Henri Bergson, Filsuf Prancis.</strong></h2>
                      
                    </div>

                </div>
            </div>
        </section>

        
        <footer class="site-footer">
            <div class="container">
        <div class="row">
            
          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
              <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">StarBhak
                  
            </h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
                <i class="fa fa-phone mr-2 footer-icon"></i> 
                +021------
            </p>
            
            <p>
                <a href="#">
                    <i class="fa fa-envelope mr-2 footer-icon"></i>
                    deicide@levelrage.com
                </a>
            </p>
          </div>
          
          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Studio</h4>
            
            <p class="mb-1">
                <i class="fa fa-home mr-2 footer-icon"></i> 
             Smk Taruna Bhakti Depok, Jawa Barat, Indonesia
            </p>
        </div>
        
        <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Starbhak
                <br>
            </div>
            
            <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                

            </div>
            
            <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
        </div>
        
    </div>
</div>
    </footer>


     <!-- SCRIPTS -->
     <script {{ asset('FlexStart/assets/js/main.js') }}></script>
     <script src="template/js/jquery.min.js"></script>
     <script src="template/js/bootstrap.min.js"></script>
     <script src="template/js/aos.js"></script>
     <script src="template/js/owl.carousel.min.js"></script>
     <script src="template/js/smoothscroll.js"></script>
     <script src="template/js/custom.js"></script>
     
    </body>
    </html>