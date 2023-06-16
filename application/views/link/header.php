<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap2.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/css/base.css" rel="stylesheet">
  </head>

  <body>
<!-- Navbar ================================================== -->
<?php
  if($this->session->userdata('l')=='admin'){
  ?>
    <div id="logoArea" class="navbar">
      <div class="header-color navbar-inner">
        <a class="img-logo"><img src="<?php echo base_url();?>/assets/images/logoKecil.png" alt="mahakarya"/></a>
       <form class="cari" method="post" action="products.html" >
        </form>

        <div id="menu_atas">
           <ul>
             <li><a href="<?php echo site_url('dashboard');?>">Dashboard</a></li>
             <li><a href="<?php echo site_url('login/logout');?>">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="menu" style="background-color: #ece4d8;">
     <ul>
      <li class=""><a href="<?php echo site_url('home');?>">Home</a></li>
      <li class=""><a href="<?php echo site_url('featured_product');?>">Seniman</a></li>
      <li class=""><a href="<?php echo site_url('product');?>">Patung</a></li>
      <!--<li class=""><a href="<?php echo site_url('contactus');?>">CONTACT US</a></li>-->
      <li class=""><a href="<?php echo site_url('ourstores');?>">Artikel</a></li>
      </ul>
    </div>
    <?php }
    else if ($this->session->userdata('l')=='user') {
   ?>
     <div id="logoArea" class="navbar">
      <div style="padding-left:20px;padding-right:20px;">
       <div style="height: 150px; background-color: #ECE4D8;">
         <a class="img-logo"><img src="<?php echo base_url();?>/assets/images/logoKecil.png" alt="Gadgetshop"/></a>
        <!--<form class="cari" method="post" action="products.html" >
         </form>-->

         <div id="menu_atas">
            <ul>
              <li><a href="<?php echo site_url('profile');?>"><?php echo $this->session->userdata('n');?></a></li>
              <li><a href="<?php echo site_url('login/logout');?>">Logout</a></li>
                <li><a href="<?php echo site_url('cart');?>"><img src="<?php echo base_url();?>/assets/images/ico-cart.png" alt="Cart"/></a></li>
            </ul>
         </div>
       </div>
    </div>
     </div>
     <div id="menu" style="background-color: #ece4d8;">
      <ul>
        <li class=""><a href="<?php echo site_url('home');?>">Home</a></li>
        <li class=""><a href="<?php echo site_url('featured_product');?>">Seniman</a></li>
        <li class=""><a href="<?php echo site_url('product');?>">Patung</a></li>
        <!--<li class=""><a href="<?php echo site_url('contactus');?>">CONTACT US</a></li>-->
        <li class=""><a href="<?php echo site_url('ourstores');?>">Artikel</a></li>
       </ul>
     </div>
     <?php
       }
       else{
     ?>
     <div id="logoArea" class="navbar">
       <div style="height: 150px; background-color: #ECE4D8;">
        <div style="padding-left:20px;padding-right:20px;">
         <a class="img-logo"><img src="<?php echo base_url();?>/assets/images/logoKecil.png" alt="Gadgetshop"/></a>
        <form class="cari" method="post" action="products.html" >
         </form>

         <div id="menu_atas">
            <ul>
              <li class=""><a href="<?php echo site_url('registration');?>">Sign Up</a></li>
              <li class=""><a href="<?php echo site_url('login');?>">Login</a></li>
                <li><a href="<?php echo site_url('login');?>"><img src="<?php echo base_url();?>/assets/images/ico-cart.png" alt="Cart"/></a></li>
              </ul>
         </div>
       </div>
       </div>
     </div>
     <div id="menu" style="background-color: #ece4d8;">
      <ul>
        <li class=""><a href="<?php echo site_url('home');?>">Home</a></li>
        <li class=""><a href="<?php echo site_url('featured_product');?>">Seniman</a></li>
        <li class=""><a href="<?php echo site_url('product');?>">Patung</a></li>
        <!--<li class=""><a href="<?php echo site_url('contactus');?>">CONTACT US</a></li>-->
        <li class=""><a href="<?php echo site_url('ourstores');?>">Artikel</a></li>
       </ul>
     </div>
     
     
     <?php } ?>

</body>

</html>
