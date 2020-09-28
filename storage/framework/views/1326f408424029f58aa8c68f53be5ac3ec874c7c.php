<?php $__env->startSection('content'); ?>
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">Add to Gallery</h4> </div>


<?php if(count($errors)): ?>

<div class="form-group">
    <div class="alert alert-danger">
        <ul>
         	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	<li><?php echo e($error); ?></li>
         	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
			<?php endif; ?>
    </div>
  

<?php if(session('info')): ?>
<div class="alert alert-success">
	<?php echo e(session('info')); ?>

</div>
<?php endif; ?>


<form method="POST" action="<?php echo e(route('admin.store.gallery')); ?>" class="form-horizontal" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

    
	<div class="form-group m-b-0">
 		<label class="col-md-2 control-label">Image</label>
 	 		<div class="col-md-10">
 	 			<input type="file" class="filestyle" data-buttonname="btn-primary" name="gallery_image" />
 	 		</div>
 	</div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="gallery_caption">Image Caption</label>
        <div class="col-md-10">
            <input type="text" id="gallery_caption" name="gallery_caption" class="form-control" value="<?php echo e(old('gallery_caption')); ?> ">
        </div>
    </div>
	<div class="col-sm-offset-2 col-sm-9">
      	<button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <br>
	
</form>





<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>