<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="<?php echo base_url('/assets/js/jquery-min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/classie.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.mixitup.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/nivo-lightbox.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/owl.carousel.js'); ?>"></script>    
<script src="<?php echo base_url('/assets/js/jquery.stellar.min.js'); ?>"></script>    
<script src="<?php echo base_url('/assets/js/jquery.nav.js'); ?>"></script>    
<script src="<?php echo base_url('/assets/js/scrolling-nav.js'); ?>"></script>    
<script src="<?php echo base_url('/assets/js/jquery.easing.min.js'); ?>"></script>     
<script src="<?php echo base_url('/assets/js/wow.js'); ?>"></script> 
<script src="<?php echo base_url('/assets/js/jquery.vide.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.counterup.min.js'); ?>"></script>    
<script src="<?php echo base_url('/assets/js/jquery.magnific-popup.min.js'); ?>"></script>    
<script src="<?php echo base_url('/assets/js/waypoints.min.js'); ?>"></script>    
<script src="<?php echo base_url('/assets/js/form-validator.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/contact-form-script.js'); ?>"></script>   
<script src="<?php echo base_url('/assets/js/main.js'); ?>"></script>


<!-- Flickity JS -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
  // Initialize Flickity
  const flkty = new Flickity('.main-carousel', {
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    pageDots: false,
    autoPlay: false,
    selectedAttraction: 0.01,
    friction: 0.15,
  });

  $(document).ready(function () {
    $(".animated-box").each(function (index, element) {
      setTimeout(function () {
        $(element).addClass("visible");
      }, index * 200); // Delay bertahap berdasarkan indeks
    });

    $('.article').on('click', function() {
      // Ambil konten dari elemen yang diklik
      const content = $(this).html();
      // Masukkan konten ke dalam pop-up
      $('.popup-data').html(content);
      // Tampilkan overlay pop-up
      $('.popup-overlay').fadeIn();
    });

    // Event untuk menutup pop-up
    $('.close-btn, .popup-overlay').on('click', function(e) {
      // Pastikan hanya menutup jika klik pada overlay atau tombol close
      if ($(e.target).hasClass('close-btn') || $(e.target).hasClass('popup-overlay')) {
        $('.popup-overlay').fadeOut();
      }
    });
  });

  // YouTube Music Iframe v_article.php
  document.addEventListener("DOMContentLoaded", function() {
      const iframe = document.getElementById("yt-music-iframe");

      // Menunggu klik pertama pada body untuk memulai musik
      document.body.addEventListener("click", function() {
        console.log("Klik terdeteksi, memulai musik...");
        let src = iframe.getAttribute("src");
        if (!src.includes("autoplay=1")) {
          iframe.setAttribute("src", src + "&autoplay=1");
        }
      }, { once: true });
    });

</script>
