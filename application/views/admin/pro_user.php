<html><head>
    <meta charset="utf-8">
	<title>Profile Pengguna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <script>
      $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>
    <style>
      .user-row {
        margin-bottom: 14px;
    }
    
    .user-row:last-child {
        margin-bottom: 0;
    }
    
    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }
    
    .dropdown-user:hover {
        cursor: pointer;
    }
    
    .table-user-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }
    
    .table-user-information > tbody > tr:first-child {
        border-top: 0;
    }
    
    
    .table-user-information > tbody > tr > td {
        border-top: 0;
    }
    .toppad
    {margin-top:20px;
    }
    </style>
  </head><body>
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Pengguna / User</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                  <img alt="User Pic" src="<?php echo base_url();?>asset/images/user.png" class="img-circle img-responsive">
                </div>
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
					<tr>
					<td>Nama User</td>
					<td><?php echo ' : '.$nama; ?></td>
					</tr>
                      <tr>
                        <td>Username</td>
                        <td><?php echo ' : '.$username; ?></td>
                      </tr>
                      <tr>
                        <td>E-Mail:</td>
                        <td><?php echo ' : '.$email; ?></td>
                      </tr>
                      <tr>
                        <td>Nomor Hp</td>
                        <td><?php echo ' : '.$no_hp; ?></td>
                      </tr>
                      <tr></tr>
                     
                      
                      
                    </tbody>
                  </table>
                  <a href="#" class="btn btn-primary" onclick="self.close()">Keluar</a>
                  <a href="<?php echo site_url('Insert/del_user/'. $id_user .''); ?>" class="btn btn-danger">Hapus User</a>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
              <span class="pull-right">
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>