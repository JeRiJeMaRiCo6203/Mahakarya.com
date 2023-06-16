<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Payment Confirmation</title>
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
	 <div class="customerhead"><p>Payment Confirmation</p></div>
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
              <th>ID</th>
              <th>Date</th>
              <th>Transaction Detail</th>
              <th>Status</th>
              <th>Upload Bukti Pembayaran</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $i=1;
                foreach($menunya->result() as $permenu) {
                  if($this->session->userdata('id')==$permenu->id_pengguna){
                  echo "<tr>
                          <td>$permenu->id_transaksi</td>
                          <td>$permenu->tanggal</td>
                          <td>$permenu->isi</td>
                          <td>$permenu->status_transaksi</td>
                          <td>
                          <form id='form' action='".site_url('pembayaran/aksi_insert')."' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='id_transaksi' value='".$permenu->id_transaksi."'>
                            <input type='file' name='featured_image' required>
                            <td><button class='btn btn-primary' type='submit' onclick='ok();'>Kirim</button></td>
                          </form>
                          </td>
                  </tr>";
                  }
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
<!--<script type="text/javascript">
  document.getElementById("file").onchange = function() {
  document.getElementById("form").submit();
}-->
<script>
function ok(){
			alert('Upload Pembayaran Berhasil');
	}
</script>
</html>
