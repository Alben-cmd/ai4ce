<?php $__env->startSection('content'); ?>

<!-- main banner -->
<div class="main-top" id="home">
	<!-- header -->
	<?php echo $__env->make('includes.header-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- //header -->

	<!-- banner -->
	<div class="banner_w3lspvt-2">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo e(route('welcome')); ?>" class="font-weight-bold">Home</a></li>
			<li class="breadcrumb-item" aria-current="page">Activities - Research</li>
		</ol>
	</div>
	<!-- //banner -->
</div>
<!-- //main banner -->

<!-- stats -->
<section class="bottom-count bg-li py-5" id="stats">
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<div class="col-lg-5 left-img-w3ls">
				<img src="<?php echo e(asset('web/images/b1.png')); ?>" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">Research  & Development Activities</h3>
				</div>
				<div class="row mt-5">
					<ul style="list-style-type: none;">
						<li>
							<h6 class="accordion-textm">Research Seminar on Clean Energy</h6>
							Research seminars organized at IBBUL, MMU and UoH and other industrial and academic partners may participate via online mechanism that would be provided for the event.
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">PhD Research Student Visit UK Partners</h6>
							It is expected that the research candidate would use the facilities available in accomplishing some of its research objectives. 
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">Research in application of AI and ICT in CE</h6>
							UG and 8 PG and 1 post-doctoral fellow would be involved in the development of innovative approaches in CE Emphasis would be placed on CE academic ideas that could be turned into businesses.  
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">Research Exhibition</h6>
							Exhibition of CE research projects would be held at FUT Minna. Other partners would be participating at the event.
						</li>

					</ul>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- //stats -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>