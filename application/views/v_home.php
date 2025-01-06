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
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Imagination Unleashed</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Distinctive Art</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">Bringing Ideas to Life</h4>
                <!-- <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Works</a> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url('/assets/img/slider/bg-8.jpg'); ?>" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Empowering Innovation</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Seamless Solutions</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s">Designed for Your Success</h4>
                <!-- <a href="#" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Purchase</a> -->
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
          <h2 class="section-title">What I Do</h2>
          <span>Why</span>
          <p class="section-subtitle">Explore the best services to bring your ideas and needs to life.</p>
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
                <h4>Content Writing</h4>
                <p>Creating engaging and relevant content for articles, blogs, and marketing needs.
                Turning ideas into words that captivate and engage your audience.</p>
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
                <h4>Web & IT Solutions</h4>
                <p>Developing responsive websites and providing technical support for your IT needs.
                Offering effective solutions to enhance your digital performance and transformation.</p>
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
                <h4>Graphic Design</h4>
                <p>Designing creative visuals to build a strong and engaging brand identity.
                  Helping your brand shine with functional and aesthetic designs.</p>
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
                <h4>Creative Problem Solving</h4>
                <p>Finding innovative solutions to complex challenges with a creative approach.
                Solving problems with fresh ideas that drive positive change.</p>
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
                <h4>Data Management</h4>
                <p>Organizing and managing data efficiently to support decision-making.
                Ensuring your data is well-structured and easily accessible.</p>
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
                <h4>IT Infrastructure Management</h4>
                <p>Providing reliable IT infrastructure management to ensure smooth operations.
                Enhancing system efficiency and minimizing downtime with proactive maintenance.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </section>
    <!-- Features Section End --> 

    <!-- Clients Section -->
    <div id="clients" class="section">
      <div class="container">
        <div class="clients-carousel" data-flickity='{ "autoPlay": 1500, "friction": 0.15, "selectedAttraction": 0.01, "wrapAround": true, "draggable": false, "prevNextButtons": false, "pageDots": false }'>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/php.png'); ?>" alt="PHP">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/codeigniter.png'); ?>" alt="CodeIgniter">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/git.png'); ?>" alt="Git">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/github.png'); ?>" alt="GitHub">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/postgre.png'); ?>" alt="PostgreSQL">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/vscode.png'); ?>" alt="VS Code">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/whimsical.png'); ?>" alt="Whimsical">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/zoom.png'); ?>" alt="Zoom">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/audacity.png'); ?>" alt="Audacity">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/figma.png'); ?>" alt="Figma">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/illustrator.png'); ?>" alt="Illustrator">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/indesign.png'); ?>" alt="InDesign">
          </div>          
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/html.png'); ?>" alt="Html">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/css.png'); ?>" alt="Css">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/javascript.png'); ?>" alt="Javascript">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/cpanel.png'); ?>" alt="Cpanel">
          </div>
          <div class="client-item-wrapper">
            <img src="<?php echo base_url('/assets/img/clients/firebase.png'); ?>" alt="Firebase">
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
          <div class="col-lg-4 col-md-4 col-xs-12">            
            <div class="cta-text">
              <h1>Let's Collaborate!</h1>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-xs-12 text-right">
            <h5>I believe every idea has the potential to become extraordinary.<br>
              Contact me to collaborate or learn more about what I can do.</h5>
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