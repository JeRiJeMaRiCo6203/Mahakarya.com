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
      <div id="mainBody">
        <div class="container">
          <div class="cart-box row">
            <div class="col-sm-10">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Address Confirmation</h3>
                </div>
                <div class="panel-body">
              <form  class="posisi form-horizontal" action="<?php echo site_url('cek_out')?>" method="post">
                <div class="control-group">
                  <label class="control-label" for="mobile">Mobile Phone <sup>*</sup></label>
                  <div class="controls">
                    <input type="text" style="height:30px;" name="f2" placeholder="Mobile Phone" value="<?php echo $this->session->userdata('no_telp')?>"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="address">Address<sup>*</sup></label>
                  <div class="controls">
                    <input type="text" style="height:30px;" placeholder="Address" required name="f3" value="<?php echo $this->session->userdata('alamat')?>"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="city">City<sup>*</sup></label>
                  <div class="controls">
                    <input type="text" style="height:30px;" placeholder="City" required name="f4" value="<?php echo $this->session->userdata('kota')?>"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="kode_pos">Zip Code<sup>*</sup></label>
                  <div class="controls">
                    <input type="number" style="height:30px;" min=0 placeholder="Zip Code" required name="f9" value="<?php echo $this->session->userdata('kode_pos')?>"/>
                  </div>
                </div>
                <input type="hidden" name="iduser" value="<?php echo $this->session->userdata('id')?>">
                <input type="hidden" name="idproduk" value="<?php echo $this->input->get('id')?>">
                <input type="hidden" name="tanggal" value="<?php echo(date("d-M-Y",$t))?>">

                </div>

                 <div class="paid2">
                   <div class="control-group">
			              <div class="controls">
				              <input class="btn-payment btn btn-sm btn-primary" type="submit" value="Confirm" name="f8"/>
			              </div>
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
