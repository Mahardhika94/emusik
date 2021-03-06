<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <title>User</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="<?php echo site_url('index/admin'); ?>">E-Musik</a>
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
           
            <li><a href="<?php echo site_url('index/reservasi'); ?>"><i class="fa fa-check-square-o"></i><span>Reservasi</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Agenda</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('index/agenda'); ?>"><i class="fa fa-circle-o"></i> Lihat Agenda</a></li>
                <li><a href="<?php echo site_url('index/ins_agenda'); ?>"><i class="fa fa-circle-o"></i> Masukkan Agenda</a></li>
               
              </ul>
            </li>
			<li class=""><a href="<?php echo site_url('index/musisi'); ?>"><i class="fa fa-volume-up"></i><span>Musisi</span></a></li>
			<li class="active"><a href="<?php echo site_url('index/user'); ?>"><i class="fa fa-users"></i><span>User</span></a></li>
			<li class=""><a href="<?php echo site_url('index/kontak'); ?>"><i class="fa fa-envelope"></i><span>Kontak</span></a></li>
            
            
            
          </ul>
              
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Daftar User Sistem / Pengguna E-Musik</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li></li>
              <li class="active"><a href="#">User</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id User</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>E-Mail</th>
                      <th>NO_HP</th>
					  <th>Delete</th>
					  
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
					    <td>2011/04/25</td>
                      <td><a href="<?php echo site_url('home/del_mhs/'. 11 .''); ?>" class="btn btn-danger"><i class="fa fa-times-circle"></i> Hapus Data </a></td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
					    <td>2011/04/25</td>
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