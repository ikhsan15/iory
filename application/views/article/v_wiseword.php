<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/header.php") ?>
  <style>
    /* Masukkan CSS yang dirapikan di sini */
  </style>
</head>
<body>
  <!-- Header Section Start -->
  <header id="slider-area">  
    <?php $this->load->view("admin/_partials/navbar.php") ?>
  </header>
  <!-- Flickity Slider -->
  <div class="main-carousel">
    <?php
      // Ambil data dari database dan kelompokkan berdasarkan tahun
      $rec_wiseword_by_year = [];
      foreach ($rec_wiseword as $r) {
        $date = DateTime::createFromFormat('d/m/Y', $r->ww_date);
        if ($date) {
          $year = $date->format('Y');
          $rec_wiseword_by_year[$year][] = $r;
        }
      }

      // Urutkan data dalam tiap tahun berdasarkan tanggal terbaru ke atas
      foreach ($rec_wiseword_by_year as $year => &$records) {
        usort($records, function($a, $b) {
          $dateA = DateTime::createFromFormat('d/m/Y', $a->ww_date);
          $dateB = DateTime::createFromFormat('d/m/Y', $b->ww_date);
          return $dateB <=> $dateA;
        });
      }
      unset($records);

      // Loop untuk tiap tahun yang memiliki data
      foreach ($rec_wiseword_by_year as $year => $records) {
    ?>
      <div class="carousel-cell section-vertical">
        <div class="vertical-text"><?php echo htmlspecialchars($year); ?></div>
        <section id="timeline" class="section">
          <div class="container">
            <div class="timeline">
              <?php foreach ($records as $record) { ?>
                <div class="timeline-container">
                  <div class="timeline-icon">
                    <i></i>
                  </div>
                  <div class="timeline-body">
                    <h4 class="timeline-title">
                      <span class="badge"><?php echo htmlspecialchars($record->ww_title); ?></span>
                    </h4>
                    <p><?php echo nl2br($record->ww_content); ?></p>
                    <?php
                    $formattedDate = DateTime::createFromFormat('d/m/Y', $record->ww_date)->format('d F Y');
                    ?>
                    <p class="timeline-subtitle"><?php echo $formattedDate; ?></p>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </section>
      </div>
    <?php } ?>
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
