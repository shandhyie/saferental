<!DOCTYPE HTML>
<html>
<?php
include "web_head.php"
?>

<body>
<?php
include "web_menu.php";

?>

<!-- Parallax Effect -->
<script type="text/javascript">$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});</script>

<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./images/parallax/1900x911.gif);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li><a href="../index.php">Beranda</a></li>
              <li><a href="daftar-mobil.php">Daftar Mobil Tersedia</a></li>
              <li class="active">Detail Mobil</li>
            </ol>
            <h1>Detail Mobil</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container mt50">
  <div class="row"> 
    <!-- Slider -->
    <?php
    include "web_detail/gambar_mobil.php";
    ?>
    
    <!-- Booking form -->
    <?php
    include "web_detail/booking_form.php";
    ?>
    
    <!-- Room Content -->
    <section>
      <div class="container">
        <div class="row">
          <?php
            include "web_detail/rincian_mobil.php";
          ?>


          <div class="col-sm-5 mt50">

            <?php
            include "web_detail/info_tambahan.php";
            ?>

          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- Other Rooms -->
<?php
include "web_detail/mobil_lainnya.php";

?>

<!-- Footer -->
<?php
include "web_footer.php";

?>

<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

</body>
</html>