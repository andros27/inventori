<nav class="navbar navbar-light" style="background-color: #FFF;">
	<a href="<?php echo e(url('/')); ?>" class="navbar-brand">
		<img src="<?php echo e(asset('img/logo.jpg')); ?>" width="40" height="40" alt="TB.WUNI" class="d-inline-block align-top">
		<font size="5">TB.Wuni</font>
	</a>

	<ul class="nav nav-pills float-right">
		<li class="nav-item"><a class="nav-link" href="">Produk</a></li>
		<li class="nav-item"><a class="nav-link" href="">Profile TB. Wuni</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo e(url('hubungiKami')); ?>">Hubungi Kami</a></li> 
		<form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form>
	</ul>

</nav>
