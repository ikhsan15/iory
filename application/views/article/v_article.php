<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("admin/_partials/header.php") ?>
  </head>
  
  <body>
    <!-- Header Section Start -->
    <header id="slider-area">  
      <?php $this->load->view("admin/_partials/navbar.php") ?>
    </header>
    <!-- Header Section End --> 

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Services</h2>
          <span>Services</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
        </div>        
        <div class="row article-more">
          <!-- partial:index.partial.html -->
          <div class="grid gap-6 grid-cols-3">
            <div class="grid__item item w-56 text-black relative wow fadeInDown" data-wow-delay="0.2s">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Poerty</div>
                <p class="flex-grow mb-2">Dive into a world where emotions flow through beautifully crafted verses, expressing feelings that words alone can't describe.</p><a href="<?php echo base_url().$class;?>/a_poetry">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative wow fadeInDown" data-wow-delay="0.4s">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Story</div>
                <p class="flex-grow mb-2">Unlock the power of timeless wisdom with meaningful reflections and inspiring thoughts to guide you through life’s journey.</p><a href="<?php echo base_url().$class;?>/a_story">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative wow fadeInDown" data-wow-delay="0.6s">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Wise Words</div>
                <p class="flex-grow mb-2">Immerse yourself in captivating narratives that awaken imagination, stir emotions, and leave lasting impressions on the heart.</p><a href="<?php echo base_url().$class;?>/a_wiseword">Learn More</a>
              </div>
            </div>
            <!-- <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Monitoring</div>
                <p class="flex-grow mb-2">Temporal provides guaranteed execution with exactly-once semantics with automatic retries.</p><a href="#">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Resource Provisioning</div>
                <p class="flex-grow mb-2">Provisioning resources depends on a series of potentially long-running operations with many possibilities for intermittent failures.</p><a href="#">Learn More</a>
              </div>
            </div>
            <div class="grid__item item w-56 text-black relative">
              <div class="item__content h-full w-full p-4 relative border-2 flex flex-col">
                <div class="font-bold mb-2">Monitoring</div>
                <p class="flex-grow mb-2">Temporal provides guaranteed execution with exactly-once semantics with automatic retries.</p><a href="#">Learn More</a>
              </div>
            </div> -->
          </div>
          <!-- partial -->
        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->

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