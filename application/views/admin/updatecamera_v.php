<html>
   <head>
		<title>Update Data Produk</title>
   </head>
   <body>
     <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit Product Information</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("adm_camera/aksi_update");?>" method="post">
                    <?php
                      $target = $selectX->result();
                    ?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="f1" value="<?php echo $target[0]->nama ?>" required="required" class="form-control col-md-7 col-xs-12"></input>
                        <input type="hidden" name="fid" value="<?php echo $target[0]->id_produk ?>"></input>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Category<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="f2" class="form-control">
                              <option value="1"
                                      <?php if($target[0]->id_kategori =='1') echo "selected"; ?> >Handphone
                              </option>
                              <option value="2"
                                      <?php if($target[0]->id_kategori =='2') echo "selected"; ?> >Laptop
                              </option>
                              <option value="3"
                                      <?php if($target[0]->id_kategori =='3') echo "selected"; ?> >Tablet
                              </option>
                              <option value="4"
                                      <?php if($target[0]->id_kategori =='4') echo "selected"; ?> >Camera
                              </option>
                            </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Picture <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="f3" value="<?php echo $target[0]->foto ?>" method="post" enctype="multipart/form-data" class="form-control col-md-7 col-xs-12">
                        </input>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Merk <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="f4" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $target[0]->merek ?>"></input>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Specification <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="f5" value="<?php echo $target[0]->spesifikasi ?>" required="required" class="form-control col-md-7 col-xs-12" rows="10">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" min="0" name="f6" required="required" value="<?php echo $target[0]->harga ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Stock <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" min="0" name="f9" required="required" value="<?php echo $target[0]->stok ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="f8" class="form-control">
                              <option value="new"
                                      <?php if($target[0]->status =='new') echo "selected"; ?> >New
                              </option>
                              <option value="old"
                                      <?php if($target[0]->status =='old') echo "selected"; ?> >Old
                              </option>
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success" name="f10">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
   </body>
</html>
