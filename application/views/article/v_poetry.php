<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("admin/_partials/header.php") ?>
  </head>
  
  <body id="timeline_page">
    <!-- Header Section Start -->
    <header id="slider-area">  
      <?php $this->load->view("admin/_partials/navbar.php") ?>
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="timeline" class="section">
      <div class="container">
        <div class="timeline">
          <?php foreach ($rec_poetry as $r){ ?>
            <div class="timeline-container">
              <div class="timeline-icon">
                <i></i>
              </div>
              <div class="timeline-body">
                <h4 class="timeline-title">
                <!-- htmlspecialchars: untuk memastikan tidak ada karakter yang menyebabkan masalah seperti <, >, atau karakter khusus lainnya -->
                  <span class="badge"><?php echo htmlspecialchars($r->ww_title); ?></span>
                </h4>
                <p><?php echo nl2br($r->ww_content); ?></p>
                <?php 
                // Cek apakah formatnya benar
                $date = DateTime::createFromFormat('d/m/Y', $r->ww_date);
                if($date){
                  $formattedDate = $date->format('d F Y');
                }
                else {
                  $formattedDate = "Invalid date format";  // Jika parsing gagal
                }
                ?>
                <p class="timeline-subtitle"><?php echo $formattedDate; ?></p>
              </div>
            </div>
          <?php } ?> 
        </div>
      </div>
    </section>
    <!-- Services Section End -->

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