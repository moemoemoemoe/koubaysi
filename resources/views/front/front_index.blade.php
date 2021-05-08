<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>BeeYoung  - Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

      <a href="" class="logo d-flex align-items-center">
<!--         <img src="img/logo.png" alt="">
 -->        <span style="color: #ffb101 ">BeeYoung</span>
      </a>

      <nav id="navbar" class="navbar" >
        <ul >
          <li><a class="nav-link scrollto active" href="#hero"  style="color: #ffb101 ">Home</a></li>
          <li><a class="nav-link scrollto" href="#about" style="color: #ffb101 ">About</a></li>
          <li><a class="nav-link scrollto" href="#blog" style="color: #ffb101 ">Blog</a></li>
          <li><a class="nav-link scrollto" href="#portfolio" style="color: #ffb101 ">Product</a></li>
     
          <li><a class="nav-link scrollto" href="#contact" style="color: #ffb101 ">Contact</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">BeeYoung For Food And Health....</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Some Text Here <strong>here Some</strong></h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
             
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('html/img/12.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content" style="font-size: 13px">
              <h3>Who We Are</h3>
              <h2>Bee Young For Health Beauty And 3assil</h2>
              <p>
                Bee Young For Health Beauty And 3assil
                Bee Young For Health Beauty And 3assilBee Young For Health Beauty And 3assil
                Bee Young For Health Beauty And 3assil

<h2>BeYoung</h2> 
Bee Young For Health Beauty And 3assil
Bee Young For Health Beauty And 3assil
Bee Young For Health Beauty And 3assilBee Young For Health Beauty And 3assilBee Young For Health Beauty And 3assilBee Young For Health Beauty And 3assilBee Young For Health Beauty And 3assil

              </p>
              <!-- <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('html/img/abt.png')}}" class="img-fluid" alt="" >
          </div>

        </div>
      </div>

    </section><!-- End About Section -->
  </main>
 
   <section id="blog" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class="row">


@foreach($articles as $article)
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{asset('uploads/articles/'.$article->image)}}" class="img-fluid" alt=""></div>
              <span class="post-date">{{$article->created_at}}</span>
              <h3 class="post-title">{{$article->title}}</h3>
              <a href="{{route('detail', $article->id)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

      @endforeach

      

        </div>

      </div>

    </section>
   
 
    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Products</h2>
          <p>Check our latest product</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            	  <li data-filter="*" class="filter-active">All</li>
            	@foreach($categories as $cat)
           
              <li data-filter=".{{$cat->category_name}}">{{$cat->category_name}}</li>
             
             @endforeach



            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

@foreach($products as $prod)
          <div class="col-lg-4 col-md-6 portfolio-item {{$prod->the_product->category_name}}">
            <div class="portfolio-wrap">
              <img src="{{asset('uploads/products/'.$prod->image)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$prod->name}}</h4>
              <!--   <p>{{$prod->description}}</p> -->
                <div class="portfolio-links">
                  <a href="{{asset('uploads/products/'.$prod->image)}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{$prod->description}}"><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          
  @endforeach
      

        </div>

      </div>

    </section>
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>  ElHadath, AlNasr Building, <br>Beirut, 4th Floor</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+961-3604177 <br> +961-3160050</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>

                  <p> Bee@gmail.com<br>koubaysi@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Sunday<br>9:00AM - 09:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section>

  </main>

  <footer id="footer" class="footer">

 

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="" class="logo d-flex align-items-center">
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
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About </a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#blog">Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Products</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Emergency Services.</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>

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