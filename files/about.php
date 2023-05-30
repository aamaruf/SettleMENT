<?php
session_start();

    $SIGN_UP_ID=$_SESSION['SIGN_UP_ID'];
   require_once('dbconnect.php');
	                             date_default_timezone_set('Asia/Dhaka');    
                                $currentdate = date('Y-m-d'); 
								$sql1 = "SELECT *  FROM   SIGN_UP WHERE SIGN_UP_ID='$SIGN_UP_ID'";
	                                 $result = $con->query($sql1);
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {
                                      $SIGN_UP_NAME =	$row["SIGN_UP_NAME"];
									  $SIGN_UP_PHONE =	$row["SIGN_UP_PHONE"];
									  }
									  }

	

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>About</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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
<div class="wrapper">

  <header class="main-header"> 
  <!-- Logo --> 
<a href="home.php" class="logo">
	<span class="logo-mini"><b>S</b>M</span>
     <span class="logo-lg"><b>Settle</b>MENT</span>
    </a>
  
  <nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->     
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> 
  <span class="sr-only">Toggle navigation</span>      
  <span class="icon-bar"></span>    
  <span class="icon-bar"></span>     
  <span class="icon-bar"></span>   
  </a>    <!-- Header Navbar: style can be found in header.less -->	
  <div class="navbar-custom-menu">   
  <ul class="nav navbar-nav">   
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
          <img src="user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $SIGN_UP_NAME;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
             <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
       		<li><a href="home.php"><i class="fa fa-fw fa-home"></i> <span>Home</span></a></li>
       <li><a href="contact.php"><i class="fa fa-fw fa-mobile"></i> <span>Contact</span></a></li>
	   <li class="treeview">
          <a href="#">
           <i class="fa fa-plus"></i> <span> Add New</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="new_diary.php"><i class="fa fa-fw fa-book"></i> Diary </a></li>
            <li><a href="new_task.php"><i class="fa fa-fw fa-tasks"></i> Task </a></li>
          </ul>
        </li>
		
		 <li class="treeview">
          <a href="#">
           <i class="fa fa-fw fa-close"></i> <span> Missed</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="missed_diary.php"><i class="fa fa-fw fa-book"></i> Diary </a></li>
            <li><a href="missed_task.php"><i class="fa fa-fw fa-tasks"></i> Task </a></li>
          </ul>
        </li>
		
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>History</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="diary_history.php"><i class="fa fa-fw fa-book"></i> Diary </a></li>
            <li><a href="task_history.php"><i class="fa fa-fw fa-tasks"></i> Task </a></li>
          </ul>
        </li>
	   
        
       
        <li><a href="about.php"><i class="fa fa-fw fa-question"></i> <span>About</span></a></li>
		<li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">


		
		
		<div class="row">
		<div class="col-lg-12 col-xs-12">

		
		     
	<div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
              <div class="widget-user-image">
                <img class="img-circle" src="logo.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Hope IT Limited</h3>
              <h5 class="widget-user-desc">Developers of SettleMent</h5>
            </div><br/>
						

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="rakin.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Azizur Rahman Rakin </h3>

              <p class="text-muted text-center">Director of System Design</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>BSc </b>&nbsp;<a>( Computer Science ) </a>
                </li>
                <li class="list-group-item">
                  <b>Independent University of Bangladesh</b>
                </li>
                <li class="list-group-item">
                  <b>Email:&nbsp;</b> <a>arrakin1992@gmail.com</a>
                </li>
              </ul>

              <a href="https://www.facebook.com/azzizurrahman.rakin" class="btn btn-primary btn-block"><b>Connect</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
    <!-- /.content -->
  </div>
  
  
          <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="maruf.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Abdullah Al Maruf </h3>

              <p class="text-muted text-center">Software Developer ( Trainee )</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>BSc </b>&nbsp;<a>( CSE</a>&nbsp;<sub>Studying</sub><a> ) </a>
                </li>
                <li class="list-group-item">
                  <b>Green University of Bangladesh</b>
                </li>
                <li class="list-group-item">
                  <b>Email:&nbsp;</b> <a>aamaruf131@gmail.com</a>
                </li>
              </ul>

              <a href="https://www.facebook.com/aamaruf131" class="btn btn-primary btn-block"><b>Connect</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
    <!-- /.content -->
  </div>
  
     <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="ankin.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Alimur Rahman Ankin </h3>

              <p class="text-muted text-center">Web Developer ( Trainee )</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>BBA </b>&nbsp;<a>( Management</a>&nbsp;<sub>Studying</sub><a> ) </a>
                </li>
                <li class="list-group-item">
                  <b>Bajitpur College</b>
                </li>
                <li class="list-group-item">
                  <b>Email:&nbsp;</b> <a>ankinrahman6498@gmail.com</a>
                </li>
              </ul>

              <a href="https://www.facebook.com/alimur.ankin" class="btn btn-primary btn-block"><b>Connect</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
    <!-- /.content -->
  </div>
  
  
  
  
  
  </div>
		
			
          </div>
		  

          <!-- /.nav-tabs-custom -->
        </div>
		</div>		

		
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy;  <a href="#">HopeIT Ltd</a>.</strong>
    
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
