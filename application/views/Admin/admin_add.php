
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> เพิ่มข้อมูลผู้ดูแลระบบ</title>

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
        <a class="navbar-brand" href="<?php echo site_url('admin'); ?>"> Administrator </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="active"><a href="<?php echo site_url('admin'); ?>"><i class="glyphicon glyphicon-user"></i> ผู้ดูแลระบบ </a></li>
          <li><a href="<?php echo site_url('admin/authorities'); ?>"><i class="glyphicon glyphicon-user"></i> เจ้าหน้าที่ </a></li>
          <li><a href="<?php echo site_url('admin/member'); ?>"><i class="glyphicon glyphicon-user"></i> สมาชิก </a></li>
          <li><a href="<?php echo site_url('admin/product'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> สินค้า </a></li>
          <li><a href="<?php echo site_url('admin/share'); ?>"><i class="glyphicon glyphicon-stats"></i> หุ้น </a></li>
          <li><a href="<?php echo site_url('admin/report'); ?>"><i class="glyphicon glyphicon-print"></i> รายงาน </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata['admin_name']." ".$this->session->userdata['admin_surname'] ?><b class="caret"></b></a>
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
                <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> เพิ่มผู้ดูแลระบบ </h3>
              </div>
              <div class="panel-body">
                <form id="contact_form" action="<?php echo site_url('admin/admin_adddata') ?>" data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
                  <div class="col-xs-6 col-md-6" style="margin-top:20px;">

                    <div class="form-group">
                      <label for="name_admin">ชื่อ : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="name_admin" id="name_admin" data-error="กรุณาระบุชื่อให้ถูกต้อง" required>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="surname_admin"> นามสกุล : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="surname_admin" id="surname_admin" data-error="กรุณาระบนามสกุลให้ถูกต้อง" required>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="gender_admin">ระบุเพศ (เลือกเพศ) : <span style="color:red; font-size:20px;">*</span> </label>
                      <select class="form-control" name="gender_admin" id="gender_admin" data-error="กรุณาระบุเพศให้ถูกต้อง" required>
                        <option></option>
                        <option value="ผู้หญิง">ผู้หญิง</option>
                        <option value="ผู้ชาย">ผู้ชาย</option>
                      </select>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="birthday_admin">วันเกิด : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="date" class="form-control" name="birthday_admin" id="birthday_admin" data-error="กรุณาระบุวันเกิดให้ถูกต้อง" required>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="tel_admin">เบอร์โทร : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="tel_admin" id="tel_admin" data-error="กรุณาระบุเบอร์โทรให้ถูกต้อง" required maxlength="10">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="address_admin">ที่อยู่ : <span style="color:red; font-size:20px;">*</span> </label>
                      <textarea class="form-control" name="address_admin" id="address_admin" rows="5" data-error="กรุณาระบุที่อยู่ให้ถูกต้อง" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit" class="btn btn-success"> ยืนยัน </button>
                    <a href="<?php echo site_url('admin'); ?>">
                      <button type="button" class="btn btn-danger"> ยกเลิก </button>
                    </a>
                  </div>

                  <!-- right -->
                  <div class="col-xs-6 col-md-6" style="margin-top:20px;">
                    <div class="form-group">
                      <label for="idcard_admin">เลขบัตรประจำตัวประชาชน : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="idcard_admin" id="idcard_admin" maxlength="13" data-error="กรุณาระบุเลขบัตรประจำตัวประชาชนให้ถูกต้อง" required>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="email_admin">อีเมล : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="email" class="form-control" name="email_admin" id="email_admin" data-error="กรุณาระบุอีเมลให้ถูกต้อง" required>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="user_admin">ชื่อผู้ใช้งาน : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="text" class="form-control" name="user_admin" id="user_admin" data-error="กรุณาระบุชื่อผู้ใช้งานให้ถูกต้อง" required>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="password_admin">รหัสผ่าน : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="password" class="form-control" name="password_admin" id="password_admin" data-error="กรุณาระบุรหัสผ่านให้ถูกต้อง" required>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="file_admin">อัปโหลดรูปภาพ : <span style="color:red; font-size:20px;">*</span> </label>
                      <input type="file" class="form-control" name="file_admin" id="file_admin" data-error="กรุณาเลือกรูปภาพให้ถูกต้อง" required>
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
