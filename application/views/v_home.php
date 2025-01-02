<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("admin/_partials/header.php") ?>
  </head>
  
  <body>
    <!-- Header Section Start -->
    <header id="slider-area">  
      <?php $this->load->view("admin/_partials/navbar.php") ?>

      <!-- Main Carousel Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="<?php echo base_url('/assets/img/slider/bg-7.jpg'); ?>" alt="">
              <div class="carousel-caption text-left">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">Handcrafted</h1>  
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">IORY</h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">Inspired by Ikhsan's Story</h4>
                <!-- <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Download</a> -->
                <!-- <a href="#" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Get Started!</a> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url('/assets/img/slider/bg-6.jpg'); ?>" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Bundled With Tons of</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Cutting-edge Features</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">Parallax, Video, Product, Premium Addons and More...</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Works</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url('/assets/img/slider/bg-8.jpg'); ?>" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Ready For</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Multi-purpose Websites</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s">App, Business, SaaS and Landing Pages</h4>
                <a href="#" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Purchase</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  

    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Creative & Tech Services</h2>
          <span>Services</span>
          <p class="section-subtitle">Transforming Ideas into Reality Through Innovation and Design.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <i class="lni-pencil"></i>
              </div>
              <h4>Content Writing</h4>
              <p>Creating engaging written content for various platforms.</p>
              <br>
              <a href="<?php echo base_url().$class;?>/article" class="small-box-footer">Learn More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <i class="lni-cog"></i>
              </div>
              <h4>IT Development</h4>
              <p>Developing customized IT solutions and websites.</p>
              <br>
              <!-- <a href="<?php echo base_url().$class;?>/itdev" class="small-box-footer">Learn More</a> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-3">
                <i class="lni-stats-up"></i>
              </div>
              <h4>Graphic Design</h4>
              <p>Designing creative visuals for branding and promotion.</p>
              <br>
              <!-- <a href="<?php echo base_url().$class;?>/design" class="small-box-footer">Learn More</a> -->
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon color-4">
                <i class="lni-layers"></i>
              </div>
              <h4>UI/UX Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
              <div class="icon color-5">
                <i class="lni-tab"></i>
              </div>
              <h4>App Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon color-6">
                <i class="lni-briefcase"></i>
              </div>
              <h4>Digital Marketing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Why Choose Us</h2>
          <span>Why</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-layout"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-layout"></i></div>
                <h4>Refreshing Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-tab"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-tab"></i></div>
                <h4>Fully Responsive</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-rocket"></i></div>
                <h4>Fast & Smooth</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-database"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-database"></i></div>
                <h4>SEO Optimized</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-leaf"></i></div>
                <h4>Clean Code</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-pencil"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-pencil"></i></div>
                <h4>Free 24/7 Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </section>
    <!-- Features Section End --> 

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Works</h2>
          <span>Works</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common btn-effect" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".design">
                Design 
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".print">
                Print 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?php echo base_url('/assets/img/portfolio/img-1.jpg'); ?>" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php echo base_url('/assets/img/portfolio/img-1.jpg'); ?>"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?php echo base_url('/assets/img/portfolio/img-2.jpg'); ?>" alt="" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php echo base_url('/assets/img/portfolio/img-2.jpg'); ?>"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?php echo base_url('/assets/img/portfolio/img-3.jpg'); ?>" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php echo base_url('/assets/img/portfolio/img-3.jpg'); ?>"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?php echo base_url('/assets/img/portfolio/img-4.jpg'); ?>" alt="" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php echo base_url('/assets/img/portfolio/img-4.jpg'); ?>"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?php echo base_url('/assets/img/portfolio/img-5.jpg'); ?>" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php echo base_url('/assets/img/portfolio/img-5.jpg'); ?>"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?php echo base_url('/assets/img/portfolio/img-6.jpg'); ?>" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php echo base_url('/assets/img/portfolio/img-6.jpg'); ?>"><i class="lni-zoom-in item-icon"></i></a>
                      </div>
                      <a href="#">View Project</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 
  
    <!-- Clients Section -->
    <div id="clients" class="section">
      <!-- Container Ends -->
      <div class="container">
        <!-- Row and Scroller Wrapper Starts -->
        <div class="row" id="clients-scroller">
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/img1.png'); ?>" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/img2.png'); ?>" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/img3.png'); ?>" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/img4.png'); ?>" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/img5.png'); ?>" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/img6.png'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Client Section End --> 

    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Team</h2>
          <span>Team</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
          <div class="ourteam col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="<?php echo base_url('/assets/img/team/ikhsan_01.png'); ?>" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Ikhsan Nur</h4>
                  <p>Chief Technical Officer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <!-- <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li> -->
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="<?php echo base_url('/assets/img/team/team2.png'); ?>" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Luke Chesser</h4>
                  <p>Marketing Executive</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="<?php echo base_url('/assets/img/team/team3.png'); ?>" alt="">
              <div class="team-details">
                <div class="team-inner">                  
                  <h4 class="team-title">David Givens</h4>
                  <p>Business Manager</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="<?php echo base_url('/assets/img/team/team4.png'); ?>" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Annie Spratt</h4>
                  <p>Graphic Designer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Team section End -->   

    <!-- Call To Action Section Start -->
    <section id="cta" class="section" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">            
            <div class="cta-text">
              <h5>Stil confused? Download a free lite version to get started!</h5>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 text-right">
            <a href="#" class="btn btn-border">Download</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Call To Action Section Start -->

    <!-- Footer Section Start -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <!-- <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     -->

    <?php $this->load->view("admin/_partials/js.php") ?>
    
  </body>
</html>