<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 contact">
                <p class="hidden-sm hidden-xs">Contact us on +62 858 7742 8338 or amedia92@gmail.com.</p>
                <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </p>
            </div>
            <div class="col-xs-7">
                <div class="social">
                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>

                <div class="login">
                    <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                    <a href="#"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                </div>

            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('homepage.modalLogin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>