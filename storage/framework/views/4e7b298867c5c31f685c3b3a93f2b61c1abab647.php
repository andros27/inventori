
<!-- Mengisi judul -->
<?php $__env->startSection('title','Homepage'); ?>
<!-- konten -->
<?php $__env->startSection('main'); ?>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  		</ol>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img class="d-block w-100" src="<?php echo e(asset('img/1.jpg')); ?>" height="700" alt="First slide">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="<?php echo e(asset('img/1.jpg')); ?>" height="700" alt="Second slide">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="<?php echo e(asset('slider/s1.jpg')); ?>" height="700" alt="Third slide">
    		</div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo e(asset('slider/s1.jpg')); ?>" height="700" alt="Fourth slide">
        </div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		    		
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		
    		
  		</a>
      <hr>
  </div>
  <?php echo $__env->make('coba/display_produk', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>