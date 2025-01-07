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
  
  <section id="services" class="section">
    <div class="container">
      <div class="section-header">          
        <h2 class="section-title">BLOG</h2>
        <span>Blog</span>
        <p class="section-subtitle">Read Our Case</p>
      </div>
    </div>
  </section>

  <!-- Flickity Slider -->
  <div id="colorlib-blog">
    <div class="container">
      <div class="row">

        <?php
        // Fungsi untuk mendeteksi dan membuat tanggal
        function parseDate($dateString) {
          // Coba dengan format 'Y-m-d' (web hosting)
          $date = DateTime::createFromFormat('Y-m-d', $dateString);
          if ($date) return $date;

          // Coba dengan format 'd/m/Y' (localhost)
          $date = DateTime::createFromFormat('d/m/Y', $dateString);
          if ($date) return $date;

          // Jika format tidak cocok
          error_log("Invalid date format: {$dateString}");
          return null;
        }

        // Kelompokkan artikel berdasarkan tahun
        $rec_article_by_year = [];
        foreach ($rec_article as $r) {
          $date = parseDate($r->article_date);
          if (!$date) continue;
          $year = $date->format('Y');
          $rec_article_by_year[$year][] = $r;
        }

        // Urutkan artikel dalam tiap tahun
        foreach ($rec_article_by_year as &$records) {
          usort($records, function($a, $b) {
            $dateA = parseDate($a->article_date);
            $dateB = parseDate($b->article_date);
            return $dateB <=> $dateA;
          });
        }
        unset($records);

        // Variabel penghitung gambar
        $imageCounter = 1;
        $imageMax = 10;

        // Render artikel
        $count = 0;
        foreach ($rec_article_by_year as $year => $records) {
          foreach ($records as $record) {
            // Tentukan nama file gambar
            $imagePath = base_url("/assets/img/blog/img-{$imageCounter}.jpg");
            $imageCounter = $imageCounter % $imageMax + 1;

            // Format tanggal
            $date = parseDate($record->article_date);
            $formattedDate = $date ? $date->format('d F Y') : 'Invalid date';
        ?>
            <div class="col-md-4">
              <div class="article animated-box">
                <a href="blog.html" class="blog-img">
                  <img class="img-responsive" src="<?php echo $imagePath; ?>" alt="Blog Image">
                  <div class="overlay"></div>
                  <div class="link">
                    <span class="read">Read more</span>
                  </div>
                </a>
                <div class="desc">
                  <span class="meta"><?php echo $formattedDate; ?></span>
                  <h2><a href="blog.html"><?php echo htmlspecialchars($record->article_title); ?></a></h2>
                  <p><?php echo nl2br($record->article_content); ?></p>
                </div>
              </div>
            </div>
        <?php
            $count++;
          }
        }

        // Tambahkan elemen kosong jika jumlah kolom bukan kelipatan tiga
        while ($count % 3 !== 0) {
          echo '<div class="col-md-4"></div>';
          $count++;
        }
        ?>
      </div>
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
</body>
</html>
