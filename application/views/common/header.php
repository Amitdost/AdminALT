<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assest/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!--ADD Custom Script/Style-->
    <script src="<?php echo base_url('assest/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url('assest/'); ?>custom_js/main.js"></script>
<!--End ADD Custom Script/Style-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="overflow-y:hidden !important">
    <input type="hidden" value="<?php echo base_url()?>" id="base_url"/>
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b><?php echo $admin['site_name'];?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="<?php echo base_url(); ?>">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assest/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assest/');?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assest/');?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assest/'); ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('assest/'); ?>#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assest/'); ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url(); ?>">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->

          <!--
          <li class="dropdown notifications-menu">
            <a href="<?php echo base_url('assest/'); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="<?php echo base_url('assest/'); ?>#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('assest/'); ?>#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('assest/'); ?>#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('assest/'); ?>#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('assest/'); ?>#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url('assest/'); ?>#">View all</a></li>
            </ul>
          </li>

          -->
          <!-- Tasks: style can be found in dropdown.less -->

          <!--
          <li class="dropdown tasks-menu">
            <a href="<?php echo base_url('assest/'); ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
               
                <ul class="menu">
                  <li>
                    <a href="<?php echo base_url('assest/'); ?>#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="<?php echo base_url('assest/'); ?>#">View all tasks</a>
              </li>
            </ul>
          </li>
          -->
        
          <!-- User Account: style can be found in dropdown.less -->
		  <?php $admin = $this->basic_model->getAdmin(); 
            
      ?>
          <li class="dropdown user user-menu">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assest/'); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $admin['admin_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assest/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
			          	<?php echo $admin['admin_name']; ?>
                </p>
                
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>admin/profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>admin/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         <!-- <li>
            <a href="<?php echo base_url('assest/'); ?>#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          -->
        </ul>
      </div>
    </nav>
  </header>
    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      	<div class="user-panel">
			<div class="pull-left image">
			<img src="<?php echo base_url('assest/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
			<p><?php echo $admin['admin_name'];?></p>
			<a href=""><i class="fa fa-circle text-success"></i> Online</a>
			</div>
      	</div>
      <!-- search form -->
      <!--
      	<form action="#" method="get" class="sidebar-form">
        	<div class="input-group">
          		<input type="text" name="q" class="form-control" placeholder="Search...">
          		<span class="input-group-btn">
                	<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                	</button>
              	</span>
        	</div>
      	</form>
       --> 
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
    	<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        	<li class="treeview">
          		<a href="<?php echo base_url()."admin/dashboard"; ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          		</a>
          </li> 

          <li class="treeview">
          		<a href="">
                <i class="fa fa-user"></i> <span>Manage Users</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()."admin/user-list"; ?>"><i class="fa fa-users"></i>Users List</a></li>
                  <li><a href="<?php echo base_url()."admin/add-user"; ?>"><i class="fa fa-user-plus"></i>Add User</a></li>
                  </ul>
          		</a>
          </li>

          <li class="treeview">
          		<a href="">
                <i class="fa fa-group"></i> <span>Manage Categories</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()."admin/category-list"; ?>"><i class="fa fa-group"></i>Categories List</a></li>
                  <li><a href="<?php echo base_url()."admin/add-category"; ?>"><i class="fa fa-user-plus"></i>Add Category</a></li>
                  </ul>
          		</a>
          </li>

          <li class="treeview">
          		<a href="">
                <i class="fa fa-group"></i> <span>Manage Services</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()."admin/category-list"; ?>"><i class="fa fa-group"></i>Services List</a></li>
                  <li><a href="<?php echo base_url()."admin/add-category"; ?>"><i class="fa fa-user-plus"></i>Add Services</a></li>
                  </ul>
          		</a>
          </li>

          <li class="treeview">
          		<a href="">
                <i class="fa fa-group"></i> <span>Manage Appointments</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()."admin/appointment-list"; ?>"><i class="fa fa-group"></i>Appointments List</a></li>
                  <li><a href="<?php echo base_url()."admin/add-appointment"; ?>"><i class="fa fa-user-plus"></i>Add Appointment</a></li>
                  </ul>
          		</a>
          </li>

          <li class="treeview">
          		<a href="">
                <i class="fa fa-group"></i> <span>Manage Booking</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()."admin/booking-list"; ?>"><i class="fa fa-group"></i>Booking List</a></li>
                  <li><a href="<?php echo base_url()."admin/add-booking"; ?>"><i class="fa fa-user-plus"></i>Add Booking</a></li>
                  </ul>
          		</a>
          </li>
          
          <li class="treeview">
          		<a href="">
                <i class="fa fa-group"></i> <span>Manage Payments</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()."admin/paymnets-list"; ?>"><i class="fa fa-group"></i>Payments List</a></li>
                  <li><a href="<?php echo base_url()."admin/add-payment"; ?>"><i class="fa fa-user-plus"></i>Add Payments</a></li>
                  </ul>
          		</a>
          </li>

          <li class="treeview">
          		<a href="">
                <i class="fa fa-group"></i> <span>Manage Reviews</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()."admin/reviews-list"; ?>"><i class="fa fa-group"></i>Reviews List</a></li>
                  <li><a href="<?php echo base_url()."admin/add-review"; ?>"><i class="fa fa-user-plus"></i>Add Review</a></li>
                  </ul>
          		</a>
          </li>

        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>