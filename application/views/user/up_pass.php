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
  <script type="text/javascript">
  function up_pass(){
  
  var pass1 = document.getElementById("pass1").value;
  var pass2 = document.getElementById("pass2").value;
  if(pass1.length<6){
    alert("Password tidak boleh kurang dari 6 karakter");
  }
  else if(pass1 == pass2){
  document.getElementById("uwhare").submit();
  }else{
  alert("Password yang dimasukkan harus sama persis");
  }
  }
  </script>
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
			<form class="forget-form" action="<?php echo site_url('Update/up_passu/'. $username.''); ?>" method="post" id="uwhare">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Perbarui Password ?</h3>
          <div class="form-group">
            <label class="control-label">Password Baru</label>
            <input class="form-control" type="password" placeholder="Password Baru" name="pass1" id="pass1">
          </div>
		  <div class="form-group">
            <label class="control-label">Password Baru Lagi</label>
            <input class="form-control" type="password" placeholder="Password Baru lagi" name="pass2" id="pass2">
          </div>
          <div class="form-group btn-container">
            <a class="btn btn-primary btn-block" onclick="up_pass()">Update Password<i class="fa fa-unlock"></i></a>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a href="<?php echo site_url('User/pro'); ?>" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
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