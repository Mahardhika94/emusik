<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <title>Daftar</title>
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
  var namaa = document.getElementById('nama').value;
  var email = document.getElementById('email').value;
  var nope = document.getElementById('hp').value;
  var username = document.getElementById('username').value;
  if(namaa ==''){
	alert("Isi Data Registrasi dengan Lengkap!!!");
  }else if(email == ''){
	alert("Isi Data Registrasi dengan Lengkap!!!");
  }else if(nope == ''){
	alert("Isi Data Registrasi dengan Lengkap!!!");
  }else if(username == ''){
	alert("Isi Data Registrasi dengan Lengkap!!!");
  }else if(pass1 == ''){
	alert("Isi Data Registrasi dengan Lengkap!!!");
  }else if(pass2 == ''){
	alert("Isi Data Registrasi dengan Lengkap!!!");
  }else if(pass1 == pass2){
	document.getElementById('upware').submit(); 
  }else{
	alert("Password yang dimasukan tidak sama");}
  }
  
  function cek_username(name){
	
		var name=document.getElementById('username').value;
		
			var url = "http://localhost/emusik/index.php/User/sel_username/"+name;
			var client = new XMLHttpRequest();
			client.open("GET", url, false);
			client.send();
			var hasil=client.responseText;
				if (client.status == 200){
					var result = hasil;
					if(hasil =='ada'){
					alert("Username Yang Anda Masukkan Telah Terdaftar");
					document.getElementById('username').value ="";
					
					}

				}
				else{
								alert("Periksa Koneksi Internet anda");
				}
		
		
		}
		
		function cek_mail(name){
		
		var name=document.getElementById('email').value;
		var name2 =name.replace('@', "reresxxxx98");
			var url = "http://localhost/emusik/index.php/User/sel_mail/"+name2;
			var client = new XMLHttpRequest();
			client.open("GET", url, false);
			client.send();
			var hasil=client.responseText;
				if (client.status == 200){
					var result = hasil;
					if(hasil =='ada'){
					alert("Username Yang Anda Masukkan Telah Terdaftar");
					document.getElementById('email').value ="";
					}

				}
				else{
								alert("Periksa Koneksi Internet anda");
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
              <center><h3 class="login-head"><i class="fa  fa-users fa-lg"></i> Daftar Akun</h3></center>
              <div class="card-body">
                <form action="<?php echo site_url('User/registrasi'); ?>" method="post" id="upware">
				<div class="form-group">
                    <label class="control-label">Username</label>
                    <input class="form-control" type="email" placeholder="Username" id="username" name="username" onchange="cek_username(this)">
                  </div>
				 <div class="form-group">
                    <label class="control-label">Nama / Nama  Band</label>
                    <input class="form-control" type="email" placeholder="Nama" name="nama" id="nama">
                  </div>
				   
                  <div class="form-group">
                    <label class="control-label">E-mail</label>
                    <input class="form-control" type="email" placeholder="Email" name="email" id="email" value="" onchange="cek_mail(this)">
                  </div>
				  <div class="form-group">
                    <label class="control-label">Nomor HP</label>
                    <input class="form-control" type="text" placeholder="Nama" name="hp" id="hp">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password</label>
                    <input class="form-control" type="password" placeholder="password" id="pass1" name="pass1">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password Again</label>
                    <input class="form-control" type="password" placeholder="Password again" id="pass2" name="pass2">
                  </div>
				 
                  <div class="form-group">
              <p class="semibold-text mb-0"><a href="<?php echo site_url('User'); ?>">Kembali Ke-Halaman Login</a></p>
          </div>
                 
               
              </div>
              <div class="card-footer">
                <a onclick="update_gan()" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-check-circle"></i>Daftar</a>&nbsp;&nbsp;&nbsp;
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