<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/header.php") ?>
</head>
<body>
  <!-- Header Section Start -->
  <header id="slider-area">  
    <?php $this->load->view("admin/_partials/nav_to_home.php") ?>
  </header>
  
  <section id="articles" class="section">
    <div class="container">
      <div class="section-header">          
        <h2 class="section-title">A space for inspiration</h2>
        <span>My Blog</span>
        <p class="section-subtitle">Discover stories, ideas, and creative expressions</p>
      </div>
    </div>
  </section>

  <!-- Flickity Slider -->
  <div id="colorlib-blog">
    <div class="container">
      <div class="row">

        <?php
        // Fungsi untuk mendeteksi dan membuat objek tanggal
        function parseDate($dateString) {
          // Format 'Y-m-d'
          $date = DateTime::createFromFormat('Y-m-d', $dateString);
          if ($date) return $date;

          // Format 'd/m/Y'
          $date = DateTime::createFromFormat('d/m/Y', $dateString);
          if ($date) return $date;

          // Format tidak valid
          error_log("Invalid date format: {$dateString}");
          return null;
        }

        // Urutkan semua artikel berdasarkan tanggal DESC (terbaru ke terlama)
        usort($rec_article, function($a, $b) {
          $dateA = parseDate($a->article_date);
          $dateB = parseDate($b->article_date);
          return $dateB <=> $dateA;
        });

        // Variabel penghitung gambar
        $imageCounter = 1;
        $imageMax = 10;
        $count = 0;

        // Tampilkan semua artikel
        foreach ($rec_article as $record) {
          // Path gambar
          $imagePath = base_url("/assets/img/blog/img-{$imageCounter}.jpg");
          $imageCounter = $imageCounter % $imageMax + 1;

          // Format tanggal
          $date = parseDate($record->article_date);
          $formattedDate = $date ? $date->format('d F Y') : 'Invalid date';
        ?>
          <div class="col-md-4">
            <div class="article animated-box">
              <a href="#" class="blog-img">
                <img class="img-responsive" src="<?php echo $imagePath; ?>" alt="Blog Image">
                <div class="overlay"></div>
                <div class="link">
                  <span class="read">Read more</span>
                </div>
              </a>
              <div class="desc">
                <span class="meta"><?php echo $formattedDate; ?></span>
                <h2><a href="#"><?php echo htmlspecialchars($record->article_title); ?></a></h2>
                <p><?php echo nl2br($record->article_content); ?></p>
              </div>
            </div>
          </div>
        <?php
          $count++;
        }

        // Tambahkan elemen kosong jika jumlah artikel tidak kelipatan 3
        while ($count % 3 !== 0) {
          echo '<div class="col-md-4"></div>';
          $count++;
        }
        ?>
      </div>
    </div>
  </div>

  <div class="popup-overlay">
    <div class="popup-content">
      <div class="popup-data"></div>
    </div>
  </div>

  <!-- Footer Section Start -->
  <?php $this->load->view("admin/_partials/footer.php") ?>
  <!-- Footer Section End -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
  </a>

  <?php $this->load->view("admin/_partials/js.php") ?>

  <!-- YouTube Music Iframe -->
  <div id="yt-music-container" style="width: 1px; height: 1px; overflow: hidden;">
    <iframe 
      id="yt-music-iframe"
      width="1" 
      height="1" 
      src="https://www.youtube.com/embed/rtOvBOTyX00?loop=1&playlist=rtOvBOTyX00&controls=0&mute=0" 
      frameborder="0" 
      allow="autoplay"
      allowfullscreen>
    </iframe>
  </div>

</body>
</html>
