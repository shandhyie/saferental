<?php
include "../../includes/koneksi.php";
?>

<section class="rooms mt50">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="lined-heading"><span>Mobil lainnya</span></h2>
      </div>
      <?php

    $sql = "select mobil.no_stnk, merek_mobil.nama, merek_mobil.manufaktur, merek_mobil.jml_kursi, mobil.harga, mobil.file_gambar_mobil, mobil.fitur_id from mobil, merek_mobil where merek_mobil.id = mobil.merek_mobil_id AND mobil.harga<=400000";
      
    $result = mysql_query($sql);
    while($data = mysql_fetch_assoc($result)){
      $cname = $data['manufaktur'].'-'.$data['nama'];
      $text = $data['manufaktur'].' '.$data['nama'];

    ?>
          <div class="col-sm-4 <?php echo $cname ?>">
            <div class="room-thumb"> <img src="../../assets/images/<?php echo $data['file_gambar_mobil'] ?>" alt="room 1" class="img-responsive" />
              <div class="mask">
                <div class="main">
                  <h5><?php echo $text ?></h5>
                  <div class="price">Rp. <?php echo number_format($data['harga'],2,',','.')?><span>24 jam</span></div>
                </div>
                <div class="content">
                  <p><span>Fitur</p>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled">
                      <?php
                        $arno = explode(",",$data['fitur_id']);
                        $sql = "select * from fitur";
                        $resultf = mysql_query($sql);
                        while($dataf = mysql_fetch_assoc($resultf)){
                          $no = $dataf['id_fitur'];
                          $namafitur = $dataf['nama'];
                      
                          //mengecek apakah fitur dimiliki mobil
                          if(in_array($no,$arno)) echo '<li><i class="fa fa-check"></i>'.$namafitur.'</li>';
                          else echo '<li><i class="fa fa-times"></i>'.$namafitur.'</li>';
                        }
                      ?>          
                    </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled">
                        <li><i class="fa fa-check"></i> No sleepy </li>
                        <li><i class="fa fa-check"></i> Safety</li>
                      </ul>
                    </div>
                  </div>
                  <a href="detail-mobil.php" class="btn btn-primary btn-block">Book Now</a> </div>
              </div>
            </div>
          </div>
    <?php
    }

    ?>
      
    </div>
  </div>
</section>
