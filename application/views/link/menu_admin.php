<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/css/dashboard.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>/assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/jquery.fancybox.min.css" rel="stylesheet">
  </head>

  <body>
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li class="active"><a href="<?php echo site_url('home');?>">Overview</a></li>
           <li><a href="<?php echo site_url('dataproduk/cetakpdf');?>">Export Product PDF</a></li>
           <li><a href="<?php echo site_url('excel/downloadExcel');?>">Export Product Excel</a></li>
         </ul>
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url('adm_pengguna');?>"><i class="fa fa-users"></i> Member</a>
                  </li>
                  <li><a><i class="fa fa-laptop"></i> Products <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('adm_product');?>">All Products</a></li> 
                      <li><a href="<?php echo site_url('adm_handphone');?>">Seniman</a></li>
                
                      <li><a href="<?php echo site_url('adm_tablet');?>">Kategori Patung</a></li>
                      <li><a href="<?php echo site_url('adm_newproduct');?>">Koleksi Teratas</a></li>
                      <li><a href="<?php echo site_url('adm_featuredproduct');?>">Patung</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Transactions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('adm_transaksi');?>">All Transactions</a></li>
                      <li><a href="<?php echo site_url('adm_transaksi/payment');?>">Payment Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
      <!-- jQuery -->
      <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url();?>/assets/js/fastclick.js"></script>
      <!-- NProgress -->
      <script src="<?php echo base_url();?>/assets/js/nprogress.js"></script>
      <!-- Custom Theme Scripts -->
      <script src="<?php echo base_url();?>/assets/js/custom.min.js"></script>
      <!-- Datatables -->
      <script src="<?php echo base_url();?>/assets/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url();?>/assets/js/dataTables.bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>/assets/js/dataTables.responsive.min.js"></script>
      <script src="<?php echo base_url();?>/assets/js/responsive.bootstrap.js"></script>
      <script src="<?php echo base_url();?>/assets/js/jquery.fancybox.min.js"></script>

  </body>

</html>
