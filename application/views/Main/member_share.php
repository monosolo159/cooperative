<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> ยอดปันผล </title>

    <link href="<?php echo base_url('') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <style media="screen">
    .navbar-default .navbar-nav>li>a {
      color: #FFF;
    }
  </style>

  <body style="background:#80e5ff;">

      <!-- LEFT -->
      <div class="col-md-1"></div>


      <div class="col-md-10" style="background:#66e0ff; padding-bottom:50px;">
        <img src="<?php echo base_url('') ?>image/header.jpg" class="img-response" style="width: 100%; height: 300px; z-index: -1;">

        <nav class="navbar navbar-default" style="border-radius:0px; background:#33d6ff;">
          <div class="container-fluid">
            <ul class="nav navbar-nav">
              <li style="padding-right:10px;"><a href="<?php echo site_url('index'); ?>"><span class="glyphicon glyphicon-home"> </span> หน้าหลัก</a></li>
              <li style="padding-right:10px;"><a href="<?php echo site_url('history'); ?>"><span class="glyphicon glyphicon-education"> </span> ประวัติโรงเรียน </a></li>
              <li style="padding-right:10px;"><a href="<?php echo site_url('authorities'); ?>"><span class="glyphicon glyphicon-user"> </span> เจ้าหน้าที่ </a></li>
              <!-- <li style="padding-right:10px;"><a href="<?php echo site_url('news'); ?>"><span class="glyphicon glyphicon-bullhorn"> </span> ข่าวประชาสัมพันธ์ </a></li> -->
              <li style="padding-right:10px;"><a href="<?php echo site_url('activity'); ?>"><span class="glyphicon glyphicon-picture"> </span> ภาพกิจกรรม </a></li>
              <li style="padding-right:10px;"><a href="<?php echo site_url('product'); ?>"><span class="glyphicon glyphicon-shopping-cart"> </span> สินค้า </a></li>
            </ul>
          </div>
        </nav>

        <marquee><span style="color:#000; font-size:16px;"><b>ยินดีต้อนรับเข้าสู่เว็บไซต์ สหกรณ์ร้านค้าโรงเรียนราชประชานุเคราะห์ 53 จังหวัดสกลนคร </b></span></marquee>

          <div class="row">
            <!-- LEFT -->
            <div class="col-sm-2 col-md-2">
              <div class="thumbnail" style="border-radius:0px;">
                <img src="<?php echo base_url('') ?>image/director.jpg" class="img-response">
                <div class="caption" style="text-align:center;">
                  <h6><b> นางสาวทัศนีย์ สิงหวงค์ </b></h6>
                  <p><h6> ผู้อำนวยการสถานศึกษา </h6></p>

                </div>
              </div>
            </div>

            <!-- Content -->
            <div class="col-sm-8 col-md-8">
              <div class="panel panel-info" style="border-radius:0px;">
                <div class="panel-heading" style="text-align:center; border-radius:0px; font-size:20px;"> ยอดปันผล </div>
                <div class="panel-body">
                  <div class="col-lg-6"></div>

                </div>
                <div class="panel-body" style="font-size:16px; color:#4d88ff; min-height:500px;">

                  <!-- menu product -->
                  <div class="col-xs-6 col-md-6">

                    <div class="form-group">
                      <label for="surname_member">จำนวนหุ้นในระบบ : </label>
                      <input type="text" class="form-control"  data-error="จำนวนหุ้นในระบบ" value="<?php echo $member[0]['member_share'] ?>" required disabled>
                      <div class="help-block with-errors"></div>
                    </div>
                    <?php $setting_web = $this->db->get('setting_web')->result_array(); ?>
                    <?php $sum_sell_member = $this->db->select('member_id,member_share,(SELECT SUM(product_qty*product_sell_price) FROM product_sell WHERE product_sell.member_id = member.member_id) AS member_share_all')->where('member_id',$this->session->userdata['member_id'])->get('member')->result_array(); ?>

                    <div class="form-group">
                      <label for="name_member">เงินปันผลปัจจุบัน : </label>
                      <input type="text" class="form-control" name="setting_web_per_share" data-error="ร้อยละปันผล" required value="<?php
                        foreach ($sum_sell_member as $key => $value) {
                          if($sum_sell_member[$key]['member_id']==$this->session->userdata['member_id']){
                            echo ($setting_web[0]['setting_web_per_share']*$value['member_share']*$value['member_share_all']);
                          }
                        }
                       ?>" disabled>
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

            <!-- Right -->
            <div class="col-sm-2 col-md-2">
              <?php if (empty($this->session->userdata['member_id'])): ?>
                <div class="panel panel-primary" style="border-radius:0px;">
                  <div class="panel-heading" style="text-align:center; border-radius:0px; font-size:16px;"> เข้าสู่ระบบ </div>
                  <div class="panel-body">
                    <form action="<?php echo site_url('login')?>" method="post">
                      <div class="form-group">
                        <label for="username"><span class="glyphicon glyphicon-user"> </span> ชื่อผู้ใช้งาน :</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                      </div>
                      <div class="form-group">
                        <label for="password"><span class="glyphicon glyphicon-lock"> </span> รหัสผ่าน :</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                      </div>
                      <button type="submit" class="btn btn-success"> เข้าสู่ระบบ </button>
                    </form>
                  </div>
                </div>
              <?php else: ?>
                <div class="panel panel-primary" style="border-radius:0px;">
                  <div class="panel-heading" style="text-align:center; border-radius:0px; font-size:16px;"> ข้อมูลสมาชิก </div>
                  <div class="panel-body">
                    <div class="form-group">
                      <img src="<?php echo base_url('image/member/'.$this->session->userdata['member_image']) ?>" alt="" width="100%">
                    </div>
                      <div class="form-group">
                        <label for="username"><span class="glyphicon glyphicon-user"> </span> <?php echo $this->session->userdata['member_name'].' '.$this->session->userdata['member_surname'] ?></label>
                      </div>
                      <div class="form-group">
                        <a href="<?php echo site_url('member_share') ?>" class="btn btn-info" style="width:100%">ยอดปันผล</a>
                        <a href="<?php echo site_url('member_history_buy') ?>" class="btn btn-info" style="width:100%">ประวัติการซื่อสินค้า</a>
                        <a href="<?php echo site_url('login/logout') ?>" class="btn btn-danger" style="width:100%">ออกจากระบบ</a>
                      </div>


                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>




      </div>

      <!-- Right -->
      <div class="col-md-1"></div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('') ?>bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>