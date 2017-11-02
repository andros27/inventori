

<?php $__env->startSection('title', 'Hubungi Kami'); ?>
<?php $__env->startSection('main'); ?>
<?php echo csrf_field(); ?>

<div class="container">
  <form action="hubungiKami" method="post">
    <div class="form-group">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="exampleInputName" placeholder="Nama Pengirim">
    </div>
    <div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Pesan" rows="8" style="resize: none;"></textarea>
    </div>
    <button type="submit" class="btn btn-raised btn-primary">Kirim</button>
  </form>  
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('public', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>