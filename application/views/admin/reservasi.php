<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <title>Reservasi</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
	
    -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript">
function go_book(){
var kode=document.getElementById('kobok').value;
window.open('/emusik/index.php/Index/bokk/'+kode);
}
</script>
	</head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="<?php echo site_url('index/admin'); ?>">E-Musi  Studio</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                 
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                 <li><a href="<?php echo site_url('Index/libur'); ?>"><i class="fa fa-cog fa-lg"></i> Set Libur</a></li>
                  <li><a href="<?php echo site_url('index/profile'); ?>"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="<?php echo site_url('C_login/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
             <div class="pull-left image"><img class="img-circle" src="<?php echo base_url();?>asset/images/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <p><?php echo $username; ?></p>
              <p class="designation">Admistrator</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li><a href="<?php echo site_url('index/index'); ?>"><i class="fa fa-home"></i><span>Home</span></a></li>
           
            <li class="active"><a href="<?php echo site_url('index/reservasi'); ?>"><i class="fa fa-check-square-o"></i><span>Reservasi</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Agenda</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('index/agenda'); ?>"><i class="fa fa-circle-o"></i> Lihat Agenda</a></li>
                <li><a href="<?php echo site_url('index/ins_agenda'); ?>"><i class="fa fa-circle-o"></i> Masukkan Agenda</a></li>
               
              </ul>
            </li>
			<li class=""><a href="<?php echo site_url('index/musisi'); ?>"><i class="fa fa-volume-up"></i><span>Musisi</span></a></li>
			<li class=""><a href="<?php echo site_url('index/kontak'); ?>"><i class="fa fa-envelope"></i><span>Kontak</span></a></li>
            
            
            
          </ul>
              
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Reservasi Studio 1</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Reservasi</li>
              <li class="active"><a href="#">List Reservasi</a></li>
            </ul>
          </div>
<div>
<a href="<?php echo site_url('Index/reservasi2'); ?>" target="_blank" class="btn btn-warning btn-flat"  ><i class="fa fa-home fa-home"></i> Studio 2</a>
<a class="btn btn-primary btn-flat" href="#" data-toggle="modal" data-target="#myModal" ><i class="fa fa-lg fa-plus"></i></a>

<div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Kode Booking Studio</h4>
          </div>
          <div class="modal-body">
            <p></p>
            <form role="form">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="masukan Kode Boking" id="kobok" name="kobok">
                  <span class="input-group-btn">
                    <a class="btn btn-success" type="submit" onclick="go_book()">Go</a>
                  </span>
                </div>
              </div>
            </form>
            <p></p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">Close</a>
          
          </div>
        </div>
      </div>
    </div>
</div>

        </div>
		<div>
<form role="form" action="<?php echo site_url('Index/reservasi/1'); ?>" method="post">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control date-own" name="tahun" id="tahun" placeholder="tanggal" value="<?php echo $skr; ?>">
                        
                     <script type="text/javascript">
      $('.date-own').datepicker({
        
         format: 'yyyy-mm-dd'
       });
  </script>
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-success" type="submit">Go</button>
                  </span>
                </div>
              </div>
            </form>
</div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
               <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Shift</th>
                      <th>Jam</th>
                      <th>Tanggal Hari</th>
                      <th>Status</th>
                      <th>Detail</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    
                   
                    <tr>
                      <td><?php echo 1; ?></td>
                      <td>09.00-11.00 <?php echo $s1; ?></td>
                      <td><?php echo $skr; ?></td>
                      <td><?php if($s1==0){echo "Kosong";}elseif($s1 ==1){ echo "Booking";} else{ echo "Verified by admin";} ?></td>
                      <td><?php if($s1==0){echo "Not Fount";}else{ echo '<a href="'?> <?php echo site_url('Index/detail_user/s1/'. $skr .''); ?><?php echo '" target="_blank">Klik detail</a>';} ?></td>

                      <td><?php if($s1==0){echo "Not Action";}elseif($s1 ==1){ echo '<a class="btn btn-danger" href="'?><?php echo site_url('Index/dl_bok/s1/'. $skr); ?> <?php echo '">Hapus</a>'.' '.
					  '<a class="btn btn-success" href="'?> <?php echo site_url('Index/verified/s1/'. $skr); ?> <?php echo'">Verified</a>';}
					  else{ echo '<a class="btn btn-danger" href="'?> <?php echo site_url('Index/dl_bok/s1/'. $skr.''); ?> <?php echo'">Hapus</a>';} ?></td>
                    </tr>
					 <tr>
                      <td><?php echo 2; ?></td>
                      <td>11.00-13.00</td>
					  <td><?php echo $skr; ?></td>
                       <td><?php if($s2==0){echo "Kosong";}elseif($s2 ==1){ echo "Booking";} else{ echo "Verified by admin";} ?></td>
                      <td><?php if($s2==0){echo "Not Fount";}else{ echo '<a href="'?> <?php echo site_url('Index/detail_user/s2/'. $skr .''); ?><?php echo '" target="_blank">Klik detail</a>';} ?></td>

                      <td><?php if($s2==0){echo "Not Action";}elseif($s2 ==1){ echo '<a class="btn btn-danger" href="'?><?php echo site_url('Index/dl_bok/s2/'. $skr); ?> <?php echo '">Hapus</a>'.' '.
					  '<a class="btn btn-success" href="'?> <?php echo site_url('Index/verified/s2/'. $skr); ?> <?php echo'">Verified</a>';}
					  else{ echo '<a class="btn btn-danger" href="'?> <?php echo site_url('Index/dl_bok/s2/'. $skr.''); ?> <?php echo'">Hapus</a>';} ?></td>
                    </tr>
					 <tr>
                      <td><?php echo 3; ?></td>
                      <td>13.00-15.00</td>
                      <td><?php echo $skr; ?></td>
                      <td><?php if($s3 ==0){echo "Kosong";}elseif($s3 ==1){ echo "Booking";} else{ echo "Verified by admin";} ?></td>
                      <td><?php if($s3 ==0){echo "Not Fount";}else{ echo '<a href="'?> <?php echo site_url('Index/detail_user/s3/'. $skr .''); ?><?php echo '" target="_blank">Klik detail</a>';} ?></td>

                      <td><?php if($s3 ==0){echo "Not Action";}elseif($s3 ==1){ echo '<a class="btn btn-danger" href="'?><?php echo site_url('Index/dl_bok/s3/'. $skr); ?> <?php echo '">Hapus</a>'.' '.
					  '<a class="btn btn-success" href="'?> <?php echo site_url('Index/verified/s3/'. $skr); ?> <?php echo'">Verified</a>';}
					  else{ echo '<a class="btn btn-danger" href="'?> <?php echo site_url('Index/dl_bok/s3/'. $skr.''); ?> <?php echo'">Hapus</a>';} ?></td>
                    </tr>
					 <tr>
                      <td><?php echo 4; ?></td>
                      <td>15.00-17.00</td>
                      <td><?php echo $skr; ?></td>
                      <td><?php if($s4==0){echo "Kosong";}elseif($s4 ==1){ echo "Booking";} else{ echo "Verified by admin";} ?></td>
                      <td><?php if($s4==0){echo "Not Fount";}else{ echo '<a href="'?> <?php echo site_url('Index/detail_user/s4/'. $skr .''); ?><?php echo '" target="_blank">Klik detail</a>';} ?></td>

                      <td><?php if($s4==0){echo "Not Action";}elseif($s4 ==1){ echo '<a class="btn btn-danger" href="'?><?php echo site_url('Index/dl_bok/s4/'. $skr); ?> <?php echo '">Hapus</a>'.' '.
					  '<a class="btn btn-success" href="'?> <?php echo site_url('Index/verified/s4/'. $skr); ?> <?php echo'">Verified</a>';}
					  else{ echo '<a class="btn btn-danger" href="'?> <?php echo site_url('Index/dl_bok/s4/'. $skr.''); ?> <?php echo'">Hapus</a>';} ?></td>
                    </tr>
					 <tr>
                      <td><?php echo 5; ?></td>
                      <td>17.00-19.00</td>
                      <td><?php echo $skr; ?></td>
                       <td><?php if($s5==0){echo "Kosong";}elseif($s5 ==1){ echo "Booking";} else{ echo "Verified by admin";} ?></td>
                      <td><?php if($s5==0){echo "Not Fount";}else{ echo '<a href="'?> <?php echo site_url('Index/detail_user/s5/'. $skr .''); ?><?php echo '" target="_blank">Klik detail</a>';} ?></td>

                      <td><?php if($s5==0){echo "Not Action";}elseif($s5 ==1){ echo '<a class="btn btn-danger" href="'?><?php echo site_url('Index/dl_bok/s5/'. $skr); ?> <?php echo '">Hapus</a>'.' '.
					  '<a class="btn btn-success" href="'?> <?php echo site_url('Index/verified/s5/'. $skr); ?> <?php echo'">Verified</a>';}
					  else{ echo '<a class="btn btn-danger" href="'?> <?php echo site_url('Index/dl_bok/s5/'. $skr.''); ?> <?php echo'">Hapus</a>';} ?></td>
                    </tr>
					 <tr>
                      <td><?php echo 6; ?></td>
                      <td>19.00-21.00</td>
                      <td><?php echo $skr; ?></td>
                      <td><?php if($s6==0){echo "Kosong";}elseif($s6 ==1){ echo "Booking";} else{ echo "Verified by admin";} ?></td>
                      <td><?php if($s6==0){echo "Not Fount";}else{ echo '<a href="'?> <?php echo site_url('Index/detail_user/s6/'. $skr .''); ?><?php echo '" target="_blank">Klik detail</a>';} ?></td>

                      <td><?php if($s6==0){echo "Not Action";}elseif($s6 ==1){ echo '<a class="btn btn-danger" href="'?><?php echo site_url('Index/dl_bok/s6/'. $skr); ?> <?php echo '">Hapus</a>'.' '.
					  '<a class="btn btn-success" href="'?> <?php echo site_url('Index/verified/s6/'. $skr); ?> <?php echo'">Verified</a>';}
					  else{ echo '<a class="btn btn-danger" href="'?> <?php echo site_url('Index/dl_bok/s6/'. $skr.''); ?> <?php echo'">Hapus</a>';} ?></td>
                    </tr>
					 <tr>
                      <td><?php echo 7; ?></td>
                      <td>21.00-23.00</td>
                      <td><?php echo $skr; ?></td>
                      <td><?php if($s7==0){echo "Kosong";}elseif($s7 ==1){ echo "Booking";} else{ echo "Verified by admin";} ?></td>
                      <td><?php if($s7==0){echo "Not Fount";}else{ echo '<a href="'?> <?php echo site_url('Index/detail_user/s7/'. $skr .''); ?><?php echo '" target="_blank">Klik detail</a>';} ?></td>

                      <td><?php if($s7==0){echo "Not Action";}elseif($s7 ==1){ echo '<a class="btn btn-danger" href="'?><?php echo site_url('Index/dl_bok/s17/'. $skr); ?> <?php echo '">Hapus</a>'.' '.
					  '<a class="btn btn-success" href="'?> <?php echo site_url('Index/verified/s7/'. $skr); ?> <?php echo'">Verified</a>';}
					  else{ echo '<a class="btn btn-danger" href="'?> <?php echo site_url('Index/dl_bok/s7/'. $skr.''); ?> <?php echo'">Hapus</a>';} ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
  <script src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/plugins/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>
</html>