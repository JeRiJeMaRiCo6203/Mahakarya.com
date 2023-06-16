<html>
   <head>
		<title>Data Pembayaran</title>
   </head>
   <body>
     <div class="x_panel">
      <div class="x_title">
        <h2>Payment Data</h2>
        <ul class="nav navbar-right panel_toolbox">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_content">
            </div>
          </div>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
        		<tr>
        		   <th>#</th>
               <th>ID Transaksi</th>
               <th>ID Pengguna</th>
               <th>Nama</th>
               <th>Detail Transaksi</th>
               <th>Tanggal</th>
               <th>Bukti Pembayaran</th>
        		</tr>
            <tbody>
          		<?php
                   $i=1;
          		 foreach($datanya->result() as $perdata){
          			  echo "<tr>
          			      <td>$i</td>
          					  <td>$perdata->id_transaksi</td>
          					  <td>$perdata->id_pengguna</td>
                      <td>$perdata->nama</td>
                      <td>$perdata->isi</td>
          					  <td>$perdata->tanggal_pembayaran</td>
                      <td><a href='".base_url('assets/images/pembayaran/'.$perdata->bukti_pembayaran)."' data-fancybox='gallery'><img src='".base_url('assets/images/pembayaran/'.$perdata->bukti_pembayaran)."' height='200px' width='150px'></td>
                    </tr>";
                       $i++;
          		 }
          		?>
              </tbody>
      	    <table>
          </div>
      </div>

   </body>
</html>
<script>
$('.preview').anarchytip();
</script>
