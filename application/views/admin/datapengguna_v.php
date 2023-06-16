<html>
   <head>
		<title>Data Pengguna</title>
   </head>
   <body>
     <div class="x_panel">
      <div class="x_title">
        <h2>Member Data</h2>
        <ul class="nav navbar-right panel_toolbox">
          <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_content">

                  <!-- modals -->
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user"></i> Add New Member</button>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                         </div>
                         <div class="modal-body">
                           <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("adm_pengguna/aksi_insert");?>" method="post">
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="text" name="f1" required="required" class="form-control col-md-7 col-xs-12">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone<span class="required">*</span></label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="number" min=0 name="f2" required="required" class="form-control col-md-7 col-xs-12">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required">*</span></label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                 <textarea type="text" name="f3" required="required" class="form-control col-md-7 col-xs-12" rows="10"></textarea>
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="text" name="f4" required="required" class="form-control col-md-7 col-xs-12">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Zip Code <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" min=0 name="f5" required="required" class="form-control col-md-7 col-xs-12">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="f6" required="required" class="form-control col-md-7 col-xs-12">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="f7" required="required" class="form-control col-md-7 col-xs-12">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Password <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" name="f8" required="required" class="form-control col-md-7 col-xs-12">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Level <span class="required">*</span>
                               </label>
                               <div class="col-md-6 col-sm-6 col-xs-12">
                                 <select name="f9" class="form-control">
			                            <option name="user">user</option>
			                            <option name="admin">admin</option>
                                 </select>
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
                  <!-- /modals -->
              </div>
            </div>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
        		<tr>
        		   <th>ID</th>
               <th>Name</th>
               <th>Phone Number</th>
               <th>Address</th>
               <th>City</th>
               <th>Zip Code</th>
               <th>Email</th>
               <th>Username</th>
               <th>Password</th>
               <th>Level</th>
               <th>Tools</th>
        		</tr>
            <tbody>
          		<?php
                   $i=1;
          		 foreach($datanya->result() as $perdata){
          			  echo "<tr>
          			          <td>$i</td>
          					  <td>$perdata->nama</td>
          					  <td>$perdata->no_telp</td>
          					  <td>$perdata->alamat</td>
          					  <td>$perdata->kota</td>
          					  <td>$perdata->kode_pos</td>
                      <td>$perdata->email</td>
          					  <td>$perdata->username</td>
          					  <td>$perdata->password</td>
          					  <td>$perdata->level</td>
                      <td><a class='btn btn-danger' href='".site_url('adm_pengguna/aksi_delete/'.$perdata->id_pengguna)."'>Delete</a></td>
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
