
<?php $__env->startSection('main'); ?>
<header>
	<div class="page-header">
        <h2 class="no-margin-bottom">Data Master</h2>
    </div>
</header>
<ul class="breadcrumb">
    <div class="container-fluid">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Home</a></li>
        <li class="breadcrumb-item active"><a href="<?php echo e(route('kategori.index')); ?>">Kategori</a></li>
        <li class="breadcrumb-item active">Tambah Kategori</li>
    </div>
</ul>

<section class="form-horizontal">
	<div class="row">
	<div class="col-lg-12">
         <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
        <?php endif; ?>
		<div class="card">
			<div class="card-header d-flex align-items-center">
                <h3 class="h4">Inline Form</h3>
            </div>
            <div class="card-body">
            	<form class="form-inline" action="<?php echo e(route('kategori.store')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?> 


                 	<div class="form-group">
                    	<label for="inlineFormInput" class="sr-only">Nama Kategori</label>
                    	<div class="col-lg-9">
                    		<input id="inlineFormInput" type="text" name="nama_kategori" autofocus="autofocus" placeholder="Ex. Besi" class="form-control" maxlength="100">	
                    	</div>
                    	
                	</div>
                 	<div class="form-group">
                        <input type="submit" value="Simpan" class="mx-sm-3 btn btn-primary">
                        <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-danger">Batal</a>
                    </div>
                 </form>
            </div>
		</div>
	</div>	
	</div>
	
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>