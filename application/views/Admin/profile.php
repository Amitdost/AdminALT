
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Dashboard</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Profile</h3>
            </div>

            <?php if( $this->session->flashdata('success')){ ?>
                <div class="alert alert-success">
                <?php echo $this->session->flashdata('success');?>
            </div>
            <?php } ?>
            <?php if( $this->session->flashdata('error')){ ?>
                <div class="alert alert-danger">
                    <?php 
                    $error = $this->session->flashdata('error');
                    if(is_array($error) && count($error) > 0 )
                    foreach(  $error as $value ){
                        if( $value ){
                            echo $value."<br>";
                        }
                    }

                    ?>
                </div>
            <?php } ?>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" enctype="multipart/form-data" id="update_profile">
                <input type="hidden" name="update_profile" value="update_profile" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="admin_name" name="admin[admin_name]" placeholder="Admin Name" value="<?php echo $admin['admin_name']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="admin_email" name="admin[admin_email]" placeholder="Admin Email" value="<?php echo $admin['admin_email']; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Support email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="from_email" name="admin[from_email]" placeholder="Support email" value="<?php echo $admin['from_email']; ?>">
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Admin phone</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="admin_phone" name="admin[admin_phone]" value="<?php echo $admin['admin_phone']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="admin_address" name="admin[admin_address]"><?php echo $admin['admin_address']; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Zip</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="admin_zip" name="admin[admin_zip]" placeholder="Enter Zip Code" value="<?php echo $admin['admin_zip']; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="admin_city" name="admin[admin_city]" placeholder="Enter city" value="<?php echo $admin['admin_city']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">State</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="admin_state" name="admin[admin_state]" placeholder="Enter state" value="<?php echo $admin['admin_state']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Country</label>

                  <div class="col-sm-10">
                    <input type="tetx" class="form-control" id="admin_country" name="admin[admin_country]" placeholder="Enter country" value="<?php echo $admin['admin_country']; ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Site Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="site_name" name="admin[site_name]" placeholder="Enter site name" value="<?php echo $admin['site_name']; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Uploaded site logo</label>

                  <?php 
                  
                  if( $admin['site_logo']){

                      $path = base_url()."assest/adminImages/".$admin['site_logo'];
                      echo "<div class='col-sm-10'><img src=".$path."></div>";

                  }else{
                      echo "No site logo";
                  }
                  ?>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Site Logo</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" name="site_logo">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" onclick="window.location.href='Students.html';">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
     </div>

    </section>
    <!-- /.content -->
  </div>