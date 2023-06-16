<?php
  $t=time();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/css/base.css" rel="stylesheet">

    </head>
    <body>
      <?php
      $target = $dataX->result();
      $target1 = $menunya->result();

      $arrayIdTransaksi;
      $arrayTotal;
      $i=0;
      foreach ($menunya->result() as $key) {
        $arrayIdTransaksi[$i] = $key->id_transaksi;
        $arrayTotal[$i] = $key->total;
        # code...
      }
      $sizemax = sizeof($arrayIdTransaksi);
    ?>
      <div id="mainBody">
        <div class="container">
          <div class="cart-box row">
            <div class="col-sm-10">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Payment Confirmation</h3>
                </div>
                <div class="panel-body">
                  <h5 align="center">Thank you, <?php echo $target[0]->nama; ?> for order. <h5 align="center">Please do the payment to one of ATM below: </h5><br/>
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading" style="padding-bottom:20px;">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" onclick="det_bri()" style="cursor:pointer;">BANK BRI</a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                          <div class="panel-body" id="detail_bri" style="display:none;">
                          <div><img style="height:50px;width:200px;float:right;" src="http://localhost/mahakarya.com/assets/images/bri.png"></div>
                            <h5 style="margin-left:10px;text-align:left;">1. Insert your BRI card and
                            enter your PIN<br/>
                            2. Select Lainnya > Transfer > Other Bank
                            <br/>3. Enter 634-6128-1-22
                            <br/>4. Select Benar
                            <br/>5. Enter Nominal <?php echo $arrayTotal[0];?>
                            <br/>6. Select Benar
                            <br/>7. The ATM will show detail transaction With <br/>&nbsp;&nbsp;&nbsp;&nbsp;Nama : MAHAKARYA WALLET
                            <br/>8. Select YA</h5>
                          </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" style="padding-bottom:20px;">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" onclick="det_bni()" style="cursor:pointer;">
                          BANK BNI</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse in">
                        <div class="panel-body" id="detail_bni" style="display:none;">
                        <div><img style="height:60px;width:200px;float:right;" src="http://localhost/mahakarya.com/assets/images/bni.png"></div>
                          <h5 style="margin-left:10px;text-align:left;">1. Insert your BNI card and
                          enter your PIN<br/>
                          2. Select Lainnya > Transfer > Other Bank
                          <br/>3. Enter 632-6128-1-22
                          <br/>4. Select Benar
                          <br/>5. Enter Nominal <?php echo $arrayTotal[0];?>
                          <br/>6. Select Benar
                          <br/>7. The ATM will show detail transaction With <br/>&nbsp;&nbsp;&nbsp;&nbsp;Nama : MAHAKARYA WALLET
                          <br/>8. Select YA</h5>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" style="padding-bottom:20px;">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" onclick="det_mnd()" style="cursor:pointer;">
                          BANK MANDIRI</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body" id="detail_mnd" style="display:none;">
                        <div><img style="height:70px;width:200px;float:right;" src="http://localhost/mahakarya.com/assets/images/mandiri.png"></div>
                          <h5 style="margin-left:10px;text-align:left;">1. Insert your MANDIRI card and
                          enter your PIN<br/>
                          2. Select Lainnya > Transfer > Other Bank
                          <br/>3. Enter 630-6128-1-22
                          <br/>4. Select Benar
                          <br/>5. Enter Nominal <?php echo $arrayTotal[0];?>
                          <br/>6. Select Benar
                          <br/>7. The ATM will show detail transaction With <br/>&nbsp;&nbsp;&nbsp;&nbsp;Nama : MAHAKARYA WALLET
                          <br/>8. Select YA</h5>
                        </div>
                      </div>
                    </div>
                    </div>
                    <form  class="text-center form-horizontal" action="<?php echo site_url('pembayaran/aksi_insert')?>" method="post" enctype="multipart/form-data">
                    <?php if($this->session->flashdata('msg')){
                          if($this->session->flashdata('status')==TRUE){ ?>
                      <div class="alert alert-success"><h5><?php echo $this->session->flashdata('msg');?></h5>
                      </div>
                    <?php } else if($this->session->flashdata('status')==FALSE){ ?>
                      <div class="alert alert-danger" style=""><h5><?php echo $this->session->flashdata('msg');?></h5>
                      </div>
                    <?php } } ?>
                    <input type="hidden" name="id_transaksi" value="<?php echo $arrayIdTransaksi[$sizemax-1];?>">
                    <div class="panel panel-default">
                      <div class="panel-heading" style="padding-bottom:20px;">
                        <h5 align="center"> Have you already paid?</h5><h5 align="center">Upload the proof of payment in form below</h5><br/>
                        <input type="file" align="center" name="featured_image"><br/><br/>
                        <input align="center" class="btn btn-success" type="submit" value="Save">
                      </div>
                    </div>
                  </form>
                </div><!-- /.col-sm-4 -->
          </div>
        </div>
      </div>
    </div>
    </body>
</html>
<script>
var x = document.getElementById('detail_bri');
var y = document.getElementById('detail_bni');
var z = document.getElementById('detail_mnd');
function det_bri(){
  y.style.display = "none";
  y.style.display = "none";
  z.style.display = "none";
  if(x.style.display === "none"){
      x.style.display = "block";
  } else {
      x.style.display = "none";
  }
}
function det_bni(){
  x.style.display = "none";
  z.style.display = "none";
  if(y.style.display === "none"){
      y.style.display = "block";
  } else {
      y.style.display = "none";
  }
}
function det_mnd(){
  x.style.display = "none";
  y.style.display = "none";
  if(z.style.display === "none"){
      z.style.display = "block";
  } else {
      z.style.display = "none";
  }
}

window.setTimeout(function(){
    $(".alert").slideUp(500, function(){
      $(this).remove();
    });
}, 5000);
</script>
