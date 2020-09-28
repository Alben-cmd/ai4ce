<?php $__env->startSection('content'); ?>
 <div class="card-header">
 	<h4 class="m-t-0 header-title" align="center">
 <a href=" <?php echo e(route('home')); ?> ">Dashboard</a></h4> </div>


           
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>