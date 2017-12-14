
<!DOCTYPE HTML>
<html>
<?php
include "../web_head.php"
?>

<body>
<?php
include "../web_menu.php";

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
              <li><a href="index.php">Beranda</a></li>
              <li class="active">Cara Pesan</li>
            </ol>
            <h1>Tambah Mobil</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container mt50">
  <div class="row"> 
    <!-- Pesan -->
        <div class="col-sm-7 mt50">
            <form class="appoinment-form" action="aksi/aksi_request.php" method="post"> 
                                <div class="form-group col-md-12">
                                    <input name="nama_user" class="form-control" placeholder="Name User" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <input name="no_handphone" class="form-control" placeholder="No Handphone" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <input name="alamat" class="form-control" placeholder="Alamat" type="text">
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="nama_pasien" class="form-control" placeholder="Nama Pasien" type="text">
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="golongan_darah" class="form-control" placeholder="Golongan Darah" type="text">
                                </div>

                                <div class="form-group col-md-12">
                                    <input name="jumlah_kantong" class="form-control" placeholder="Jumlah Kantong" type="text">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger">Meminta Darah</button>
                                </div>
                            </form>
          </div>



    
    <!-- Reservation form -->
    <section id="reservation-form" class="mt50 clearfix">
      
    </section>
    
    <!-- Room Content -->
    <section>
      <div class="container">
        <div class="row">

          <?php
          include "../web_detail/cara_pembayaran.php";
          ?>

          <div class="col-sm-5 mt50">
            
            <?php
            include "../web_detail/syarat_dan_ketentuan.php";
            ?>

          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<?php
include "../web_footer.php";

?>

<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

</body>
</html>