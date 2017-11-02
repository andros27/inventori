<?php $__env->startSection('main'); ?>
<header class="page-header">
     <div class="container-fluid">
        <h2 class="no-margin-bottom"><?php echo e(Auth::user()->name); ?>'s Password</h2>
    </div>
</header>
<ul class="breadcrumb">
    <div class="container-fluid">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Home</a></li>
      	<li class="breadcrumb-item">Profile</li>
        <li class="breadcrumb-item active">Change Password</li>
    </div>
</ul>
<section class="form-horizontal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="" method="POST">
                            <?php echo e(method_field('PATCH')); ?> <?php echo e(csrf_field()); ?>

                        <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo e(Auth::user()->name); ?>" name="name" disabled="disabled" placeholder="Name" class="form-control">
                                </div>
                            </div>

                             <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Password Lama</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" placeholder="Password Lama" class="form-control">
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Password Baru</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" placeholder="Password Baru" class="form-control">
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Konfirmasi Password Baru</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" placeholder="Konfirmasi password Baru" class="form-control">
                                </div>
                            </div>

                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?php echo e(url('/admin')); ?>" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>