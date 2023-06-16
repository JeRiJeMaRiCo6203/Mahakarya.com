<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
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
      <div id="mainBody">
        <div class="container">
          <div class="cart-box row">
            <div class="col-sm-10">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Shopping Cart</h3>
                </div>
                <form class="" action="<?php echo site_url('cek_out/aksi_insert')?>" method="post" id="form1">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $total=0;
                          $i=1;
                          if(!empty($menunya->result())){
                          foreach($menunya->result() as $permenu) {
                            if($permenu->id_pengguna==$this->session->userdata('id')){
                              $total+=$permenu->subtotal;
                            echo "<tr>
                                    <td>$permenu->nama</td>
                                    <td style='text-align:right;'>".number_format($permenu->harga,2,',','.')."</td>
                                    <td>$permenu->jumlah</td>
                                    <td style='text-align:right;'>".number_format($permenu->subtotal,2,',','.')."</td>
                                    <td><a href='".site_url('cart/aksi_delete/'.$permenu->id_keranjang)."'>Delete</a></td>
                            </tr>";
                          }
                            $i++;
                        }
                      } else {
                        echo "<tr><td colspan=5 style='text-align:center;'>No items in your cart</td></tr>";
                      }
                        ?>
                    </tbody>
                    <tr>
                        <td align="right" colspan="3"><b>Payment Total</td>
                          <input type="hidden" name="f11" value="<?php echo $target[0]->id_pengguna ?>">
                          <input type="hidden" name="f13" value="<?php echo $target[0]->nama ?>">
                          <input type="hidden" name="f10" value="Belum Bayar">
                          <input type="hidden" name="f12" value="<?php echo(date("d-M-Y"))?>">
                          <input type="hidden" name="f9" value="<?php echo $total;?>">
                        <td style='text-align:right;'><b>Rp.&nbsp;<?php echo number_format($total,2,',','.');?></b></td>
                        <td></td>
                     </tr>
                   </table>
                  <input type="submit" value="Cek Out" class="btn-payment btn btn-sm btn-primary" form="form1"   <?php if (empty($menunya->result())) echo "disabled" ?>>
                </form>
              </div>
            </div><!-- /.col-sm-4 -->
          </div>
        </div>
      </div>
    </body>
</html>
