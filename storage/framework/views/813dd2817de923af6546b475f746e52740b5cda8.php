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
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Toko Besi Wuni</h1>
                  </div>
                  <p>Optimism is the faith that leads to achievement. Nothing can be done without hope and confidence. - Helen Keller</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                      <input id="username" type="text" name="username" value="<?php echo e(old('username')); ?>" required autofocus class="input-material">
                      <?php if($errors->has('username')): ?>
                        <span class="help-block">
                          <strong><?php echo e($errors->first('username')); ?></strong>
                        </span>
                      <?php endif; ?>
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                      <input id="password" name="password" required type="password" class="input-material">
                      <?php if($errors->has('password')): ?>
                        <span class="help-block">
                          <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                      <?php endif; ?>
                      <label for="login-password" class="label-material">Password</label>
                    </div><button type="submit" class="btn btn-primary">Login</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
      <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
</html>