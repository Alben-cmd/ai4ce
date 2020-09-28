<?php $__env->startSection('content'); ?>

<div class="main-top" id="home">

	<?php echo $__env->make('includes.header-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="banner_w3lspvt-2">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo e(route('welcome')); ?>" class="font-weight-bold">Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo e(route('symposium')); ?>" class="font-weight-bold">Arrival</a></li>
			<li class="breadcrumb-item"><a href=" <?php echo e(route('symposium.dayone')); ?> " class="font-weight-bold">Day 1</a></li>
			<li class="breadcrumb-item">Day 2</li>
			<li class="breadcrumb-item"><a href=" <?php echo e(route('symposium.daythree')); ?> " class="font-weight-bold">Day 3</a></li>
      <li class="breadcrumb-item"><a href="<?php echo e(route('symposium.poster')); ?>" class="font-weight-bold">Posters</a></li>
		</ol>
    <p align="center"><b>Official Opening Ceremony and Invited Paper on AI and CE</b></p>
	</div>
  <section class="team py-2" id="team">
    <div class="container py-xl-5 py-lg-3">
      <div class="bott-w3ls mr-xl-5">
        <h5 class="title-w3 text-bl mb-3 font-weight-bold">Gallery</h5>
      </div>
	    <div class="row"> 
        <?php $__currentLoopData = $eventImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($row->day == '2'): ?>
        <div class="col-md-4">
          <div class="Thumbnail">
            <a class="black-text" href="<?php echo e(asset('event/'.$row->event_image_name)); ?>">
              <img alt="Picture" src="<?php echo e(asset('event/'.$row->event_image_name)); ?>" style="width: 100%">
                <div class="caption">
                   <!-- <p><?php echo e($row->event_image_caption); ?></p> -->
                </div>
            </a>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>