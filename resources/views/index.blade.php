<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/png">

    <title>Campaigners MIU</title>
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/LineIcons.2.0.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- Tiny Slider  -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/tiny-slider.css") }}">
    <!-- Tailwind css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/main.css") }}">
  </head>
  <body class="font-sans">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap" class="relative">
      <!-- Navbar Start -->      
      <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
          <div class="container">
              <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                  <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                  </a>
                  <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="toggler-icon"></span>
                      <span class="toggler-icon"></span>
                      <span class="toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                          <li class="nav-item">
                            <a class="page-scroll active" href="#hero-area">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#services">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#feature">feature</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#team">Team</a>
                          </li>
                          
                      </ul>
                  </div>
                  <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                    <a class="text-green-600 border border-green-600 px-10 py-3 rounded-full duration-300 hover:bg-green-600 hover:text-white" href="{{ route('login') }}">Login</a>
                  </div>
              </nav>
          </div>
      </div>
      <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Hero Area Start -->
    <section id="hero-area" class=" pt-48 pb-10">
      <div class="w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <img src="{{ asset('assets/img/top-banner.svg') }}" class="w-full h-full object-cover object-center" alt="">
      </div>
      <div class="container">
        <div class="flex justify-between">
          <div class="w-full text-center">
              <h2 class="text-xl lg:text-3xl  leading-snug text-white wow fadeInUp" data-wow-delay="2s">
                EMPOWERING THE NEW DECADE
              </h2>
              <h1 class="uppercase text-4xl md:text-5xl lg:text-7xl wow fadeInUp text-white  mb-10" data-wow-delay="0.5s">Campaigners</h1>
            
            <div class="text-center wow fadeInUp mb-10" data-wow-delay="2.5s">
              <img class="img-fluid mx-auto" src="{{ asset('assets/img/logo-white.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Area End -->

    <!-- Services Section Start -->
    <section id="services" class="py-24 mt-64">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Our Committees</h2>
        </div>
        <div class="flex flex-wrap">
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon text-5xl">
                <i class="las la-laptop"></i>
              </div>
              <div>
                <h3 class="service-title">Personnel</h3>
                <p class="text-gray-600">Our tech HR.<br>
                  It’s “IT” committee with “HR” skills responsible for everything related to our system, managing Campaigners’ website, collecting data, creating forms, evaluation of members, monitoring rules, and solving problems.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon text-5xl">
                <i class="las la-comments-dollar"></i> 
              </div>
              <div>
                <h3 class="service-title">Fundraising</h3>
                <p class="text-gray-600">Our mains suppliers.<br>
                  They’re responsible for collecting money, holding the club’s budget, reaching out sponsors for the treats on campus and events.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon text-5xl">
                <i class="las la-bullhorn"></i>
              </div>
              <div>
                <h3 class="service-title">Public Relations</h3>
                <p class="text-gray-600">The image of the club.<br>
                  They’re responsible for managing all our social media platforms, Branding our name online and offline, doing online and offline campaigns and for any collaborations.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon text-5xl">
                <i class="las la-camera-retro"></i>
              </div>
              <div>
                <h3 class="service-title">Multimedia</h3>
                <p class="text-gray-600">Our cameramen.<br>
                They’re responsible for photography, videography, design and all the media coverage on events throughout the year.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
              <div class="icon text-5xl">
                <i class="las la-tools"></i>
              </div>
              <div>
                <h3 class="service-title">Coordination</h3>
                <p class="text-gray-600">Our creativity makers<br>
                  They’re responsible for planning and organizing our events, activities and booths. Also their work reflects our image.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon text-5xl">
                  <i class="las la-business-time"></i>
              </div>
              <div>
                <h3 class="service-title">Coaching</h3>
                <p class="text-gray-600">Our drillers.<br>
                  They’re responsible for teaching how te be a leader, marketing a behavior to the audience and also making a campaign from A to Z.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Services Section Start -->
    <section id="services" class="py-24">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Our Schools</h2>
        </div>
        <div class="flex flex-wrap">
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon text-5xl">
                <i class="las la-brain"></i>
              </div>
              <div>
                <h3 class="service-title">Psychology</h3>
                <p class="text-gray-600">
                  This school will not be only about body languages, but it will consist of psychological theories and how everything affects the human being and his mental state
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon text-5xl">
                <i class="lar la-lightbulb"></i>
              </div>
              <div>
                <h3 class="service-title">Entrepreneurship</h3>
                <p class="text-gray-600">
                  An entrepreneur is a person who is willing to develop, risk, manage and create a business project by his/her own. This school will be keen on showing how to reach success not how to earn money.
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon text-5xl">
                <i class="las la-atom"></i>
              </div>
              <div>
                <h3 class="service-title">Humanities</h3>
                <p class="text-gray-600">
                  This school is about the science of sciences, it includes everything in life, it includes everything related to human beings, and to life as a whole, this year’s aim is how to be unique in a normal world.
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon text-5xl">
                <i class="las la-infinity"></i>
              </div>
              <div>
                <h3 class="service-title">Philosophy</h3>
                <p class="text-gray-600">
                  Philosophy is the love of wisdom, philosophy will not only include philosophical theories, it will include mythologies, and it will help in finding answers to a-lots of questions in our minds.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Feature Section Start -->
    <div id="feature" class="bg-green-50 py-24">
      <div class="container">
        <div class="flex flex-wrap items-center">
          <div class="w-full lg:w-1/2">
            <div class="mb-5 lg:mb-0">
              <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Learn More About Us</h2>
              
              <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl">
                      <i class="las la-bullseye"></i>
                    </div>
                    <div class="features-content">
                      <h4 class="feature-title">Mission</h4>
                      <p>We’re on a mission to spread positive behavior easier and more appealing for everyone, everywhere. Helping people to start their campaigns and guiding them to the right path. We do this through groundbreaking strategies that increase knowledge, change policy and shift norms.</p>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl">
                      <i class="las la-binoculars"></i>
                    </div>
                    <div class="features-content">
                      <h4 class="feature-title">Vission</h4>
                      <p>Through our nearly 11 years of experience promoting positive behavior, we have developed a comprehensive, evidence-based framework to behavior change marketing that informs all of our work. We’re seeking for perfection for the next decade to deliver our core and the message we’re responsible for.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
              <img src="{{ asset('assets/img/Tree.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- Team Section Start -->
    <section id="team" class="py-24 text-center">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Our Team</h2>
        </div>
        <div class="flex flex-wrap justify-center">
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/habiba-hisham.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Habiba Hisham</h3>
                <p>President</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/mahmoud-zoair.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Mahmoud Zoair</h3>
                <p>Vice President</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/nada-ammar.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Nada Ammar</h3>
                <p>OC Manager</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/Mohanad.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Mohannad Hossam</h3>
                <p>Headmaster Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/sara-nabil.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Sara Nabil</h3>
                <p>Personnel Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/mohamed-ashraf.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Mohamed Ashraf</h3>
                <p>Personnel Co-Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/yasmine-essam.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Yasmine Essam</h3>
                <p>Coaching Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/osary.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Osary</h3>
                <p>Coaching Co-Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/mohamed-mostafa.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Mohamed Mostafa</h3>
                <p>Media Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/yossef-essam.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Yossef Essam</h3>
                <p>Media Co-Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/hanine-tawfik.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Hanine Tawfik</h3>
                <p>PR Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/mohamed-selim.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Mohamed Selim</h3>
                <p>Coordination Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/carole-barsoum.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Carole Barsoum</h3>
                <p>Coordination Co-Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="team-img relative">
                <img class="img-fluid" src="{{ asset('assets/img/board/habiba-walid.jpeg') }}" alt="">
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="team-name">Habiba Walid</h3>
                <p>Fundraising Head</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
      </div>
    </section>
    <!-- Team Section End -->


    <!-- carousel-area Section Start -->
    <section class="carousel-area bg-gray-800 py-32">
      <div class="container">
        <div class="flex">
          <div class="w-full relative">
            <div class="portfolio-carousel" id="images">
              @for($i = 1; $i<=12;$i++)
              <div class="transform hover:scale-105 transition-transform cursor-pointer">
                <img class="w-full" src="{{ asset("assets/img/events/$i.jpeg") }}" alt="">
              </div>
              @endfor
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- carousel-area Section End -->


  

	  <!-- Footer Section Start -->
    <footer id="footer" class="bg-gray-800 py-16">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="mx-3 mb-8">
              <div class="footer-logo mb-3">
                <img src="{{ asset('assets/img/logo-white.png') }}" alt="">
              </div>
              <h1 class="text-lg text-white">Campaigners</h1>
              <p class="text-gray-300">
               EMPOWERING THE NEW DECADE</p>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>
        
              <ul class="social-icons flex justify-start">
                <li class="mx-2">
                  <a href="https://www.facebook.com/MIUCampaigners/"
                    class="footer-icon hover:bg-blue-600">
                    <i class="lab la-facebook-f text-xl" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.instagram.com/campaignersmiu/?hl=en"
                    class="footer-icon hover:bg-purple-500">
                    <i class="lab la-instagram text-2xl" aria-hidden="true"></i>
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>     
    </footer> 
    <!-- Footer Section End -->


    <!-- Go to Top Link -->
    <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-green-600 text-white text-lg z-20 duration-300 hover:bg-green-400">
      <i class="lni lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
<!--     <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div> -->
    <!-- End Preloader -->
    
    <!-- All js Here -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form.js') }}"></script>      
    <script src="{{ asset('assets/js/main.js') }}"></script>      
    <script src="{{ asset('js/app.js') }}"></script>      
  </body>
</html>
