
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> เพิ่มภาพกิจกรรม </title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>css/local.css" />

  <script type="text/javascript" src="<?php echo base_url(''); ?>js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(''); ?>bootstrap/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url('') ?>/js/validator.js"></script>
  <script src="<?php echo base_url('') ?>/js/validator.min.js"></script>

</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url('officer'); ?>"> Manager </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">

          <li><a href="<?php echo site_url('Manager'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> สินค้า </a></li>
          <li><a href="<?php echo site_url('Manager/order'); ?>"><i class="glyphicon glyphicon-list-alt"></i> รายการสั่งซื้อสินค้า </a></li>
          <li><a href="<?php echo site_url('Manager/share'); ?>"><i class="glyphicon glyphicon-stats"></i> หุ้น </a></li>

          <li><a href="<?php echo site_url('Manager/member'); ?>"><i class="glyphicon glyphicon-user"></i> สมาชิก </a></li>
          <li><a href="<?php echo site_url('Manager/activity'); ?>"><i class="glyphicon glyphicon-picture"></i> ภาพกิจกรรม </a></li>
          <li class="active"><a href="<?php echo site_url('Manager/report'); ?>"><i class="glyphicon glyphicon-print"></i> รายงาน </a></li>


          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata['manager_name']." ".$this->session->userdata['manager_surname'] ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="<?php echo site_url('login/logout'); ?>" onclick="return confirm('ออกจากระบบ ?');">
                    <i class="fa fa-power-off"></i> ออกจากระบบ
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> เพิ่มภาพกิจกรรม </h3>
              </div>
              <div class="panel-body">
                <form id="contact_form" action="<?php echo site_url('Manager/activity_adddata') ?>" data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
                  <div class="col-xs-6 col-md-6" style="margin-top:20px;">

                    <div class="form-group">
                      <label for="file_activity">อัปโหลดรูปภาพ : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="file" class="form-control" name="file_activity" id="file_activity" data-error="กรุณาเลือกรูปภาพให้ถูกต้อง" required>
                      <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit" class="btn btn-success"> ยืนยัน </button>
                    <a href="<?php echo site_url('Manager/activity'); ?>">
                      <button type="button" class="btn btn-danger"> ยกเลิก </button>
                    </a>
                  </div>

                  <!-- right -->

                </form>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->
    </div>

  </body>
  </html>
