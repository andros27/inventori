<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TB.Wuni</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo e(asset('template/css/bootstrap.min.css')); ?>">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo e(asset('template/css/style.default.css')); ?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo e(asset('template/css/custom.css')); ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo e(asset('img/Logo.jpg')); ?>">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('template/css/font-awesome.min.css')); ?>">
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- DatatTables -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('DataTables/css/dataTables.bootstrap4.css')); ?>">
  </head>
  <body>
      <?php echo $__env->make('admin.header.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('admin.sidebar.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="content-inner">
      <?php echo $__env->yieldContent('main'); ?>
      </div>
  <?php echo $__env->yieldContent('script'); ?>

      <!-- Javascript files-->
    <script type="text/javascript" src="<?php echo e(asset('dataTables/js/jquery.dataTables.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('dataTables/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/jquery.cookie.js')); ?>"> </script>
    <script src="<?php echo e(asset('template/js/jquery.validate.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="<?php echo e(asset('template/js/charts-home.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/front.js')); ?>"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  
    
  </body>
