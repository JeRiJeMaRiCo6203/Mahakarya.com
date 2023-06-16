<html>
   <head>
		<title>Data Pajangan</title>
   </head>
   <body>
     <div class="x_panel">
      <div class="x_title">
        <h2>Displays Data</h2>
        <ul class="nav navbar-right panel_toolbox">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_content">
                  <!-- modals -->
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-laptop"></i> Add New Product</button>
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
                        </div>
                        <div class="modal-body">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("adm_laptop/aksi_insert");?>" method="post">
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="f1" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Categories<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="f2" class="form-control" disabled="disabled">
                                  <option value="2">Display</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Picture <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="f3" type="file" enctype="multipart/form-data" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Merk <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="f4" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Specification <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea type="text" name="f5" required="required" class="form-control col-md-7 col-xs-12" rows="10"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" min="0" name="f6" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Stock <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" min="0" name="f9" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="f10">Save</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

          </div>
        </ul>
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
              <th>Stock</th>
              <th colspan="2" style="text-align:center">Tools</th>
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
          					  <td>$perdata->stok</td>
                      <td><a class='btn btn-success' href='".site_url('adm_laptop/update/'.$perdata->id_produk)."'>Edit</a></td>
                      <td><a class='btn btn-danger' href='".site_url('adm_laptop/aksi_delete/'.$perdata->id_produk)."'>Delete</a></td>
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
