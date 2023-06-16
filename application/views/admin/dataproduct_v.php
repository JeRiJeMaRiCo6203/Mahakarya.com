<html>
   <head>
		<title>Data Produk</title>
    <!-- Datatables -->
    <link href="<?php echo base_url();?>/assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/scroller.bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
     <div class="x_panel">
      <div class="x_title">
        <h2>Data Semua Produk</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Product Name</th>
              <th>Category</th>
              <th>Picture</th>
              <th>Merk</th>
              <th>Specification</th>
              <th>Price</th>
              <th>New Price</th>
              <th>Stock</th>
              <th>Status</th>
        		</tr>
            <tbody>
          		<?php
                   $i=1;
          		 foreach($datanya->result() as $perdata){
          			  echo "<tr>
          			      <td>$i.</td>
          					  <td>$perdata->nama</td>
          					  <td>$perdata->KategoriName</td>
          					  <td>$perdata->foto</td>
          					  <td>$perdata->merek</td>
          					  <td>$perdata->spesifikasi</td>
                      <td>$perdata->harga</td>
                      <td>$perdata->harga_baru</td>
          					  <td>$perdata->stok</td>
                      <td>$perdata->status</td>
                    </tr>";
                       $i++;
          		 }
          		?>
              </tbody>
      	    <table>
          </div>
      </div>
      <script src="<?php echo base_url();?>/assets/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url();?>/assets/js/dataTables.bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>/assets/js/dataTables.responsive.min.js"></script>
      <script src="<?php echo base_url();?>/assets/js/responsive.bootstrap.js"></script>
   </body>
</html>
