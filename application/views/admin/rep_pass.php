<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <title>Reset Password</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  
  <script type="text/javascript">
  function update_gan(){
  
  var pass1 = document.getElementById('pass1').value;
  var pass2 = document.getElementById('pass2').value;
  if(pass1 == pass2){
   document.getElementById('upware').submit();
  }else{
   alert("Password yang dimasukan tidak sama");
  }
  }
  </script>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>E-Musik</h1>
      </div>
      <div class="col-md-4">
            <div class="card">
              <h3 class="card-title">Perbarui Password</h3>
              <div class="card-body">
                <form action="<?php echo site_url('C_login/gantipass'); ?>" method="post" id="upware">
				<div class="form-group">
                    <label class="control-label">Username</label>
                    <input class="form-control" type="email" placeholder="Nama" name="username">
                  </div>
				 <div class="form-group">
                    <label class="control-label">E-Mail</label>
                    <input class="form-control" type="email" placeholder="Nama" name="mail">
                  </div>
				   
                  <div class="form-group">
                    <label class="control-label">Kode Activation</label>
                    <input class="form-control" type="text" placeholder="kode" name="kode" value="<?php echo $kode; ?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password</label>
                    <input class="form-control" type="password" placeholder="password" id="pass1" name="pass1">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password Again</label>
                    <input class="form-control" type="password" placeholder="Password again" id="pass2" name="pass2">
                  </div>
				 
                  
                 
                 
               
              </div>
              <div class="card-footer">
                <a onclick="update_gan()" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-check-circle"></i>Perbarui</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
              </div>
			   </form>
            </div>
          </div>
    </section>
  </body>
  <script src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/plugins/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
</html>