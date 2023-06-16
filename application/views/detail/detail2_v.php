<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Detail Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/css/base.css" rel="stylesheet">
  </head>

<body>
<div id="mainBody">
  <div class="container">
    <div class="row">
      <div class="s9">
      <?php
      $detail = $datanya->result()[0];
      ?>
        <div class="half-left col-md-6">
          <div class="img-item">
            <a href=""><img class="gambar" src="<?php echo base_url().'/assets/images/product/'.$detail->foto;?>"></a>
          </div>
        </div>
        <div class="half-right col-md-4">
          <div class="spec">
            <h4 class="m0"><?php echo $detail->nama; ?></h4></br>
            <p>Rp.<?php echo number_format($detail->harga,2,',','.'); ?></p>
            <h5>Specification</h5>
            <p><?php echo $detail->spesifikasi; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
