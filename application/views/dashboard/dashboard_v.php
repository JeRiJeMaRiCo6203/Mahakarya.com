<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <script src="<?php echo base_url();?>/assets/js/Chart.js"></script>
	    <script src="<?php echo base_url();?>/assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/fusioncharts.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/themes/fusioncharts.theme.fint.js');?>"></script>
  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <!-- page content
        <div id="displaychart">
          disini
        </div>-->

        <div class="right_col" role="main" style="min-height: 700px;">
            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stock Of Products</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php foreach ($data as $dt){
                      if($dt->id_kategori == 1) $a=$dt->jumlah;
                      if($dt->id_kategori == 2) $b=$dt->jumlah;
                      if($dt->id_kategori == 3) $c=$dt->jumlah;
                    }
                    $jan=0;$feb=0;$mar=0;$apr=0;$mei=0;$jun=0;$jul=0;$agu=0;$sep=0;$okt=0;$nov=0;$des=0;
                    foreach ($penjualan as $dt){
                      if($dt->bulan == 1) $jan=$dt->total;
                      if($dt->bulan == 2) $feb=$dt->total;
                      if($dt->bulan == 3) $mar=$dt->total;
                      if($dt->bulan == 4) $apr=$dt->total;
                      if($dt->bulan == 5) $mei=$dt->total;
                      if($dt->bulan == 6) $jun=$dt->total;
                      if($dt->bulan == 7) $jul=$dt->total;
                      if($dt->bulan == 8) $agu=$dt->total;
                      if($dt->bulan == 9) $sep=$dt->total;
                      if($dt->bulan == 10) $okt=$dt->total;
                      if($dt->bulan == 11) $nov=$dt->total;
                      if($dt->bulan == 12) $des=$dt->total;
                    }
                    ?>
                    <div class="row">
                            <div class="col-lg-4 col-xs-4">
                                <div class="small-box bg-success">
                                    <div class="inner"><br/>
                                        <h3 style="text-align:center"><?php echo $a; ?></h3>
                                        <p style="text-align:center"><b>Accesories</b></p><br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-4">
                                <div class="small-box bg-warning">
                                    <div class="inner"><br/>
                                        <h3 style="text-align:center"><?php echo $b; ?></h3>
                                        <p style="text-align:center"><b>Displays</b></p><br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xs-4">
                                <div class="small-box bg-info">
                                    <div class="inner"><br/>
                                        <h3 style="text-align:center"><?php echo $c; ?></h3>
                                        <p style="text-align:center"><b>Furnitures</b></p><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
              </div>

              <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sale Data in <?php echo date('Y');?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div style="width: 600px;height: 500px">
                		<canvas id="myChart"></canvas>
                	</div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
        </div>
          <!-- /page content -->
          </div>
        </div>
    </body>
</html>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'line',
data: {
labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
datasets: [{
  label: 'Sale data',
  data: ["<?php echo $jan ;?>","<?php echo $feb ;?>","<?php echo $mar ;?>","<?php echo $apr ;?>","<?php echo $mei ;?>","<?php echo $jun ;?>","<?php echo $jul ;?>","<?php echo $agu ;?>","<?php echo $sep ;?>","<?php echo $okt ;?>","<?php echo $nov ;?>","<?php echo $des ;?>"],
  backgroundColor: [
  'rgba(255, 99, 132, 0.2)',
  'rgba(54, 162, 235, 0.2)',
  'rgba(255, 206, 86, 0.2)',
  'rgba(75, 192, 192, 0.2)',
  'rgba(153, 102, 255, 0.2)',
  'rgba(255, 159, 64, 0.2)'
  ],
  borderColor: [
  'rgba(255,99,132,1)',
  'rgba(54, 162, 235, 1)',
  'rgba(255, 206, 86, 1)',
  'rgba(75, 192, 192, 1)',
  'rgba(153, 102, 255, 1)',
  'rgba(255, 159, 64, 1)'
  ],
  borderWidth: 1
}]
},
options: {
scales: {
  yAxes: [{
    ticks: {
      beginAtZero:true
    }
  }]
}
}
});
</script>
