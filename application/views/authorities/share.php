
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> หุ้น </title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>css/local.css" />

  <script type="text/javascript" src="<?php echo base_url(''); ?>js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(''); ?>bootstrap/js/bootstrap.min.js"></script>
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
        <a class="navbar-brand" href="<?php echo site_url('admin'); ?>"> Officer </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="active"><a href="<?php echo site_url('officer'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> สินค้า </a></li>
          <li><a href="<?php echo site_url('officer/order'); ?>"><i class="glyphicon glyphicon-list-alt"></i> รายการสั่งซื้อสินค้า </a></li>
          <!-- <li><a href="<?php echo site_url('officer/sell'); ?>"><i class="glyphicon glyphicon-bitcoin"></i> ขายสินค้า </a></li> -->
          <!-- <li><a href="<?php echo site_url('officer/share'); ?>"><i class="glyphicon glyphicon-piggy-bank"></i> ปันผล </a></li> -->
          <li class="active"><a href="<?php echo site_url('officer/share'); ?>"><i class="glyphicon glyphicon-stats"></i> หุ้น </a></li>

          <li><a href="<?php echo site_url('officer/member'); ?>"><i class="glyphicon glyphicon-user"></i> สมาชิก </a></li>
          <li><a href="<?php echo site_url('officer/activity'); ?>"><i class="glyphicon glyphicon-picture"></i> ภาพกิจกรรม </a></li>


          <li><a href="<?php echo site_url('officer/report'); ?>"><i class="glyphicon glyphicon-print"></i> รายงาน </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata['authorities_name']." ".$this->session->userdata['authorities_surname'] ?><b class="caret"></b></a>
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
                <h3 class="panel-title"><i class="glyphicon glyphicon-stats"></i> หุ้น </h3>
              </div>
              <div class="panel-body">


                <div class="col-xs-12 col-md-12">


                  <div class="col-xs-6 col-md-6">
                    <?php echo form_open('officer/share_update'); ?>
                    <div class="form-group">
                      <label for="name_member">การปันผล : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="setting_web_per_share" data-error="ร้อยละปันผล" required value="<?php echo $setting_web[0]['setting_web_per_share'] ?>">
                      <div class="help-block with-errors"></div>
                    </div>
                    <input type="hidden" name="setting_web_id" value="<?php echo $setting_web[0]['setting_web_id'] ?>">
                    <button type="submit" class="btn btn-success"> บันทึก </button>
                    <?php echo form_close(); ?>
                    <div class="form-group">
                      <label for="surname_member">จำนวนหุ้นในระบบ : </label>
                      <input type="text" class="form-control"  data-error="จำนวนหุ้นในระบบ" value="<?php echo $setting_web[0]['member_share_all'] ?>" required disabled>
                      <div class="help-block with-errors"></div>
                    </div>


                    <!-- <div class="form-group">
                      <label for="tel_member">จำนวนเงินปันผลจากกำไร : </label>
                      <input type="text" class="form-control" data-error="กรุณาระบุเบอร์โทรให้ถูกต้อง" required disabled>
                      <div class="help-block with-errors"></div>
                    </div> -->


                  </div>

                </div>

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
