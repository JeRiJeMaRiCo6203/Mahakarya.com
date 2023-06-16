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
          <p>Stock  :&nbsp;<?php echo $detail->stok; ?></p>
          <?php if($detail->harga_baru != "0"){ ?>
              <p>Initial Price : <strike>Rp.<?php echo number_format($detail->harga,2,',','.'); ?></strike></p>
              <p>Price : Rp.<?php echo number_format($detail->harga_baru,2,',','.'); ?></p>
          <?php } else { ?>
              <p>Price : Rp.<?php echo number_format($detail->harga,2,',','.'); ?></p>
          <?php } ?>
          <h5>Specification</h5>
          <p><?php echo $detail->spesifikasi; ?></p>

          <form action="<?php echo site_url("cart/aksi_insert")?>" method="post" id="form">
            <input type="hidden" name="f3" value="<?php echo $detail->nama; ?>">
            <?php if($detail->harga_baru != "0"){ ?>
                <input type="hidden" name="f2" value="<?php echo $detail->harga_baru; ?>">
            <?php } else { ?>
                <input type="hidden" name="f2" value="<?php echo $detail->harga; ?>">
            <?php } ?>
            <input type="hidden" name="f5" value="<?php echo $detail->id_produk; ?>">
            <input type="hidden" name="f4" value="<?php echo $this->session->userdata('id');?>">
            <input style="height:30px;" min=1 max=<?php echo $detail->stok?> required type="number" name="f1" placeholder="Qty"></br>
            <input type="submit" value="ADD TO CART" class="btn_center3 btn btn-sm btn-success">
          </form>
        </div>
      </div>
	  </div>
	</div>
</div>

</body>
</html>
