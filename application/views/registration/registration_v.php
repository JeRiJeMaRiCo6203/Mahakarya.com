<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
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

	<div class="registrasi span9">
    <hr  class="soften">
	<center><h2> Registration</h2></center>
    <hr  class="soften">
    </br>
	<div class="well">

	<form class="posisi form-horizontal" action="<?php echo site_url("pengguna/aksi_insert");?>" method="post">
		 <div class="control-group">
			<label class="control-label" for="inputLnam" >Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" style="height:30px;" placeholder="Name" required name="f1">
			</div>
		 </div>
        <div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone <sup>*</sup></label>
			<div class="controls">
			  <input type="number" style="height:30px;" min=0 required name="f2" placeholder="Mobile Phone"/>
			</div>
		</div>

        <div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" style="height:30px;" placeholder="Address" required name="f3"/>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" style="height:30px;" placeholder="City" required name="f4"/>
			</div>
		</div>
    <div class="control-group">
			<label class="control-label" for="kode_pos">Zip Code<sup>*</sup></label>
			<div class="controls">
			  <input type="number" style="height:30px;" min=0 placeholder="Zip Code" required name="f9"/>
			</div>
		</div>

		<div class="control-group">
  		<label class="control-label" for="input_email">Email <sup>*</sup></label>
  		<div class="controls">
  		  <input type="email" style="height:30px;" placeholder="Email" required name="f5"/>
  		</div>
	  </div>

    <div class="control-group">
      <label class="control-label" for="input_username">Username <sup>*</sup></label>
      <div class="controls">
        <input type="text" style="height:30px;" placeholder="Username" required name="f6"/>
      </div>
    </div>

	  <div class="control-group">
  		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
  		<div class="controls">
  		  <input type="password" style="height:30px;" placeholder="Password" required name="f7"/>
  		</div>
	  </div>

	<div class="control-group">
			<div class="controls">
				<input class="btn btn-sm btn-primary" type="submit" value="Register" name="f8"/>
			</div>
		</div>
	</form>
</div>

</div>
</div>
</div>
</div>
</body>
</html>
