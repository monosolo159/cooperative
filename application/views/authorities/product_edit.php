
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> แก้ไขสินค้า </title>

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
          <li class="active"><a href="<?php echo site_url('officer'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> สินค้า </a></li>
          <!-- <li><a href="<?php echo site_url('officer/member'); ?>"><i class="glyphicon glyphicon-list-alt"></i> รายการสั่งซื้อสินค้า </a></li> -->
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
                <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> แก้ไขสินค้า </h3>
              </div>
              <div class="panel-body">
                <form id="contact_form" action="<?php echo site_url('officer/product_editdata') ?>" data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
                  <div class="col-xs-6 col-md-6" style="margin-top:20px;">

                    <div class="form-group">
                      <label for="name_product">ชื่อสินค้า : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="name_product" id="name_product" data-error="กรุณาระบุชื่อสินค้าให้ถูกต้อง" required value="<?php echo $product[0]['product_name'] ?>">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="price_product"> ราคา : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="price_product" id="price_product" data-error="กรุณาระบุราคาให้ถูกต้อง" required value="<?php echo $product[0]['product_price'] ?>">
                      <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit" class="btn btn-success"> ยืนยัน </button>
                    <a href="<?php echo site_url('officer'); ?>">
                      <button type="button" class="btn btn-danger"> ยกเลิก </button>
                    </a>
                  </div>

                  <!-- right -->
                  <div class="col-xs-6 col-md-6" style="margin-top:20px;">
                    <div class="form-group">
                      <label for="balance_product"> จำนวน :  <span style="color:red; font-size:20px;">*</span>  </label>
                      <input type="text" class="form-control" name="balance_product" id="balance_product" maxlength="13" data-error="กรุณาระบุจำนวนให้ถูกต้อง" required value="<?php echo $product[0]['product_balance'] ?>">
                      <input type="hidden" name="id_product" value="<?php echo $product[0]['product_id'] ?>">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="file_product">อัปโหลดรูปภาพ : <span style="color:red; font-size:20px;"> &nbsp;</span> </label>
                      <input type="file" class="form-control" name="file_product" id="file_product" data-error="กรุณาเลือกรูปภาพให้ถูกต้อง">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
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
