<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/css/base.css" rel="stylesheet">

  </head>
<body>

<div id="mainBody">
	<div class="container">
	<div class="row">
    <div class="contact span4">
      <hr width=95% class="soften">
        <center><h2>Login</h2></center>
      <hr  width=95% class="soften"/></br>
      <form class="box-login form-horizontal" action="<?php echo site_url();?>/login/verifikasi" method="POST">
          <div class="control-group">
    				<label class="control-label" for="inputEmail1">Username</label>
    				<div class="controls">
    				  <input style="height:30px;" type="text" id="inputEmail1" placeholder="Username" required autofocus name="username"></input>
    				</div>
  			  </div>
  			  <div class="control-group">
    				<label class="control-label" for="inputPassword1">Password</label>
    				<div class="controls">
    				  <input type="password" style="height:30px;" id="inputPassword1" placeholder="Password" required name="password"></input>
    				</div>
  			  </div>
          <?php if($this->session->userdata('msg')){ ?>
          <div class="controls alert alert-danger" style="width:200px;"><?php echo $this->session->userdata('msg');?>
          </div>
          <?php } ?>
  			  <div class="control-group">
    				<div class="controls">
    				  <button type="submit" class="btn-login btn btn-sm btn-primary">Login</button>
              <input type="checkbox" value="remember-me"> Remember me</input>
    				  <p>Don't have an account?<a href="<?php echo site_url('registration');?>"> Register</a></p>
    				</div>
  			  </div>
      </form>
    </div>
		</div>
		</div>
	</div>

</body>
</html>
