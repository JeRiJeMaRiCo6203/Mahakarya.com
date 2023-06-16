<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Account</title>
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
    ?>
    <br>
    <!--Sidebar-->
    <div class="akun">
	 <div class="customerhead"><p>My Account</p></div>
    <div id="sidebar" class="span3">
        <div class="customer">
        <div class="akun well well-small">
  		      <ul id="sideManu" class="nav nav-tabs nav-stacked">
              <li ><a href="<?php echo site_url('profile');?>">My Account</a></li>
              <li ><a href="<?php echo site_url('myorder');?>">My Order</a></li>
              <li ><a href="<?php echo site_url('pembayaran');?>">Payment Confirmation</a></li>
            </ul>
        </div>
        </div>
		<br/>
	</div>

	<div class="row">
	<div class="span9" style="width:900px;">
	<div class="well">
    <form class="posisi form-horizontal" action="<?php echo site_url("profile/aksi_update"); ?>" method="post" id="form" >
      <h4 class="center-text">Change your personal details here</h4><br>
  		<div class="control-group" style="margin-left:120px;">
  			<label class="control-label" for="inputFname1" >Name :</label>
  		  <div class="controls">
          <input type="text" class="form-control" name="f1" style="margin-top: 5px; width:170px;" value="<?php echo $target[0]->nama ?>">
          <input type="hidden" name="fid" value="<?php echo $target[0]->id_pengguna ?>">
  			</div>
  		 </div>

      <div class="control-group" style="margin-left:120px;">
    		<label class="control-label" for="mobile">Mobile Phone :</label>
    		<div class="controls">
          <input type="text" class="form-control" name="f2" style="margin-top: 5px; width:170px;" value="<?php echo $target[0]->no_telp ?>">
    		</div>
    	</div>

      <div class="control-group" style="margin-left:120px;">
  			<label class="control-label" for="mobile">Address :</label>
  			<div class="controls">
          <input type="text" class="form-control" name="f3" style="margin-top: 5px; width:170px;" value="<?php echo $target[0]->alamat ?>">
  			</div>
  		</div>

      <div class="control-group" style="margin-left:120px;">
  			<label class="control-label" for="city">City :</label>
  			<div class="controls">
  			  <input type="text" class="form-control" name="f4" style="margin-top: 5px; width:170px;" value="<?php echo $target[0]->kota ?>">
  			</div>
  		</div>

      <div class="control-group" style="margin-left:120px;">
        <label class="control-label" for="zipcode">Zip Code :</label>
        <div class="controls">
          <input type="text" class="form-control" name="f5" style="margin-top: 5px; width:170px;" value="<?php echo $target[0]->kode_pos ?>">
        </div>
      </div>

      <div class="control-group" style="margin-left:120px;">
        <label class="control-label" for="email">Email :</label>
        <div class="controls">
          <input type="email" class="form-control" name="f6" style="margin-top: 5px; width:170px;" value="<?php echo $target[0]->email ?>">
        </div>
      </div>

      <div class="control-group" style="margin-left:120px;">
        <label class="control-label" for="password">Password :</label>
        <div class="controls">
          <input type="password" class="form-control" name="f7" style="margin-top: 5px; width:170px;" value="<?php echo $target[0]->password ?>">
        </div>
      </div>

      <div class="control-group">
  			<div class="controls" style="margin-left:300px;">
          <input type="submit" value="Save" class="btn btn-success" form="form">
      	</div>
  		</div>
  	</form>
</div>

</div>
</div>
</div>

</body>
</html>
