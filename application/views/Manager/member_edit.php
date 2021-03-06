
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> แก้ไขข้อมูลสมาชิก </title>

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
        <a class="navbar-brand" href="<?php echo site_url('Manager'); ?>"> Manager </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="<?php echo site_url('Manager'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> สินค้า </a></li>
          <li><a href="<?php echo site_url('Manager/order'); ?>"><i class="glyphicon glyphicon-list-alt"></i> รายการสั่งซื้อสินค้า </a></li>
          <li><a href="<?php echo site_url('Manager/share'); ?>"><i class="glyphicon glyphicon-stats"></i> หุ้น </a></li>
          <li class="active"><a href="<?php echo site_url('Manager/member'); ?>"><i class="glyphicon glyphicon-user"></i> สมาชิก </a></li>
          <li><a href="<?php echo site_url('Manager/activity'); ?>"><i class="glyphicon glyphicon-picture"></i> ภาพกิจกรรม </a></li>
          <li><a href="<?php echo site_url('Manager/report'); ?>"><i class="glyphicon glyphicon-print"></i> รายงาน </a></li>
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
              <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> แก้ไขข้อมูล </h3>
            </div>
            <div class="panel-body">
              <form id="contact_form" action="<?php echo site_url('Manager/member_editdata') ?>" data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
                <div class="col-xs-6 col-md-6" style="margin-top:20px;">

                  <div class="form-group">
                    <label for="name_member">ชื่อ : <span style="color:red; font-size:20px;">*</span> </label>
                    <input type="text" class="form-control" name="name_member" id="name_member" data-error="กรุณาระบุชื่อให้ถูกต้อง" required value="<?php echo $member[0]['member_name'] ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="surname_member"> นามสกุล : <span style="color:red; font-size:20px;">*</span> </label>
                    <input type="text" class="form-control" name="surname_member" id="surname_member" data-error="กรุณาระบนามสกุลให้ถูกต้อง" required value="<?php echo $member[0]['member_surname'] ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="gender_member">ระบุเพศ (เลือกเพศ) : <span style="color:red; font-size:20px;">*</span> </label>
                    <select class="form-control" name="gender_member" id="gender_member" data-error="กรุณาระบุเพศให้ถูกต้อง" required>
                      <option></option>
                      <option <?php if ($member[0]['member_gender'] == 'ผู้หญิง') { echo "selected"; } ?> value="ผู้หญิง">ผู้หญิง</option>
                      <option <?php if ($member[0]['member_gender'] == 'ผู้ชาย') { echo "selected"; } ?> value="ผู้ชาย">ผู้ชาย</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="birthday_member">วันเกิด : <span style="color:red; font-size:20px;">*</span> </label>
                    <input type="date" class="form-control" name="birthday_member" id="birthday_member" data-error="กรุณาระบุวันเกิดให้ถูกต้อง" required value="<?php echo $member[0]['member_birthday'] ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="tel_member">เบอร์โทร : <span style="color:red; font-size:20px;">*</span> </label>
                    <input type="text" class="form-control" name="tel_member" id="tel_member" data-error="กรุณาระบุเบอร์โทรให้ถูกต้อง" required maxlength="10" value="<?php echo $member[0]['member_tel'] ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="address_member">ที่อยู่ : <span style="color:red; font-size:20px;">*</span> </label>
                    <textarea class="form-control" name="address_member" id="address_member" rows="5" data-error="กรุณาระบุที่อยู่ให้ถูกต้อง" required><?php echo $member[0]['member_address'] ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>

                  <button type="submit" class="btn btn-success"> ยืนยัน </button>
                  <a href="<?php echo site_url('Manager/member'); ?>">
                    <button type="button" class="btn btn-danger"> ยกเลิก </button>
                  </a>
                </div>

                <!-- right -->
                <div class="col-xs-6 col-md-6" style="margin-top:20px;">
                  <div class="form-group">
                    <label for="idcard_member">เลขบัตรประจำตัวประชาชน : <span style="color:red; font-size:20px;">*</span> </label>
                    <input type="text" class="form-control" name="idcard_member" id="idcard_member" maxlength="13" data-error="กรุณาระบุเลขบัตรประจำตัวประชาชนให้ถูกต้อง" required value="<?php echo $member[0]['member_idcard'] ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="email_member">อีเมล : <span style="color:red; font-size:20px;">*</span> </label>
                    <input type="email" class="form-control" name="email_member" id="email_member" data-error="กรุณาระบุอีเมลให้ถูกต้อง" required value="<?php echo $member[0]['member_email'] ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="user_member">ชื่อผู้ใช้งาน : <span style="color:red; font-size:20px;">*</span> </label>
                    <input type="text" class="form-control" name="user_member" id="user_member" data-error="กรุณาระบุชื่อผู้ใช้งานให้ถูกต้อง" required value="<?php echo $member[0]['member_user'] ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="password_member">รหัสผ่าน : <span style="color:red; font-size:20px;"> &nbsp;</span> </label>
                    <input type="password" class="form-control" name="password_member" id="password_member">
                    <input type="hidden" class="form-control" name="id_member" id="id_member" value="<?php echo $member[0]['member_id'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="file_member">อัปโหลดรูปภาพ : <span style="color:red; font-size:20px;"> &nbsp;</span> </label>
                    <input type="file" class="form-control" name="file_member" id="file_member" data-error="กรุณาเลือกรูปภาพให้ถูกต้อง">
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
