<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/main.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <title>E-Musik</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">E-Musik Studio</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
             
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
				<li><a href="<?php echo site_url('User/index'); ?>"><i class="fa fa-home fa-lg"></i> Home</a></li>
                  <li><a href="<?php echo site_url('User/pro'); ?>"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                   <li><a href="<?php echo site_url('C_login/user_logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
			  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="<?php echo site_url('User/jadwal'); ?>"><i class="fa fa-calendar fa-lg"></i> Jadwal</a></li>
                  <li><a href="<?php echo site_url('User/agenda'); ?>"><i class="fa fa-calendar-check-o fa-lg"></i> Agenda</a></li>
				  <li><a href="<?php echo site_url('User/kontak'); ?>"><i class="fa fa-phone-square fa-lg"></i> Kontak</a></li>
				<li><a href="<?php echo site_url('User/lokasi'); ?>"><i class="fa fa-map-marker fa-lg"></i> Lokasi</a></li>
                 
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      s
      <div class="content-wrapper">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
			<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <img src="http://osmhotels.com//assets/check-true.jpg">
        <h3>Dear, <?php echo $nama; ?></h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for ordering fusion studio music, please wait some time for your order in confirm admin.</p>
        
    <br><br>
        </div>
        
	</div>
</div>
              </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="<?php echo base_url();?>asset/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/pace.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/main.js"></script>
  </body>
</html>