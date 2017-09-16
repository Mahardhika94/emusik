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
  </head>
  <script type="text/javascript">
    function cek_tanggal(){
	
		var tgl=document.getElementById('tahun').value;
		//alert(tgl);
			var url = "http://localhost/emusik/index.php/User/sel_libur/"+tgl;
			var client = new XMLHttpRequest();
			client.open("GET", url, false);
			client.send();
			var hasil=client.responseText;
				if (client.status == 200){
					var result = hasil;
					if(hasil =='libur'){
					alert("Taggal yang Anda Pilih Libur");
				
					
					}else{
					document.getElementById('upware').submit();
					
					}

				}
				else{
								alert("Periksa Koneksi Internet anda");
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
				  <li><a href="<?php echo site_url('User/list_book'); ?>"><i class="fa  fa-pencil-square-o fa-lg"></i> My Reservasi</a></li>
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
        <div class="page-title">
          <div>
            <h1>Reservasi</h1>
			
            <ul class="breadcrumb side">
              <li><i class="fa fa-music fa-lg"></i></li>
              <li>Booking</li>
              
            </ul>
          </div>

<div><a class="btn btn-primary btn-flat" href="<?php echo site_url('User/list_book'); ?>" ><i class="fa fa-lg fa-plus"></i></a></div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Daftar Pemesanan</h4>
        </div>
        <div class="modal-body">
          <p>
		   <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      
                    </tr>
                  </thead>
                  <tbody>
				  
				  
                    <tr>
                      <td><h3>
					  <?php foreach($datum as $row) { ?>
					  <div class="col-md-12">
            <h3 class="text-center">Book <?php echo $row->tanggal .' '. $row->sift ; ?></h3>
          </div>
        </div>
		
        <div class="row">
          <div class="col-md-offset-3 col-md-6">
           <?php $st= $row->status; ?>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" value="<?php if($st == 1){echo "Belum Verifikasi";} else{"Belum Verifikasi";} ?>" disabled>
                  <span class="input-group-btn">
                    <a href="<?php echo site_url('Insert/del_book/'. $row->id_pmsn .''); ?>" class="btn btn-success" type="submit">Batal</a>
                  </span>
                </div>
              </div>
           
          </div>
        </div>
		<?php } ?>
					  </h3></td>
                      
                    </tr>
                   
                  </tbody>
                </table>
		  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        </div>
		<div>
		<form action="<?php echo site_url('User/jadwal/1'); ?>" method="post" id="upware" name="upware">
              <div class="form-group">
                <div class="input-group">
				
                  <input type="text" class="form-control date-own" name="tahun" id="tahun" placeholder="tanggal" value="<?php echo $skr; ?>">
                        
                     <script type="text/javascript">
					 
      $('.date-own').datepicker({
startDate: '0d',
endDate:'+13d',
	 format: 'yyyy-mm-dd'
       });
  </script>
                  <span class="input-group-btn">
                    <a  class="btn btn-success" id="tgl" name="tgl" onclick="cek_tanggal()">Go</a>
                  </span>
                </div>
              </div>
            </form>
</div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
			<div class = "page-header active">
   
   <center><h1 class="active">
      Tampilan Jadwal & Reservasi Fusion Studio</p>
	  Studio 2
      
   </h1></center>
   
</div>
              <div class="list-group">
			  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
    </div>
   
    <small class="text-muted">
	<a href="<?php echo site_url('User/jadwal'); ?>" class="btn btn-warning btn-block"><i class="fa fa-check fa-lg"> Cek Studio 1 </i></a>
  <p>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1 active">Shift 1</h3>
      <small>09.00-11.00 WIB (<?php echo $skr; ?>)</small>
    </div>
    <p class="mb-1"><a class="btn btn-info btn-block"><i class="fa fa-sticky-note-o fa-lg"> <?php if($s1==1){ echo "Terisi"; }else { echo "Kosong";} ?></i></a></p>
    <small class="text-muted"><a href="<?php echo site_url('Insert/boking3/s1/1/'. $skr.''); ?>" class="btn <?php if($s1==1){ echo "btn-danger"; }else { echo "btn-success";} ?> btn-block" <?php if($s1==1){ echo 'disabled = "disabled"'; } ?> ><i class="fa fa-check fa-lg"> Boking</i></a></small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Shift 2</h3>
      <small class="text-muted">011.00-13.00 WIB (<?php echo $skr; ?>)</small>
    </div>
     <p class="mb-1"><a class="btn btn-info btn-block"><i class="fa fa-sticky-note-o fa-lg"> <?php if($s2==1){ echo "Terisi"; }else { echo "Kosong";} ?></i></a></p>
    <small class="text-muted"><a href="<?php echo site_url('Insert/boking3/s2/1/'. $skr.''); ?>" class="btn <?php if($s2==1){ echo "btn-danger"; }else { echo "btn-success";} ?> btn-block" <?php if($s2==1){ echo 'disabled = "disabled"'; } ?> ><i class="fa fa-check fa-lg"> Boking</i></a></small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Shift 3</h3>
      <small class="text-muted">13.00-15.00 WIB (<?php echo $skr; ?>)</small>
    </div>
 <p class="mb-1"><a class="btn btn-info btn-block"><i class="fa fa-sticky-note-o fa-lg"> <?php if($s3==1){ echo "Terisi"; }else { echo "Kosong";} ?></i></a></p>
    <small class="text-muted"><a href="<?php echo site_url('Insert/boking3/s3/1/'. $skr.''); ?>" class="btn <?php if($s3==1){ echo "btn-danger"; }else { echo "btn-success";} ?> btn-block" <?php if($s3==1){ echo 'disabled = "disabled"'; } ?> ><i class="fa fa-check fa-lg"> Boking</i></a></small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Shift 4</h3>
      <small class="text-muted">15.00-17.00 WIB (<?php echo $skr; ?>)</small>
    </div>
     <p class="mb-1"><a class="btn btn-info btn-block"><i class="fa fa-sticky-note-o fa-lg"> <?php if($s4==1){ echo "Terisi"; }else { echo "Kosong";} ?></i></a></p>
    <small class="text-muted"><a href="<?php echo site_url('Insert/boking3/s4/1/'. $skr.''); ?>" class="btn <?php if($s4==1){ echo "btn-danger"; }else { echo "btn-success";} ?> btn-block" <?php if($s4==1){ echo 'disabled = "disabled"'; } ?> ><i class="fa fa-check fa-lg"> Boking</i></a></small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Shift 5</h3>
      <small class="text-muted"><i class="fa fa-clock-o fa-lg"></i> 17.00-19.00 WIB (<?php echo $skr; ?>)</small>
    </div>
     <p class="mb-1"><a class="btn btn-info btn-block"><i class="fa fa-sticky-note-o fa-lg"> <?php if($s5==1){ echo "Terisi"; }else { echo "Kosong";} ?></i></a></p>
    <small class="text-muted"><a href="<?php echo site_url('Insert/boking3/s5/1/'. $skr.''); ?>" class="btn <?php if($s5==1){ echo "btn-danger"; }else { echo "btn-success";} ?> btn-block" <?php if($s5==1){ echo 'disabled = "disabled"'; } ?> ><i class="fa fa-check fa-lg"> Boking</i></a></small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Shift 6</h3>
      <small class="text-muted">19.00-21.00 WIB (<?php echo $skr; ?>)</small>
    </div>
     <p class="mb-1"><a class="btn btn-info btn-block"><i class="fa fa-sticky-note-o fa-lg"> <?php if($s6==1){ echo "Terisi"; }else { echo "Kosong";} ?></i></a></p>
    <small class="text-muted"><a href="<?php echo site_url('Insert/boking3/s6/1/'. $skr.''); ?>" class="btn <?php if($s6==1){ echo "btn-danger"; }else { echo "btn-success";} ?> btn-block" <?php if($s6==1){ echo 'disabled = "disabled"'; } ?> ><i class="fa fa-check fa-lg"> Boking</i></a></small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Shift 7</h3>
      <small class="text-muted">21.00-23.00 WIB (<?php echo $skr; ?>)</small>
    </div>
    <p class="mb-1"><a class="btn btn-info btn-block"><i class="fa fa-sticky-note-o fa-lg"> <?php if($s7==1){ echo "Terisi"; }else { echo "Kosong";} ?></i></a></p>
    <small class="text-muted"><a href="<?php echo site_url('Insert/boking3/s7/1/'. $skr.'' ); ?>" class="btn <?php if($s7==1){ echo "btn-danger"; }else { echo "btn-success";} ?> btn-block" <?php if($s7==1){ echo 'disabled = "disabled"'; } ?> ><i class="fa fa-check fa-lg"> Boking</i></a></small>
  </a>
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
	 <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>