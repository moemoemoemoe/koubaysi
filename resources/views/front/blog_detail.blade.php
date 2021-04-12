<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('html/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('html/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('html/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('html/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('html/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('html/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('html/css/style.css')}}" rel="stylesheet">


  
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('front')}}" class="logo d-flex align-items-center">
<!--         <img src="img/logo.png" alt="">
 -->        <span style="color: #ffb101 ">BeeYoung</span>
      </a>

      <nav id="navbar" class="navbar" >
        <ul >
          <li><a class="nav-link scrollto active" href="{{route('front')}}#hero"  style="color: #ffb101 ">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('front')}}#about" style="color: #ffb101 ">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('front')}}#blog" style="color: #ffb101 ">Blog</a></li>
          <li><a class="nav-link scrollto" href="{{route('front')}}#portfolio" style="color: #ffb101 ">Product</a></li>
     
          <li><a class="nav-link scrollto" href="{{route('front')}}#contact" style="color: #ffb101 ">Contact</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="background: #ffb101">
      <div class="container">

      
        <h2>{{$articles->title}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{asset('uploads/articles/'.$articles->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$articles->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">By Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$articles->created_at}}</time></a></li>
                
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 {{$articles->description}}
                </p>

             

               
             

              </div>


            </article><!-- End blog entry -->

           <!-- End blog author bio -->

          
              

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->


        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer" class="footer">

 

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
<!--               <img src="img/logo.png" alt="">
 -->              <span style="color: #ffb101 ">BeeYoung</span>
            </a>
            <p>PLEASE WRITE A BRIEF ABOUT ME</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">About </a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Products</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="">Emergency Services.</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="">Services</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
            ElHadath, AlNasr Building, 4th Floor <br>
             Baalbeck-TalAlAbyad, Hassan Building<br>
              Lebanon <br><br>
              <strong>Phone:</strong>+961-1231243 OR +961-1223432
<br>
              <strong>Email:</strong> Beyoung@gmail.com<br>
              <strong>Alternate Email:</strong> koubaysi@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BeeYoung</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="#">Mohamad Hamieh</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{asset('html/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('html/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('html/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('html/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('html/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('html/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('html/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('html/js/main.js')}}"></script>
</body>

</html>