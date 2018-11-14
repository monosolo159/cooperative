
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> สมาชิก </title>

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
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> สมาชิก </h3>
              </div>
              <div class="panel-body">
                <div class="col-xs-6 col-md-6">
                  <a href="<?php echo site_url('Manager/member_add') ?>">
                    <input type="button" class="btn btn-info" name="btn_Add" value="เพิ่มสมาชิก">
                  </a>
                </div>
                <div class="col-xs-2 col-md-2"></div>
                <div class="col-xs-4 col-md-4">
                  <form id="contact_form" action="<?php echo site_url('Manager/member') ?>" method="post">
                    <div class="input-group">
                      <input type="text" class="form-control" name="member_search" placeholder="ป้อนชื่อสมาชิก">
                      <span class="input-group-btn">
                        <button class="btn btn-success" type="submit"> <i class="glyphicon glyphicon-search"></i> ค้นหา </button>
                      </span>
                    </div>
                  </form>
                </div>

                <div class="col-xs-12 col-md-12" style="margin-top:20px;">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="text-align:center;">#</th>
                        <th style="text-align:center;"> รูปภาพ </th>
                        <th style="text-align:center;"> ชื่อ - นามสกุล </th>
                        <th style="text-align:center;"> อีเมล </th>
                        <th style="text-align:center;"> เบอร์โทร </th>
                        <th style="text-align:center;"> จำนวนหุ้น </th>
                        <th style="text-align:center;"> ยอดซื้อ </th>
                        <th style="text-align:center;"> การปันผล </th>
                        <th style="text-align:center;"> จัดการข้อมูล </th>
                      </tr>
                    </thead>
                    <?php $setting_web = $this->db->get('setting_web')->result_array(); ?>
                    <tbody>
                      <?php $i = 1;
                      if( !empty($member) ) {
                         foreach ($member as $member) { ?>

                        <tr>
                          <th scope="row" style="text-align:center; vertical-align:middle;"> <?php echo $i; ?> </th>
                          <td style="width:100px;">
                            <img src="<?php echo base_url('image/member/'); ?>/<?php echo $member->member_image ?>" width="100px">
                          </td>
                          <td style="text-align:center; vertical-align:middle;"> <?php echo $member->member_name; ?> <?php echo $member->member_surname; ?> </td>
                          <td style="text-align:center; vertical-align:middle;"> <?php echo $member->member_email; ?> </td>
                          <td style="text-align:center; vertical-align:middle;"> <?php echo $member->member_tel; ?> </td>
                          <td style="text-align:center; vertical-align:middle;"> <?php echo $member->member_share; ?> </td>
                          <?php $sum_sell_member = $this->db->select('member_id,member_share,(SELECT SUM(product_qty*product_sell_price) FROM product_sell WHERE product_sell.member_id = member.member_id) AS member_share_all')->where('member_id',$member->member_id)->get('member')->result_array(); ?>

                          <td style="text-align:center; vertical-align:middle;">
                            <?php
                              foreach ($sum_sell_member as $key => $value) {
                                if($sum_sell_member[$key]['member_id']==$member->member_id){
                                  echo ($value['member_share_all']);
                                }
                              }
                             ?>
                           </td>
                          <td style="text-align:center; vertical-align:middle;">
                            
                            <?php
                              foreach ($sum_sell_member as $key => $value) {
                                if($sum_sell_member[$key]['member_id']==$member->member_id){
                                  echo ($setting_web[0]['setting_web_per_share']*$value['member_share']*$value['member_share_all']);
                                }
                              }
                             ?>
                          </td>
                          <td style="width:130px; vertical-align:middle;">
                            <a href="<?php echo site_url('Manager/member_edit'); ?>/<?php echo $member->member_id; ?>">
                              <input type="button" class="btn btn-warning" name="btn_edit" value="แก้ไข">
                            </a>
                            <a href="<?php echo site_url('Manager/member_delete'); ?>/<?php echo $member->member_id; ?>" onclick="return confirm('ยืนยันการลบข้อมูลสมาชิกท่านนี้ ?');">
                              <input type="button" class="btn btn-danger" name="btn_delete" value="ลบ">
                            </a>
                          </td>
                        </tr>

                      <?php $i++; ?>
                    <?php }
                  }?>

                    </tbody>
                  </table>
                  <div class="text-right">
                    <p><?php echo $links; ?></p>
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
