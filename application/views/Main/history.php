<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> ประวัติโรงเรียน </title>

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
              <li style="padding-right:10px;" class="active"><a href="<?php echo site_url('history'); ?>"><span class="glyphicon glyphicon-education"> </span> ประวัติโรงเรียน </a></li>
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
                <div class="text-black" style="text-align:center; border-radius:0px; font-size:20px;"> ประวัติโรงเรียน </div>
                <div class="panel-body" style="font-size:16px; color:#000000; min-height:500px;">
                  <span style="padding-left:40px;">
                  โรงเรียนราชประชานุเคราะห์ 53 (เดิมชื่อโรงเรียนศึกษาสงเคราะห์สกลนคร) ได้รับพระมหากรุณาธิคุณจากพระบาทสมเด็จพระเจ้าอยู่หัวฯ
                  รับเข้ามูลนิธิราชประชานุเคราะห์ในพระบรมราชูปถัมภ์ จึงเปลี่ยนชื่อในวันที่ 30 พฤษภาคม 2556
                  โรงเรียนตั้งอยู่เลขที่ 78 หมู่ 12 ต.นาหัวบ่อ อ.พรรณานิคม จ.สกลนคร สังกัดสำนักบริหารงานการศึกษาพิเศษ
                  สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน ก่อตั้งเมื่อ พ.ศ.2512 มีพื้นที่ 728 ไร่ 41 ตารางวา สืบเนื่องจากปี พ.ศ.2512
                  กระทรวงศึกษาธิการ ได้อนุมัติให้จัดตั้งโรงเรียนศึกษาสงเคราะห์ขึ้นในเขตการศึกษา
                  เพื่อให้บริการการศึกษาแก่นักเรียนด้อยโอกาส ซึ่งมีจังหวัด ขอนแก่น เลย หนองคาย และสกลนคร
                  เป็นโรงเรียนประเภทสหศึกษา อยู่ประจำ จัดการศึกษาแบบให้เปล่าไม่เก็บค่าใช้จ่าย รับนักเรียนด้อยโอกาส 10 ประเภท
                  </span>

                </div>
              </div>

            </div>

            <!-- Right -->
            <div class="col-sm-2 col-md-2">
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
