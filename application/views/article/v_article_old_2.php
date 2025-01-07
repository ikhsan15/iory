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
    <?php $this->load->view("admin/_partials/nav_to_home.php") ?>
  </header>
  <!-- Flickity Slider -->
  <div class="main-carousel">
    <?php
    // Aktifkan debugging untuk menampilkan error
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

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
      echo "<p style='color: red;'>Invalid date format: {$dateString}</p>";
      return null;
    }

    // Ambil data dari database dan kelompokkan berdasarkan tahun
    $rec_article_by_year = [];
    foreach ($rec_article as $r) {
      // Parsing tanggal dengan fungsi parseDate
      $date = parseDate($r->article_date);
      if (!$date) continue; // Skip data yang tidak valid

      // Kelompokkan artikel berdasarkan tahun
      $year = $date->format('Y');
      $rec_article_by_year[$year][] = $r;
    }

    // Debug: tampilkan data yang sudah dikelompokkan
    // echo '<pre>';
    // print_r($rec_article_by_year);
    // echo '</pre>';

    // Urutkan data dalam tiap tahun berdasarkan tanggal terbaru ke atas
    foreach ($rec_article_by_year as $year => &$records) {
      usort($records, function($a, $b) {
        $dateA = parseDate($a->article_date);
        $dateB = parseDate($b->article_date);
        return $dateB <=> $dateA;
      });
    }
    unset($records);

    // Loop untuk tiap tahun yang memiliki data
    foreach ($rec_article_by_year as $year => $records) {
    ?>
      <div class="section-vertical">
        <div class="vertical-text">
          <?php echo htmlspecialchars($year); ?>
        </div>
        <div>
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
                        <span class="badge"><?php echo htmlspecialchars($record->article_title); ?></span>
                      </h4>
                      <p><?php echo nl2br($record->article_content); ?></p>
                      <?php
                      $date = parseDate($record->article_date);
                      $formattedDate = $date ? $date->format('d F Y') : 'Invalid date';
                      ?>
                      <p class="timeline-subtitle"><?php echo $formattedDate; ?></p>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </section>
        </div>
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
