<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/css/base.css" rel="stylesheet">
  </head>
<body>

<div id="mainBody">
	<div class="container">
	<div class="row">
		<div class="span9">
			  <ul class="box2 thumbnails">
          <h4>Figuratif</h4>
          <?php
          if($this->session->userdata('l')=='user' || $this->session->userdata('l')=='admin'){
               $i=1;
           foreach($datanya1->result() as $perdata){
    			  echo '
              <li class="span3">
                <div class="thumbnail">
                <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
                <div class="caption">
                  <h5>'.$perdata->nama.'</h5>
                  <h5>'.$perdata->merek.'</h5>
                  <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
                  <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
                </div>
                </div>
              </li>';
              }
            $i++;

      }
      else{
        foreach($datanya1->result() as $perdata){
        echo '
          <li class="span3">
            <div class="thumbnail">
            <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
            <div class="caption">
              <h5>'.$perdata->nama.'</h5>
              <h5>'.$perdata->merek.'</h5>
              <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
              <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail/blmLogin').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
            </div>
            </div>
          </li>';
      }
      }
        ?>

        <h5><a class="btn_more" href="<?php echo site_url('handphone');?>">More Products</a></h5>
			  </ul>
		</div>
	</div>
	</div>

  <div class="container">
	<div class="row">
		<div class="span9">
      <ul class="box2 thumbnails">
        <h4>Abstrak</h4>
        <?php
        if($this->session->userdata('l')=='user' || $this->session->userdata('l')=='admin'){
             $i=1;
         foreach($datanya2->result() as $perdata){
  			  echo '
            <li class="span3">
              <div class="thumbnail">
              <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
              <div class="caption">
                <h5>'.$perdata->nama.'</h5>
                <h5>'.$perdata->merek.'</h5>
                <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
                <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
              </div>
              </div>
            </li>';
            }
          $i++;

    }
    else{
      foreach($datanya2->result() as $perdata){
      echo '
        <li class="span3">
          <div class="thumbnail">
          <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
          <div class="caption">
            <h5>'.$perdata->nama.'</h5>
            <h5>'.$perdata->merek.'</h5>
            <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
            <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail/blmLogin').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
          </div>
          </div>
        </li>';
    }
    }
      ?>

      <h5><a class="btn_more" href="<?php echo site_url('laptop');?>">More Products</a></h5>
      </ul>
		</div>
	</div>
	</div>

  <div class="container">
  <div class="row">
    <div class="span9">
      <ul class="box2 thumbnails">
        <h4>Non-Figuratif</h4>
        <?php
        if($this->session->userdata('l')=='user' || $this->session->userdata('l')=='admin'){
             $i=1;
         foreach($datanya3->result() as $perdata){
  			  echo '
            <li class="span3">
              <div class="thumbnail">
              <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
              <div class="caption">
                <h5>'.$perdata->nama.'</h5>
                <h5>'.$perdata->merek.'</h5>
                <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
                <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
              </div>
              </div>
            </li>';
            }
          $i++;

    }
    else{
      foreach($datanya3->result() as $perdata){
      echo '
        <li class="span3">
          <div class="thumbnail">
          <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
          <div class="caption">
            <h5>'.$perdata->nama.'</h5>
            <h5>'.$perdata->merek.'</h5>
            <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
            <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail/blmLogin').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
          </div>
          </div>
        </li>';
    }
    }
      ?>

          <h5><a class="btn_more" href="<?php echo site_url('tablet');?>">More Products</a></h5>
        </ul>
    </div>
  </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="span9">
      <ul class="box2 thumbnails">
        <h4>Representasional</h4>
        <?php
        if($this->session->userdata('l')=='user' || $this->session->userdata('l')=='admin'){
             $i=1;
         foreach($datanya4->result() as $perdata){
  			  echo '
            <li class="span3">
              <div class="thumbnail">
              <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
              <div class="caption">
                <h5>'.$perdata->nama.'</h5>
                <h5>'.$perdata->merek.'</h5>
                <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
                <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
              </div>
              </div>
            </li>';
            }
          $i++;

    }
    else{
      foreach($datanya4->result() as $perdata){
      echo '
        <li class="span3">
          <div class="thumbnail">
          <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
          <div class="caption">
            <h5>'.$perdata->nama.'</h5>
            <h5>'.$perdata->merek.'</h5>
            <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
            <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail/blmLogin').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
          </div>
          </div>
        </li>';
    }
    }
      ?>

          <h5><a class="btn_more" href="<?php echo site_url('tablet');?>">More Products</a></h5>
        </ul>
    </div>
  </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="span9">
      <ul class="box2 thumbnails">
        <h4>Relief</h4>
        <?php
        if($this->session->userdata('l')=='user' || $this->session->userdata('l')=='admin'){
             $i=1;
         foreach($datanya5->result() as $perdata){
  			  echo '
            <li class="span3">
              <div class="thumbnail">
              <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
              <div class="caption">
                <h5>'.$perdata->nama.'</h5>
                <h5>'.$perdata->merek.'</h5>
                <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
                <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
              </div>
              </div>
            </li>';
            }
          $i++;

    }
    else{
      foreach($datanya5->result() as $perdata){
      echo '
        <li class="span3">
          <div class="thumbnail">
          <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
          <div class="caption">
            <h5>'.$perdata->nama.'</h5>
            <h5>'.$perdata->merek.'</h5>
            <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
            <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail/blmLogin').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
          </div>
          </div>
        </li>';
    }
    }
      ?>

          <h5><a class="btn_more" href="<?php echo site_url('tablet');?>">More Products</a></h5>
        </ul>
    </div>
  </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="span9">
      <ul class="box2 thumbnails">
        <h4>Performatif</h4>
        <?php
        if($this->session->userdata('l')=='user' || $this->session->userdata('l')=='admin'){
             $i=1;
         foreach($datanya6->result() as $perdata){
  			  echo '
            <li class="span3">
              <div class="thumbnail">
              <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
              <div class="caption">
                <h5>'.$perdata->nama.'</h5>
                <h5>'.$perdata->merek.'</h5>
                <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
                <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
              </div>
              </div>
            </li>';
            }
          $i++;

    }
    else{
      foreach($datanya6->result() as $perdata){
      echo '
        <li class="span3">
          <div class="thumbnail">
          <a><img src="'.base_url('assets/images/product/'.$perdata->foto).'"></a>
          <div class="caption">
            <h5>'.$perdata->nama.'</h5>
            <h5>'.$perdata->merek.'</h5>
            <h5>Rp.'.number_format($perdata->harga,2,',','.').'</h5>
            <h4 class="m0"><a class="btn_center2 btn btn-sm btn-success" href="'.site_url('detail/blmLogin').'?id='.$perdata->id_produk.'">VIEW DETAIL</a></h4>
          </div>
          </div>
        </li>';
    }
    }
      ?>

          <h5><a class="btn_more" href="<?php echo site_url('tablet');?>">More Products</a></h5>
        </ul>
    </div>
  </div>
  </div>
</div>

</body>
</html>
