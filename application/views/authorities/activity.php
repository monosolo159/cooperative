
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ภาพกิจกรรม </title>

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
        <a class="navbar-brand" href="<?php echo site_url('officer'); ?>"> Officer </a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="<?php echo site_url('officer'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> สินค้า </a></li>
          <li><a href="<?php echo site_url('officer/order'); ?>"><i class="glyphicon glyphicon-list-alt"></i> รายการสั่งซื้อสินค้า </a></li>
          <!-- <li><a href="<?php echo site_url('officer/sell'); ?>"><i class="glyphicon glyphicon-bitcoin"></i> ขายสินค้า </a></li> -->
          <li><a href="<?php echo site_url('officer/share'); ?>"><i class="glyphicon glyphicon-stats"></i> หุ้น </a></li>
          <!-- <li><a href="<?php echo site_url('officer/share'); ?>"><i class="glyphicon glyphicon-piggy-bank"></i> ปันผล </a></li> -->
          <li><a href="<?php echo site_url('officer/member'); ?>"><i class="glyphicon glyphicon-user"></i> สมาชิก </a></li>
          <li class="active"><a href="<?php echo site_url('officer/activity'); ?>"><i class="glyphicon glyphicon-picture"></i> ภาพกิจกรรม </a></li>
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
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> ภาพกิจกรรม </h3>
              </div>
              <div class="panel-body">
                <div class="col-xs-6 col-md-6">
                  <a href="<?php echo site_url('officer/activity_add') ?>">
                    <input type="button" class="btn btn-info" name="btn_Add" value="เพิ่มรูปภาพกิจกรรม">
                  </a>
                </div>

                <div class="col-xs-12 col-md-12" style="margin-top:20px;">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="text-align:center;">#</th>
                        <th style="text-align:center;"> รูปภาพกิจกรรม </th>
                        <th style="text-align:center;"> จัดการรูปภาพ </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      if( !empty($activity) ) {
                         foreach ($activity as $activity) { ?>

                        <tr>
                          <th scope="row" style="text-align:center; vertical-align:middle; width:100px;"> <?php echo $i; ?> </th>
                          <td style="text-align:center;">
                            <img src="<?php echo base_url('image/activity/'); ?>/<?php echo $activity->activity_image; ?>" width="300px">
                          </td>
                          <td style="width:200px; vertical-align:middle; text-align:center;">
                            <a href="<?php echo site_url('officer/activity_delete'); ?>/<?php echo $activity->activity_id; ?>" onclick="return confirm('ยืนยันการลบภาพกิจกรรมนี้ ?');">
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
