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
    <table class="table table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Total</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $i=1;
                foreach($menunya->result() as $permenu) {
                  if($this->session->userdata('id')==$permenu->id_pengguna)
                  echo "<tr>
                          <td>$permenu->tanggal</td>
                          <td>$permenu->total</td>
                          <td>$permenu->status_transaksi</td>
                  </tr>";
                  $i++;
                }
            ?>
          </tbody>
        </table>
</div>

</div>
</div>
</div>

</body>
</html>
