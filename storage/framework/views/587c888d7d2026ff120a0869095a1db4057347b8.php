<!DOCTYPE html>
<html>
<head>
	<title>TB.Wuni <?php echo $__env->yieldContent('title'); ?></title>
	<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php echo e(asset('template2/css/animate.css')); ?>" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo e(asset('template2/css/style.default.css')); ?>" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo e(asset('template2/css/custom.css')); ?>" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="apple-touch-icon" href="<?php echo e(asset('template2/img/apple-touch-icon.png')); ?>" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('template2/img/apple-touch-icon-57x57.png')); ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('template2/img/apple-touch-icon-72x72.png')); ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('template2/img/apple-touch-icon-76x76.png')); ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('template2/img/apple-touch-icon-114x114.png')); ?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('template2/img/apple-touch-icon-120x120.png')); ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('template2/img/apple-touch-icon-144x144.png')); ?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('template2/img/apple-touch-icon-152x152.png')); ?>" />
    <!-- owl carousel css -->

    <link href="<?php echo e(asset('template2/css/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('template2/css/owl.theme.css')); ?>" rel="stylesheet">
</head>
<body>
	<?php echo $__env->make('homepage.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('homepage.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('main'); ?>
    <?php echo $__env->make('homepage.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
</body>
</html>