
<?php $__env->startSection('main'); ?>
<header>
	<div class="page-header">
        <h2 class="no-margin-bottom">Data Master</h2>
    </div>
</header>
<ul class="breadcrumb">
    <div class="container-fluid">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Home</a></li>
        <li class="breadcrumb-item active">Pegawai</li>
    </div>
</ul>

<selection class="table">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="card">
				<div class="card-header d-flex align-items-center">
                    <h3 class="h4">Daftar Pegawai</h3>
                </div>
                <div class="card-body">
                	<table class="table">
                        <thead>
                        	<tr>
                        		<td></td>
                        		<td></td>
                            <td></td>
                        		<td align="right"><a href="<?php echo e(url('register')); ?>"  class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Tambah</a></td>
                        	</tr>
                          <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <th><?php echo e(++$no); ?></th>
                            <td><?php echo e($lists->name); ?></td>
                            <td><?php echo e($lists->jabatan); ?></td>
                            <td>
                              <form action="<?php echo e(route('profile.destroy', $lists->id)); ?>" method="POST">
                                <a href="<?php echo e(route('profile.edit', $lists->id)); ?>" class="btn btn-outline-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <?php echo e(csrf_field()); ?>

                    
                                <input name="_method" type="hidden" value="DELETE">  
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                              </form>
                              
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                      <?php echo e($pegawai->links()); ?>

                    </div>
                  </div>
                </div>
                </div>
			</div>
		</div>		
	</div>
</selection>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!--<script type="text/javascript">
  var table, save_method;
  $(function()
  {
    //menampilkan dataTable
    table = $('.table').DataTable(
    {
      "processing" : true,
      "serverside" : true,
      "ajax" : "{//!! route('kategori.data') !!}"
      
    });
  }
</script>-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>