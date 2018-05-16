<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miminium</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/template/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/template/css/plugins/animate.min.css"/>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/template/css/plugins/datatables.bootstrap.min.css"/>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css"/>


	<link href="<?php echo base_url() ?>assets/template/css/style.css" rel="stylesheet">

	<!-- notification   -->
	<link href="<?php echo base_url()?>/assets/css/notifIt.css" type="text/css" rel="stylesheet">
	<!-- end: Css -->

	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/template/img/logomi.png">

  </head>
 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <!-- <a href="index.html" class="navbar-brand"> -->
                 <b class="navbar-brand">HR System</b>
                <!-- </a> -->

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Akihiko Avaron</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url() ?>assets/template/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">

          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1>21:00</h1>
                      <p >Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                          <li><a href="<?php echo base_url('dashboard')?>"><span class="fa-home fa"></span> Dashboard</a></li>
                    </li>

                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Master Data
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="<?php echo base_url('grade')?>">Grade</a></li>
                        <li><a href="<?php echo base_url('employee')?>">Employee</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

		  <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft"><?php echo $modul_name ?></h3>

                    </div>
                  </div>
                </div>

            	<?php
					$this->load->view($content);
				?>
          <!-- end: content -->
      </div>


    <!-- start: Javascript -->
    <script src="<?php echo base_url()?>assets/template/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/template/js/jquery.ui.min.js"></script>
    <script src="<?php echo base_url()?>assets/template/js/bootstrap.min.js"></script>


    <!-- plugins -->
    <script src="<?php echo base_url()?>assets/template/js/plugins/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/template/js/plugins/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url()?>assets/template/js/plugins/jquery.datatables.min.js"></script>
	<script src="<?php echo base_url()?>assets/template/js/plugins/datatables.bootstrap.min.js"></script>

	<script src="<?php echo base_url()?>assets/js/notifIt.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

    <!-- custom -->
     <script src="<?php echo base_url() ?>assets/template/js/main.js"></script>
	 <script type="text/javascript">
	   $(document).ready(function(){
	     $('#datatables-example').DataTable();
	   });

	   	<?php
			if($this->session->flashdata('messageSuccess')){
		?>
		   notif({
			  type: "success",
			  msg: "<?php echo $this->session->flashdata('messageSuccess') ?>",
			  position: "left"
		  });
	   <?php
   			}elseif($this->session->flashdata('messageFailed')){
		?>
			notif({
				type: "error",
				msg: "<?php echo $this->session->flashdata('messageFailed') ?>",
				position: "left"
			});
		<?php
		   }
		?>

		$('.classdate').datetimepicker({
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
	    });
	 </script>
  </body>
</html>
