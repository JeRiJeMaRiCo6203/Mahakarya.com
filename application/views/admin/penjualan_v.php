<html>
   <head>
		<title>Data Transaksi</title>
   </head>
   <body>
     <div class="x_panel">
      <div class="x_title">
        <h2>Transactions Data</h2>
        <ul class="nav navbar-right panel_toolbox">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_content">
            </div>

          </div>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Id transaksi</th>
              <th>Id Pengguna</th>
              <th>Nama Pengguna</th>
              <th>Tanggal Pesan</th>
              <th>Pesanan</th>
              <th>Status</th>
              <th>Tools</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $i=1;
                foreach($datanya->result() as $perdata) {
                  echo "<tr>
                          <td>$perdata->id</td>
                          <td>$perdata->id_transaksi</td>
                          <td>$perdata->id_pengguna</td>
                          <td>$perdata->namaPengguna</td>
                          <td>$perdata->tanggal</td>
                          <td>$perdata->isi</td>
                          <td>$perdata->status_transaksi</td>
                          <td><a class='btn btn-success' href='".site_url('adm_transaksi/update?idtransaksi='.$perdata->id)."'>Update</a></td>
                  </tr>";
                  $i++;
                }
            ?>
          </tbody>
        </table>
      </div>

   </body>
</html>
