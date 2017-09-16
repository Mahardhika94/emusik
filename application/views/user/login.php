<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
	<link href="<?php echo base_url();?>asset/images/logo.png" rel="shortcut icon">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <title>Login user</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <center><h1>E-Musik</h1></center>
		<img class="img-rounded" src="<?php echo base_url(); ?>asset/images/logo.jpg" width="350" alt="User Image"></div>
     
      </div>
      <div class="login-box">
        <form class="login-form" action="<?php echo site_url('C_login/user_log'); ?>" method="post">
          <h3 class="login-head"><i class="fa  fa-user"></i> Login</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" name="username" placeholder="Username" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              
              <p class="semibold-text mb-0"><a href="<?php echo site_url('User/daftar'); ?>">Daftar </a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">SIGN IN<i class="fa fa-sign-in fa-lg"></i></button>
          </div>
        </form>
        
      </div>
    </section>
  </body>
  <script src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/plugins/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
</html>