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
			<li class="breadcrumb-item" aria-current="page">Contact AI4CE</li>
		</ol>
	</div>
	<!-- //banner -->
</div>
<!-- //main banner -->

<!-- contact -->
	<div class="contact py-5" id="contact">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="row">
				<!-- <div class="col-lg-6">
					<img src="<?php echo e(asset('web/images/b2.png')); ?>" alt="image" class="img-fluid" />
				</div> -->
				<div class="col-lg-12 mt-lg-0 mt-5">
					<!-- contact form grid -->
					<div class="contact-top1">
						<p>Visit us today! </p>
						AI4CE Secretariat/Laboratory,<br> Top Floor, Centre for Open Distance and e-Learning building (CODeL),<br>
						Federal University of Technology Minna,<br> Minna, Niger State, Nigeria.
						<hr>
						<h6>Or</h6>
						<hr>
						<p>Send us an email</p>
						Email: ai4ce.futminna@gmail.com

						<!-- <form action="#" method="post" class="contact-wthree-do">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>
											First name
										</label>
										<input class="form-control" type="text" placeholder="Anderson" name="name" required="">
									</div>
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											Last name
										</label>
										<input class="form-control" type="text" placeholder="John" name="name" required="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>
											Mobile
										</label>
										<input class="form-control" type="text" placeholder="xxxx xxxx xx" name="mobile" required="">
									</div>
									<div class="col-md-6 mt-md-0 mt-4">
										<label>
											Email
										</label>
										<input class="form-control" type="email" placeholder="example@mail.com" name="email" required="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<label>
											Your message
										</label>
										<textarea placeholder="Add your Description here" name="message" class="form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12">
									<button type="submit" class="btn btn-cont-w3 btn-block mt-4">Send</button>
								</div>
							</div>
						</form> -->
					</div>
					<!-- //contact form grid ends here -->
				</div>
			</div>
		</div>
	</div>
	<!-- //contact-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>