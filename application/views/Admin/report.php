
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> รายงาน </title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>css/local.css" />

  <script type="text/javascript" src="<?php echo base_url(''); ?>js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(''); ?>bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(''); ?>canvasjs/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(''); ?>canvasjs/jquery.canvasjs.min.js"></script>

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
          <li><a href="<?php echo site_url('admin'); ?>"><i class="glyphicon glyphicon-user"></i> ผู้ดูแลระบบ </a></li>
          <li><a href="<?php echo site_url('admin/authorities'); ?>"><i class="glyphicon glyphicon-user"></i> เจ้าหน้าที่ </a></li>
          <li><a href="<?php echo site_url('admin/member'); ?>"><i class="glyphicon glyphicon-user"></i> สมาชิก </a></li>
          <li><a href="<?php echo site_url('admin/product'); ?>"><i class="glyphicon glyphicon-shopping-cart"></i> สินค้า </a></li>
          <li><a href="<?php echo site_url('admin/share'); ?>"><i class="glyphicon glyphicon-stats"></i> หุ้น </a></li>
          <li class="active"><a href="<?php echo site_url('admin/report'); ?>"><i class="glyphicon glyphicon-print"></i> รายงาน </a></li>
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
              <h3 class="panel-title"><i class="glyphicon glyphicon-print"></i> รายงาน </h3>
            </div>
            <div class="panel-body">

              <script>

              window.onload = function () {
                var options = {
                  animationEnabled: true,
                  title: {
                    text: "รายได้"
                  },
                  axisY: {
                    title: "จำนวนเงิน",
                    suffix: " บาท",
                    includeZero: false
                  },
                  axisX: {
                    title: "เดือน"
                  },
                  data: [{
                    type: "column",
                    yValueFormatString: "#,##0.0#"%"",
                    dataPoints: [
                      { label: "มกราคม", y: <?php if($month_01) {echo ($month_01[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "กุมภาพันธ์", y: <?php if($month_02) {echo ($month_02[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "มีนาคม", y: <?php if($month_03) {echo ($month_03[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "เมษายน", y: <?php if($month_04) {echo ($month_04[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "พฤษภาคม", y: <?php if($month_05) {echo ($month_05[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "มิถุนายน ", y: <?php if($month_06) {echo ($month_06[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "กรกฎาคม", y: <?php if($month_07) {echo ($month_07[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "สิงหาคม", y: <?php if($month_08) {echo ($month_08[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "กันยายน", y: <?php if($month_09) {echo ($month_09[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "ตุลาคม ", y: <?php if($month_10) {echo ($month_10[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "พฤศจิกายน", y: <?php if($month_11) {echo ($month_11[0]['member_sell_all']);}else{echo '0';} ?> },
                      { label: "ธันวาคม", y: <?php if($month_12) {echo ($month_12[0]['member_sell_all']);}else{echo '0';} ?> }
                    ]
                  }]
                };
                $("#chartContainer").CanvasJSChart(options);




                //Better to construct options first and then pass it as a parameter
                var options2 = {
                  animationEnabled: true,
                  title: {
                    text: "สินค้าขายดี",
                    fontColor: "Peru"
                  },
                  axisY: {
                    tickThickness: 0,
                    lineThickness: 0,
                    valueFormatString: " ",
                    gridThickness: 0
                  },
                  axisX: {
                    tickThickness: 0,
                    lineThickness: 0,
                    labelFontSize: 18,
                    labelFontColor: "Peru"
                  },
                  data: [{
                    indexLabelFontSize: 26,
                    toolTipContent: "<span style=\"color:#62C9C3\">{indexLabel}:</span> <span style=\"color:#CD853F\"><strong>{y}</strong></span>",
                    indexLabelPlacement: "inside",
                    indexLabelFontColor: "white",
                    indexLabelFontWeight: 600,
                    indexLabelFontFamily: "Verdana",
                    color: "#62C9C3",
                    type: "bar",
                    dataPoints: [
                      <?php foreach ($product as $product_key => $product_value): ?>
                      { y: <?php echo $product_value['product_sale']; ?>, label: "<?php echo $product_value['product_sale']; ?>", indexLabel: "<?php echo $product_value['product_name']; ?>" },
                      <?php endforeach; ?>
                    ]
                  }]
                };

                $("#chartContainer2").CanvasJSChart(options2);
              }
              </script>

              <div id="chartContainer" style="height: 370px; width: 100%;"></div>
              <hr>
              <div id="chartContainer2" style="height: 370px; width: 100%;"></div>



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
