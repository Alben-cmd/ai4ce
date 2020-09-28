<?php $__env->startSection('content'); ?>
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center"><?php echo e($event_data->event_name); ?></h4> </div>

 <div align="right"><h5><a href=" <?php echo e(route('event.add.picture')); ?> ">Add New Image to Event</a></h5></div>
 
 <div class="uper">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
 </div>
			<div class="table-responsive">
				 <div class="card-header">
 <h5 class="m-t-0 header-title" align="center">Event Images</h5> </div>
				<table class="table m-0">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Image Name</th>
							<th>Caption</th>
							<th>Day</th>
						
							<?php 
							$counter =1;
							?>
					
						</tr>
					</thead>
					<tbody>
						
								<?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<tr>
							<td><?php echo e($counter ++); ?> </td>
							<td><?php echo e($eventImage->event_image_name); ?></td>
							<td><?php echo e($eventImage->event_image_caption); ?></td>
							<td><?php echo e($eventImage->day); ?> </td>
							
							
							<td>
							<div align="right">
								
								<a href=""  class="label label-success">Update |</a>

								<a href=""  onclick="return confirm('Are you sure?')" class="label label-danger">Delete</a>
							</div>
							</td> 
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tr>
					
				
						
					</tbody>
				</table>
				
			</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>