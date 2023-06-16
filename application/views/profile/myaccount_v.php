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
    <form class="posisi form-horizontal" action="<?php echo site_url("profile"); ?>" method="post" id="form" >
      <h4 class="center-text">Change your personal details here</h4><br>
  		<div class="control-group" style="margin-left:150px;">
  			<label class="control-label" for="inputFname1" >Name :</label>
  		  <div class="controls">
  			  <p><?php echo $target[0]->nama ?></p>
          <input type="hidden" name="fid" value="<?php echo $target[0]->id_pengguna ?>">
  			</div>
  		 </div>

      <div class="control-group" style="margin-left:150px;">
    		<label class="control-label" for="mobile">Mobile Phone :</label>
    		<div class="controls">
    			<p><?php echo $target[0]->no_telp?></p>
    		</div>
    	</div>

      <div class="control-group" style="margin-left:150px;">
  			<label class="control-label" for="mobile">Address :</label>
  			<div class="controls">
  			  <p><?php echo $target[0]->alamat?></p>
  			</div>
  		</div>

      <div class="control-group" style="margin-left:150px;">
  			<label class="control-label" for="city">City :</label>
  			<div class="controls">
  			  <p><?php echo $target[0]->kota?></p>
  			</div>
  		</div>

      <div class="control-group" style="margin-left:150px;">
        <label class="control-label" for="zipcode">Zip Code :</label>
        <div class="controls">
          <p><?php echo $target[0]->kode_pos?></p>
        </div>
      </div>
      <div class="control-group" style="margin-left:150px;">
        <label class="control-label" for="email">Email :</label>
        <div class="controls">
          <p><?php echo $target[0]->email?></p>
        </div>
      </div>

      <div class="control-group" style="margin-left:110px;">
  			<div class="controls">
          <a href="<?php echo site_url();?>/profile/update/<?php echo $this->session->userdata('id');?>" class="btn btn-success" form="form">Edit Profile</a>
  			</div>
  		</div>
  	</form>
</div>

</div>
</div>
</div>

</body>
</html>
