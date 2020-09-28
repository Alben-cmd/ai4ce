<?php $__env->startSection('content'); ?>
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">
 <a href=" <?php echo e(route('home')); ?> ">Event</a></h4> </div>

 <div align="right"><h5><a href=" ">Add New Event</a></h5></div>
 
 <div class="uper">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
 </div>
			<div class="table-responsive">
				<table class="table m-0">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Event Name</th>
							<th>Number of Days</th>
							<th>Event Type</th>
						
							<?php 
							$counter =1;
							?>
					
						</tr>
					</thead>
					<tbody>
						
								<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<tr>
							<td><?php echo e($counter ++); ?> </td>
							<td><?php echo e($event->event_name); ?></td>
							<td><?php echo e($event->no_of_days); ?></td>
							<td><?php echo e($event->event_type); ?> </td>
							
							
							<td>
							<div align="right">
								<a href="/admin/event/<?php echo e($event->id); ?>" class="label label-primary">Read |</a>
								
								<a href=""  class="label label-success">Update |</a>

								<a href="#"  onclick="return confirm('Are you sure?')" class="label label-danger">Delete</a>
							</div>
							</td> 
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tr>
					
				
						
					</tbody>
				</table>
				
			</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>