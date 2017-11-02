<?php $__env->startSection('main'); ?>
<header class="page-header">
     <div class="container-fluid">
        <h2 class="no-margin-bottom"><?php echo e($profile->name); ?>'s Profile</h2>
    </div>
</header>
<ul class="breadcrumb">
    <div class="container-fluid">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Home</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </div>
</ul>
<section class="form-horizontal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php if(session('alert')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert"">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo e(session('alert')); ?>

                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="<?php echo e(route('profile.update', Auth::user()->id)); ?>" method="POST">
                            <?php echo e(method_field('PATCH')); ?> <?php echo e(csrf_field()); ?>

                        <div class="line"></div>
                            <div class="form-group row <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                <label class="col-sm-3 form-control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo e($profile->name); ?>" name="name" placeholder="Name" class="form-control">
                                    <span class="text-danger"><strong><?php echo e($errors->first('name')); ?></strong></span>
                                </div>
                            </div>

                             <div class="line"></div>
                            <div class="form-group row <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
                                <label class="col-sm-3 form-control-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo e($profile->username); ?>" name="username" placeholder="Username" class="form-control">
                                    <span class="text-danger"><strong><?php echo e($errors->first('username')); ?></strong></span>
                                </div>
                            </div>

                             <div class="line"></div>
                            <div class="form-group row <?php echo e($errors->has('current_password') ? 'has-error' : ''); ?>">
                                <label class="col-sm-3 form-control-label">Password Lama</label>
                                <div class="col-sm-9">
                                    <input type="password" name="current_password" placeholder="Password Lama" class="form-control">
                                    <span class="text-danger"><strong><?php echo e($errors->first('current_password')); ?></strong></span>
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group row <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                                <label class="col-sm-3 form-control-label">Password Baru</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" placeholder="Password Baru" class="form-control">
                                    <span class="text-danger"><strong><?php echo e($errors->first('password')); ?></strong></span>
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group row <?php echo e($errors->has('confirm_password') ? 'has-error' : ''); ?>">
                                <label class="col-sm-3 form-control-label">Konfirmasi Password Baru</label>
                                <div class="col-sm-9">
                                    <input type="password" name="confirm_password" placeholder="Konfirmasi password Baru" class="form-control">
                                </div>
                            </div>

                             <div class="line"></div>
                            <div class="form-group row <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                                <label class="col-sm-3 form-control-label">E-mail</label>
                                <div class="col-sm-9">
                                    <input type="email" value="<?php echo e($profile->email); ?>" name="email" placeholder="E-mail" class="form-control">
                                    <span class="text-danger"><strong><?php echo e($errors->first('email')); ?></strong></span>
                                </div>
                            </div>

                            <div class="line"></div>
                            <div class="form-group row <?php echo e($errors->has('noTelp') ? 'has-error' : ''); ?>">
                                <label class="col-sm-3 form-control-label">No. Telp</label>
                                <div class="col-sm-9">
                                    <input type="number" value="<?php echo e($profile->no_telp); ?>" name="email" placeholder="No Telp" class="form-control">
                                    <span class="text-danger"><strong><?php echo e($errors->first('noTelp')); ?></strong></span>
                                </div>
                            </div>

                        <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Photo / Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="avatar">
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