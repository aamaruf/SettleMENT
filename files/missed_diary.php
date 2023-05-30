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
  <title><?php echo $SIGN_UP_NAME;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
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
      </a>
    <!-- Header Navbar: style can be found in header.less -->
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
		   

		          <div class="col-md-12">

		
		<div class="box">
            <div class="box-header">
			

		
		
		
              <h3 class="box-title">Debtor Missed List </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
			<div class="table-responsive">  
              <table id="example1" class="table table-bordered table-striped">
                
				
				<thead>
                <tr>
                  
                  <th>NAME</th>
                  <th>AMOUNT</th>
                  <th>CONTACT</th>
				  <th>DETAILS</th>
                  <th>PAYMENT</th>
				  <th>UPDATE</th>
				  <th>REMOVE</th>
                </tr>
                </thead>
				
				
                <tbody>
				
				
				<?php
				
				
				
			$sql1 = "SELECT *  FROM   DEBT_SETTLEMENT WHERE SIGN_UP_ID='$SIGN_UP_ID' AND DEBT_SETTLEMENT_TYPE='Debtor' AND DEBT_SETTLEMENT_STATUS=1 
			AND  DEBT_SETTLEMENT_PAYMENT_DATE < NOW() ORDER BY `DEBT_SETTLEMENT_PAYMENT_DATE` DESC";
     	
	                                 $result = $con->query($sql1);
                                 
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {
									  $DEBT_SETTLEMENT_ID =	$row["DEBT_SETTLEMENT_ID"];  
                                      $DEBT_SETTLEMENT_WITH =	$row["DEBT_SETTLEMENT_WITH"];
                                      $DEBT_SETTLEMENT_AMOUNT =	$row["DEBT_SETTLEMENT_AMOUNT"];
									  $DEBT_SETTLEMENT_TYPE =	$row["DEBT_SETTLEMENT_TYPE"];
									  $DEBT_SETTLEMENT_CONTACT =	$row["DEBT_SETTLEMENT_CONTACT"];
									  $DEBT_SETTLEMENT_CUZ =	$row["DEBT_SETTLEMENT_CUZ"];
									  $DEBT_SETTLEMENT_PAYMENT_DATE =$row["DEBT_SETTLEMENT_PAYMENT_DATE"];

									  
									  
				
				?>
				
             	<tr>
                  <td><?php echo $DEBT_SETTLEMENT_WITH;?></td>
				   <td><?php echo $DEBT_SETTLEMENT_AMOUNT;?></td>
					 <td><?php echo $DEBT_SETTLEMENT_CONTACT;?></td>
					  <td><?php echo $DEBT_SETTLEMENT_CUZ;?></td>
					   <td> <small class="label label-danger"><i class="fa fa-clock-o"></i> <?php echo $DEBT_SETTLEMENT_PAYMENT_DATE;?></small></td>
						 <td><a href="edit.php?DEBT_SETTLEMENT_ID=<?php echo $DEBT_SETTLEMENT_ID; ?>"><i class="fa fa-fw fa-edit"></i></a></td>
						   <td><a href="remove.php?DEBT_SETTLEMENT_ID=<?php echo $DEBT_SETTLEMENT_ID; ?>"><i class="fa fa-trash-o"></i></a></td>
							
               
                          </tr>
				
				
				<?php
				
				}
				}
									  
				?>
 
                </tbody>
           
              </table>
            </div>
			 </div>
            <!-- /.box-body -->
          </div>

          </div>
		  
		  
		  </div>
		  
		  
		  
		  
		  
		    <div class="row">
		
		
		<div class="col-md-12">

		
		
          <div class="box">
            <div class="box-header">
			
			
		
				
              <h3 class="box-title">Creditor Missed List </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
			<div class="table-responsive">  
              <table id="example1" class="table table-bordered table-striped">
                
				
				<thead>
                <tr>
                  <th>NAME</th>
                  <th>AMOUNT</th>
                  <th>CONTACT</th>
				  <th>DETAILS</th>
                  <th>PAYMENT</th>
				  <th>UPDATE</th>
				  <th>REMOVE</th>
                </tr>
                </thead>
				
				
                <tbody>
				
				
				<?php
				
				
				
							$sql1 = "SELECT *  FROM DEBT_SETTLEMENT WHERE SIGN_UP_ID='$SIGN_UP_ID' AND DEBT_SETTLEMENT_TYPE='Creditor' AND DEBT_SETTLEMENT_STATUS=1
							AND DEBT_SETTLEMENT_PAYMENT_DATE < NOW() ORDER BY `DEBT_SETTLEMENT_PAYMENT_DATE` DESC";
     	
	                                 $result = $con->query($sql1);
                                 
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {
									  $DEBT_SETTLEMENT_ID =	$row["DEBT_SETTLEMENT_ID"];  
                                      $DEBT_SETTLEMENT_WITH =	$row["DEBT_SETTLEMENT_WITH"];
                                      $DEBT_SETTLEMENT_AMOUNT =	$row["DEBT_SETTLEMENT_AMOUNT"];
									  $DEBT_SETTLEMENT_TYPE =	$row["DEBT_SETTLEMENT_TYPE"];
									  $DEBT_SETTLEMENT_CONTACT =	$row["DEBT_SETTLEMENT_CONTACT"];
									  $DEBT_SETTLEMENT_CUZ =	$row["DEBT_SETTLEMENT_CUZ"];
									  $DEBT_SETTLEMENT_PAYMENT_DATE =$row["DEBT_SETTLEMENT_PAYMENT_DATE"];

									  
									  
				
				?>
				
              	<tr>
                  <td><?php echo $DEBT_SETTLEMENT_WITH;?></td>
				   <td><?php echo $DEBT_SETTLEMENT_AMOUNT;?></td>
					 <td><?php echo $DEBT_SETTLEMENT_CONTACT;?></td>
					  <td><?php echo $DEBT_SETTLEMENT_CUZ;?></td>
					   <td> <small class="label label-danger"><i class="fa fa-clock-o"></i> <?php echo $DEBT_SETTLEMENT_PAYMENT_DATE;?></small></td>
						 <td><a href="edit.php?DEBT_SETTLEMENT_ID=<?php echo $DEBT_SETTLEMENT_ID; ?>"><i class="fa fa-fw fa-edit"></i></a></td>
						   <td><a href="remove.php?DEBT_SETTLEMENT_ID=<?php echo $DEBT_SETTLEMENT_ID; ?>"><i class="fa fa-trash-o"></i></a></td>
							
               
                          </tr>
				
				
				<?php
				
				}
				}
									  
				?>
 
                </tbody>
           
              </table>
            </div>
			 </div>
            <!-- /.box-body -->
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
<!-- FLOT CHARTS -->
<script src="bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid  : {
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#3c8dbc'
      },
      lines : {
        fill : true, //Converts the line chart to area chart
        color: '#3c8dbc'
      },
      yaxis : {
        min : 0,
        max : 100,
        show: true
      },
      xaxis : {
        show: true
      }
    })

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */

    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */
	 
	 
	 var d = "<?php echo $total_debt;?>";
	 var c = "<?php echo $total_credit;?>";
	 //alert(d);

    var donutData = [
      { label: 'Debtor', data: d, color: '#3c8dbc' },
      { label: 'Creditor', data: c, color: '#0073b7' },
	 
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
</body>
</html>
