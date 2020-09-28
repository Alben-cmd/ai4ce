<?php $__env->startSection('content'); ?>

<!-- main banner -->
<div class="main-top" id="home">
    <!-- header -->
    <?php echo $__env->make('includes.header-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- //header -->

    <!-- banner -->

    <!-- //banner -->
</div>
<!-- //main banner -->

<!-- team -->
<div class="banner_w3lspvt-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('welcome')); ?>" class="font-weight-bold">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Product Pitching</li>
    </ol>
</div>
<section class="team py-5" id="team">
    <div class="container py-xl-5 py-lg-3">
    <div class="bott-w3ls mr-xl-5">
                    <h3 class="title-w3 text-bl mb-3 font-weight-bold">Product Pitching</h3>
                </div>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
        <div class="row ab-info second pt-lg-4">
            
            <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <a href="<?php echo e(asset('product_pitching/01.png')); ?>">
                    <img src="<?php echo e(asset('product_pitching/01.png')); ?>" alt="news image" height="500" width="500" class="img-fluid">
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <a href="<?php echo e(asset('product_pitching/02.png')); ?>">
                    <img src="<?php echo e(asset('product_pitching/02.png')); ?>" alt="news image" height="500" width="500" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <a href="<?php echo e(asset('product_pitching/03.png')); ?>">
                    <img src="<?php echo e(asset('product_pitching/03.png')); ?>" alt="news image" height="500" width="500" class="img-fluid">
                    </a>
                </div>
            </div>


        </div>

        <div class="row ab-info second pt-lg-4">
            <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <a href="<?php echo e(asset('product_pitching/04.png')); ?>">
                    <img src="<?php echo e(asset('product_pitching/04.png')); ?>" alt="news image" height="500" width="500" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <a href="<?php echo e(asset('product_pitching/05.png')); ?>">
                    <img src="<?php echo e(asset('product_pitching/05.png')); ?>" alt="news image" height="500" width="500" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <a href="<?php echo e(asset('product_pitching/06.png')); ?>">
                    <img src="<?php echo e(asset('product_pitching/06.png')); ?>" alt="news image" height="500" width="500" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="row ab-info second pt-lg-4">
            <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <a href="<?php echo e(asset('product_pitching/07.png')); ?>">
                    <img src="<?php echo e(asset('product_pitching/07.png')); ?>" alt="news image" height="500" width="500" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 Thumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <a href="<?php echo e(asset('product_pitching/08.png')); ?>">
                    <img src="<?php echo e(asset('product_pitching/08.png')); ?>" alt="news image" height="550" width="500" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- //team -->



<script>
    document.getElementById('vid').play();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>