<center><div class="row">
  <div class="col-4">
    <img class="rounded-circle" src="<?php echo e(asset('img/rivet.jpg')); ?>" height="140" width="140" alt="Card image cap">
    <h2>Paku Rivet</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p>
      <button type="button" class="btn btn-raised btn-info" data-toggle="modal" data-target="#exampleModal">
        Detail
      </button>
    </p>
  </div>
  <div class="col-4">
    <img class="rounded-circle" src="<?php echo e(asset('img/impala.jpg')); ?>" height="140" width="140" alt="Card image cap">
    <h2>Thinner Impala</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p>
      <button type="button" class="btn btn-raised btn-info" data-toggle="modal" data-target="#exampleModal">
        Detail
      </button>
    </p>
  </div>
  <div class="col-4">
    <img class="rounded-circle" src="<?php echo e(asset('img/cat.jpg')); ?>" height="140" width="140" alt="Card image cap">
    <h2>Cat</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p>
      <button type="button" class="btn btn-raised btn-info" data-toggle="modal" data-target="#exampleModal">
        Detail
      </button>
    </p>
  </div>
</div></center>
<?php echo $__env->make('coba/modal_detail_produk', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>