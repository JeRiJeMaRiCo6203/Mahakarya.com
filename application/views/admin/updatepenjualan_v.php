<html>
   <head>
		<title>Update Data Transaksi</title>
   </head>
   <body>
     <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit Transactions Information</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form action="<?php echo site_url("adm_transaksi/aksi_update"); ?>"  method="post" id="form">
                    <?php
                      $data = $selectX->result();
                    ?>
                    <div class="form-group">
                      <label class="col-md-1 col-md-offset-1" style="margin-top:15px;">Pesanan</label>
                      <div class="col-md-10">
                        <textarea disabled class="form-control" name="f1" cols="100" rows="10" style="margin-top: 10px;" ><?php echo preg_replace("/<br\W*?>/","\n", $data[0]->isi) ?></textarea>
                        <input type="hidden" name="fid" value="<?php echo $data[0]->id_transaksi ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-1 col-md-offset-1" style="margin-top:25px;">Status</label>
                      <div class="col-md-10" style="margin-top:20px;">
                        <td>
                            <select name="f2" class="form-control">
                              <option value="Belum Bayar"
                                      <?php if($data[0]->status_transaksi =='Belum Bayar') echo "selected"; ?> >Belum Bayar
                              </option>
                              <option value="Dalam Pengiriman"
                                      <?php if($data[0]->status_transaksi =='Dalam Pengiriman') echo "selected"; ?> >Dalam Pengiriman
                              </option>
                              <option value="Sudah Sampai"
                                      <?php if($data[0]->status_transaksi =='Sudah Sampai') echo "selected"; ?> >Sudah Sampai
                              </option>
                            </select>
                         </td>
                      </div>
                    </div>
                    <div class="form-group">
                      <div style="float:right;"></br>
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
