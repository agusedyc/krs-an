<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KRS-An |
        <?php echo $title;?>
    </title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/faviconUSM.png');?>" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/theme/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/theme/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/theme/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url();?>assets/theme/gentelella/build/css/animate.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <!-- <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"> -->
    <!-- jVectorMap -->
    <!-- <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/> -->
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/theme/gentelella/build/css/custom.min.css" rel="stylesheet">
    <!-- end: Css -->
</head>

<body class="nav-md">
    <div id="a" class="container body">
        <div id="b" class="main_container">
          <?= $_sidebar;?>
          <?= $_navbar;?>
          <?= $_content;?>
          <?= $_footer;?>
        <!-- start: Javascript -->
        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/theme/gentelella/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>assets/theme/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
        <!-- NProgress -->
        <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
        <!-- Chart.js -->
        <!-- <script src="../vendors/Chart.js/dist/Chart.min.js"></script> -->
        <!-- gauge.js -->
        <!-- <script src="../vendors/gauge.js/dist/gauge.min.js"></script> -->
        <!-- bootstrap-progressbar -->
        <!-- <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> -->
        <!-- iCheck -->
        <script src="<?php echo base_url();?>assets/theme/gentelella/vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="<?php echo base_url();?>assets/theme/gentelella/vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/vendors/Flot/jquery.flot.js"></script> -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/vendors/Flot/jquery.flot.pie.js"></script> -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/vendors/Flot/jquery.flot.time.js"></script> -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/vendors/Flot/jquery.flot.stack.js"></script> -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/vendors/Flot/jquery.flot.resize.js"></script> -->
        <!-- Flot plugins -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/production/js/flot/jquery.flot.orderBars.js"></script> -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/production/js/flot/date.js"></script> -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/production/js/flot/jquery.flot.spline.js"></script> -->
        <!-- <script src="<?= base_url();?>assets/theme/gentelella/production/js/flot/curvedLines.js"></script> -->
        <!-- jVectorMap -->
        <!-- <script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script> -->
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo base_url();?>assets/theme/gentelella/production/js/moment/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/theme/gentelella/production/js/datepicker/daterangepicker.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url();?>assets/theme/gentelella/build/js/custom.min.js"></script>
    </body>
</html>
