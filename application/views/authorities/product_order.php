
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> สั่งซื้อสินค้า </title>

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
        <a class="navbar-brand" href="<?php echo site_url('officer'); ?>"> Officer </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="<?php echo site_url('officer'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> สินค้า </a></li>
          <!-- <li class="active"><a href="<?php echo site_url('officer/order'); ?>"><i class="glyphicon glyphicon-list-alt"></i> รายการสั่งซื้อสินค้า </a></li> -->
          <!-- <li><a href="<?php echo site_url('officer/sell'); ?>"><i class="glyphicon glyphicon-bitcoin"></i> ขายสินค้า </a></li> -->
          <li><a href="<?php echo site_url('officer/share'); ?>"><i class="glyphicon glyphicon-stats"></i> หุ้น </a></li>
          <!-- <li><a href="<?php echo site_url('officer/share'); ?>"><i class="glyphicon glyphicon-piggy-bank"></i> ปันผล </a></li> -->
          <li><a href="<?php echo site_url('officer/member'); ?>"><i class="glyphicon glyphicon-user"></i> สมาชิก </a></li>
          <li><a href="<?php echo site_url('officer/activity'); ?>"><i class="glyphicon glyphicon-picture"></i> ภาพกิจกรรม </a></li>
          <li><a href="<?php echo site_url('officer/report'); ?>"><i class="glyphicon glyphicon-print"></i> รายงาน </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata['authorities_name']." ".$this->session->userdata['authorities_surname'] ?> <b class="caret"></b></a>
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
                <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> สั่งซื้อสินค้า </h3>
              </div>
              <div class="panel-body">
                <form id="contact_form" action="<?php echo site_url('officer/order_adddata') ?>" data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
                  <div class="col-xs-6 col-md-6" style="margin-top:20px;">

                    <div class="form-group">
                      <label for="product_order">จำนวนสินค้าที่ต้องการสั่งซื้อ : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="product_order" id="product_order" data-error="กรุณาระบุจำนวนสินค้าที่ต้องการสั่งซื้อให้ถูกต้อง" required value="<?php echo $product[0]['product_order']; ?>">
                      <input type="hidden" class="form-control" name="product_id" id="product_id" value="<?php echo $product[0]['product_id']; ?>">
                      <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit" class="btn btn-success"> ยืนยัน </button>
                    <a href="<?php echo site_url('officer/order'); ?>">
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
