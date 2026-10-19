<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Milk & Honey Photography</title>
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
  <meta name="author" content="Daniel Moore">
  <meta name="robots" content="index, follow">

  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.jpg') }}">

  <link rel="stylesheet" href="https://use.typekit.net/hml4gei.css">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('css/milk.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


</head>

<body class="stretched">
  <div id="wrapper">

    <header id="header" class="transparent-header" data-sticky-class="not-dark" data-responsive-class="not-dark">
      <div id="header-wrap">
        <div class="container">
          <div class="header-row">
            <div id="logo">
              <a href="index.html">
                <img class="logo-default" src="/img/logo.png" alt="Bloom &amp; Vow">
                <img class="logo-dark" src="/img/logo.png" alt="Bloom &amp; Vow">
              </a>
            </div>

            <div class="primary-menu-trigger">
              <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
              </button>
            </div>

            <div class="header-misc hide-link">
              <a href="#contact" class="bv-cta-btn">Book a Session</a>
            </div>

            <nav class="primary-menu">
              <ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="72">
                <li class="menu-item"><a class="menu-link" href="#" data-href="#slider">
                    <div>Home</div>
                  </a></li>
                <li class="menu-item"><a class="menu-link" href="#" data-href="#gallery">
                    <div>Gallery</div>
                  </a></li>
                <li class="menu-item"><a class="menu-link" href="#" data-href="#services">
                    <div>Services</div>
                  </a></li>
                <li class="menu-item"><a class="menu-link" href="#" data-href="#reviews">
                    <div>Reviews</div>
                  </a></li>
                <li class="menu-item"><a class="menu-link" href="#" data-href="#about">
                    <div>About</div>
                  </a></li>
                <li class="menu-item show-link"><a class="menu-link" href="#" data-href="#contact">
                    <div>Book Session</div>
                  </a></li>

                
              </ul>
            </nav>

          </div>
        </div>
      </div>
      <div class="header-wrap-clone"></div>
    </header>


    <section id="slider" class="slider-element">

      <div class="row align-items-center">

        <div class="col-md-6 p-5">
          <span class="bv-section-tag text-uppercase">Milk & Honey</span>
          <h3 class="text-stretch display-3 fw-bold position-relative text-uppercase">Food & drink photography</h3>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#bv-studio" class="bv-cta-btn p-3">Book a Session</a>
        </div>

        <div class="col-md-6 order-md-2 min-vh-40">
          <div id="bs-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                <img class="min-vh-80" src="img/home-slide/1.jpg" alt="Fitness program carousel — daily exercise routine">

              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img class="min-vh-80" src="img/home-slide/2.jpg" alt="Fitness program carousel — flexible healthy eating">

              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img class="min-vh-80" src="img/home-slide/3.jpg" alt="Fitness program carousel — transformation results">

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


    <section id="content">
      <div class="content-wrap" style="padding:0;overflow:visible;">


        <!-- PORTFOLIO -->
        <section id="gallery">
          <div class="container">
            <div class="text-center">
              <span class="bv-section-tag text-uppercase">What We Do</span>
              <h2 class="bv-section-title text-uppercase mb-0">Photography Intro</h2>
              <p class="mb-5" style="max-width:520px;margin:0 auto;font-size:0.95rem;line-height:1.75;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>



            <div class="bv-gallery-grid">
              <!-- Row 1 -->
              <div class="bv-gallery-item span2" data-animate="fadeIn" data-delay="100">
                <img src="{{ asset('img/gallery/3.jpg') }}" alt="New menu shoot for Everything Retreat" fetchpriority="high" loading="eager">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">New menu shoot for Everything Retreat</span></div>
              </div>
              <div class="bv-gallery-item tall" data-animate="fadeIn" data-delay="150">
                <img src="{{ asset('img/gallery/1.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <!-- Row 2 -->
              <div class="bv-gallery-item" data-animate="fadeIn" data-delay="300">
                <img src="{{ asset('img/gallery/8.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <div class="bv-gallery-item" data-animate="fadeIn" data-delay="200">
                <img src="{{ asset('img/gallery/4.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <div class="bv-gallery-item" data-animate="fadeIn" data-delay="250">
                <img src="{{ asset('img/gallery/5.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <!-- Row 3 -->
              <div class="bv-gallery-item tall" data-animate="fadeIn" data-delay="200">
                <img src="{{ asset('img/gallery/10.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <div class="bv-gallery-item span2" data-animate="fadeIn" data-delay="250">
                <img src="{{ asset('img/gallery/12.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <!-- Row 4 -->
              <div class="bv-gallery-item tall" data-animate="fadeIn" data-delay="200">
                <img src="{{ asset('img/gallery/6.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <div class="bv-gallery-item tall" data-animate="fadeIn" data-delay="200">
                <img src="{{ asset('img/gallery/14.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <div class="bv-gallery-item tall" data-animate="fadeIn" data-delay="200">
                <img src="{{ asset('img/gallery/13.jpg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>

              <!-- Row 4 -->
              <div class="bv-gallery-item span2" data-animate="fadeIn" data-delay="200">
                <img src="{{ asset('img/gallery/17.jpeg') }}" alt="Image Text Goes Here" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Image Text Goes Here</span></div>
              </div>
              <div class="bv-gallery-item tall" data-animate="fadeIn" data-delay="200">
                <img src="{{ asset('img/gallery/19.jpeg') }}" alt="Front Cover for Lancashire Life June 2026 Edition" loading="lazy">
                <div class="bv-gallery-overlay"><span class="bv-gallery-label">Front Cover for Lancashire Life June 2026 Edition</span></div>
              </div>

            </div>
          </div>
        </section>

        <!-- SERVICES -->
        <section id="services" style="background: radial-gradient(circle,rgba(212, 119, 26, 1) 28%, rgba(114, 56, 4, 1) 87%);">
          <div class="container">
            <div class="text-center">
              <span class="bv-section-tag text-uppercase text-white">What We Create</span>
              <h2 class="bv-section-title text-white text-uppercase mb-0">Our Photography Services</h2>
              <p class="text-white" style="max-width:520px;margin:0 auto;font-size:0.95rem;line-height:1.75;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>

            <div class="bv-services-grid">
              <div class="bv-service-card" data-animate="fadeInUp" data-delay="100">
                <span class="bv-service-icon"><i class="bi-camera"></i></span>
                <h3>Option 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>
              <div class="bv-service-card" data-animate="fadeInUp" data-delay="150">
                <span class="bv-service-icon"><i class="bi-camera"></i></span>
                <h3>Option 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>
              <div class="bv-service-card" data-animate="fadeInUp" data-delay="200">
                <span class="bv-service-icon"><i class="bi-camera"></i></span>
                <h3>Option 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>



            </div>
          </div>
        </section>




        <section id="reviews">
          <div class="container">
            <div class="text-center">
              <span class="bv-section-tag text-uppercase">Reviews</span>
              <h2 class="bv-section-title">Words from Our Customers</h2>

            <div class="bv-testimonials-grid">
              <div class="bv-testi-card" data-animate="fadeInUp" data-delay="100">
                <div class="bv-testi-img">
                  <img src="{{ asset('img/reviews/aria.jpeg') }}" alt="Romantic wedding ceremony with blush florals" loading="lazy">
                </div>
                <div class="bv-testi-quote shadow">
                  <div class="bv-testi-stars">
                    <i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i>
                  </div>
                  <p class="bv-testi-text">"Working with Karen has been an absolute pleasure! Her professionalism and attention to detail were evident from the start, and the stunning results of her photography speak for themselves. <br />She truly brought my products to life, capturing them in a way that not only highlights their quality but also helps boost sales. I couldn’t be happier with how her photos are presenting my creations at their very best!"</p>
                  <span class="bv-testi-couple">Arianna Anselmi - Aria's Cakes</span>
                </div>
              </div>
              <div class="bv-testi-card" data-animate="fadeInUp" data-delay="200">
                <div class="bv-testi-img">
                  <img src="{{ asset('img/reviews/aria.jpeg') }}" alt="Reception tablescape with centrepieces" loading="lazy">
                </div>
                <div class="bv-testi-quote shadow">
                  <div class="bv-testi-stars">
                    <i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i>
                  </div>
                  <p class="bv-testi-text">"Working with Karen has been an absolute pleasure! Her professionalism and attention to detail were evident from the start, and the stunning results of her photography speak for themselves. <br />She truly brought my products to life, capturing them in a way that not only highlights their quality but also helps boost sales. I couldn’t be happier with how her photos are presenting my creations at their very best!"</p>
                  <span class="bv-testi-couple">Arianna Anselmi - Aria's Cakes</span>
                </div>
              </div>
              <div class="bv-testi-card" data-animate="fadeInUp" data-delay="300">
                <div class="bv-testi-img">
                  <img src="{{ asset('img/reviews/aria.jpeg') }}" alt="Bride with flower crown on wedding day" loading="lazy">
                </div>
                <div class="bv-testi-quote shadow">
                  <div class="bv-testi-stars">
                    <i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i>
                  </div>
                  <p class="bv-testi-text">"Working with Karen has been an absolute pleasure! Her professionalism and attention to detail were evident from the start, and the stunning results of her photography speak for themselves. <br />She truly brought my products to life, capturing them in a way that not only highlights their quality but also helps boost sales. I couldn’t be happier with how her photos are presenting my creations at their very best!"</p>
                  <span class="bv-testi-couple">Arianna Anselmi - Aria's Cakes</span>
                </div>
              </div>
            </div>
          </div>
        </section>



        <!-- STUDIO AND CONSULTATIONS -->
        <section id="about">
          <div class="container">
            <div class="bv-studio-grid">
              <div class="bv-studio-img" data-animate="fadeInLeft">
                <img src="{{ asset('/img/karen.jpeg') }}" alt="Bloom and Vow florist studio interior with fresh flowers" loading="lazy">
              </div>
              <div data-animate="fadeInRight">
                <span class="bv-section-tag text-uppercase">Who Am I?</span>
                <h2 class="bv-section-title">Karen Clarke</h2>
                <p>I'm Karen, the photographer behind Milk & Honey Food Photography, specialising in food, hospitality and brand photography for restaurants, pubs, hotels, chefs, producers and food & drink businesses.</p>

                <p>I create imagery designed to do more than simply look beautiful. It needs to work. From a new seasonal menu or restaurant launch to social content, packaging, advertising and a complete image library, I work with businesses to create photography they can use across their marketing.</p>

                <p>I've been a professional photographer for more than 16 years, with my work appearing in national and regional publications and recognised in food photography awards, including the World Food Photography Awards and the Pink Lady Food Photographer of the Year/Pineapple awards.</p>

                <p>Based in Lancashire and working across the North West and beyond, I shoot both on location and from my food photography studio.</p>

              </div>
            </div>
          </div>
        </section>



      <section id="contact">
        <div class="container">

          <div class="row align-items-stretch g-3 gx-lg-6">
            <div class="col-lg-6">
                  <span class="bv-section-tag text-uppercase">Get Starterd</span>
                <h2 class="bv-section-title">Contact Us Today</h2>
                    <div class="row mb-4">
                        <div class="col-auto">
                            <h4 class="mb-1">Email:</h4>
                            <a href="#" class="btn-link fw-semibold link-dark">hello@milkandhoneyphotography.co.uk</a>
                        </div>
                        <div class="col-auto">
                            <h4 class="mb-1">Call:</h4>
                            <a href="#" class="btn-link fw-semibold link-dark">12345 678 901</a>
                        </div>
                    </div>
                    <span class="bv-section-tag text-uppercase">Social Media</span>
                    <a href="https://www.facebook.com/milkandhoneyfoodphoto" target="new" class="social-icon border-transparent bg-white h-bg-facebook" title="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/milkhoneyimages" target="new" class="social-icon border-transparent bg-white h-bg-instagram" title="Delicious">
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </a>

            </div>
            <div class="col-lg-6">
              <div class="card bg-contrast-0 border-0" style="border-radius: 20px;">
                <div class="card-body p-5">

                  <div class="form-widget">

                    <div class="form-result"></div>

                    <form class="mb-0" id="template-contactform" name="template-contactform" action="#" method="post">

                      <div class="row">

                        <div class="col-12 mb-4">
                          <label for="template-contactform-email">Email<small>*</small></label>
                          <input type="email" id="template-contactform-email" name="template-contactform-email" value="" placeholder="noreply@semicolonweb.com" class="required email form-control">
                        </div>

                        <div class="col-md-6 mb-4">
                          <label for="template-contactform-name">Name<small>*</small></label>
                          <input type="text" id="template-contactform-name" name="template-contactform-name" value="" placeholder="SemiColonWeb" class="form-control required">
                        </div>

                        <div class="col-md-6 mb-4">
                          <label for="template-contactform-phone">Phone<small>*</small></label>
                          <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" placeholder="+00 345 35 674" class="form-control required">
                        </div>

                        <div class="col-12 mb-4">
                          <label for="template-contactform-message">Message<small>*</small></label>
                          <textarea class="form-control required" id="template-contactform-message" name="template-contactform-message" placeholder="Write your message here..." rows="5" cols="30"></textarea>
                        </div>

                        <div class="col-12 mb-4 d-none">
                          <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control">
                        </div>

                        <div class="col-12">
                          <button class="bv-cta-btn m-0 w-100 border-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Submit</button>
                        </div>
                      </div>


                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>

    </section>




      </div><!-- .content-wrap -->
    </section><!-- #content -->



    <footer id="footer" class="border-0 bg-white">


      <!-- Copyrights
      ============================================= -->
      <div id="copyrights" style="background-color: var(--cnvs-themecolor);">
        <div class="container text-center text-contrast-700">
          <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md text-center text-md-start text-white">
              Copyrights &copy; 2026 Milk & Honey Photography
            </div>
            <div class="col-12 col-md-auto text-center text-md-end mt-2 mt-md-0 text-white">
              Designed and Build by Digital Soda
            </div>
          </div>
        </div>
      </div><!-- #copyrights end -->

    </footer>


  </div><!-- #wrapper -->

  <script src="js/plugins.min.js"></script>
  <script src="js/functions.bundle.js"></script>

  <script>
    (function() {
      // Portfolio tab filter — visual only (decorative demo)
      var tabs = document.querySelectorAll('.bv-tab-btn');
      tabs.forEach(function(btn) {
        btn.addEventListener('click', function() {
          tabs.forEach(function(b) {
            b.classList.remove('active');
          });
          btn.classList.add('active');
        });
      });
    })();

  </script>

</body>
</html>
