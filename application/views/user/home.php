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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<style>
.center {
    margin: auto;
    width: 100%;
    border: 3px solid #73AD21;
    padding: 20px;
	background-color:#E6E6FA;
}
</style>
  </head>
  
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="<?php echo site_url('User/index'); ?>">E-Musik Studio</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
             
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="<?php echo site_url('User/pro'); ?>"><i class="fa fa-user fa-lg"></i> Profile</a></li>
				  <li><a href="<?php echo site_url('User/help'); ?>"><i class="fa fa-h-square fa-lg"></i> Bantuan</a></li>
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
	  <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="<?php echo site_url('User/index'); ?>"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li class="treeview"><a href="<?php echo site_url('User/pro'); ?>"><i class="fa fa-user"></i><span>Profile</span><i class="fa fa-angle-right"></i></a>
			<li class="treeview"><a href="<?php echo site_url('C_login/user_logout'); ?>"><i class="fa fa-sign-out fa-lg"></i><span>Log Out</span><i class="fa fa-angle-right"></i></a>
            </li>
            
          </ul>
        </section>
      </aside>
      <!-- Side-Nav-->
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-home"></i> Beranda E-Musik Studio</h1>
            <p>We Care Your Band</p>
          </div>
          <div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Welcome To Fusion Studio Music</h3>
              <?php echo $profile; ?>
              <p class="mt-40 mb-20"><a class="btn btn-primary icon-btn mr-10" data-toggle="modal" data-target="#myModal"><i class="fa fa-date fa-lg"></i> Libur</a> 
			  <a class="btn btn-primary icon-btn mr-10" href="<?php echo site_url('User/saran'); ?>"><i class="fa fa-date fa-lg"></i> Saran</a>
			  </p>
			  <p class="mt-40 mb-20"></p>
			  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Daftar Hari Libur Studio</h4>
        </div>
        <div class="modal-body">
		
            <ol>
			<?php foreach($tgl as $row){ ?>
              <li><?php echo $row->tanggal; ?></li>
			  <?php } ?>
            </ol>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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