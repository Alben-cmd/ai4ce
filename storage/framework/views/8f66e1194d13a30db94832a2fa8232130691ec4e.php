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
			<li class="breadcrumb-item" aria-current="page">Expected Projects</li>
		</ol>
	</div>
	<!-- //banner -->
</div>
<!-- //main banner -->

<!-- about -->
<div class="about-inner py-5">
	<div class="container pb-xl-5 pb-lg-3">
		<div class="row py-xl-4">
			<div class="col-lg-5 about-right-faq pr-5">
				<h3 class="mt-2 mb-3">Expected Projects</h3>
				<p class="mt-2 text-justify">The development of innovative AI/CE based products and approaches capable of providing CE to over 2 million financially disadvantaged populace in Nigeria.</p><hr>
				<p class="mt-2 text-justify"> The development of online laboratory system for extending Clean Energy (CE) research capabilities in Hub-Spoke Universities (HSU).</p><hr>
				<p class="mt-2 text-justify"> The development of AI/CE curriculum and laboratory equipment for manpower development </p> <hr>
				<p class="mt-2 text-justify"> Capacity Development for Academic staff in both Hub and Spoke Universities through the introduction of Industrial Immersion Programme (IIP) and Academic Immersion Programme (AIP) and Students Industrial Work Experience Scheme (SIWES) opportunities to students in the field of AI/CE </p> <hr>
				<p class="mt-2 text-justify">Provision of entrepreneurial training to 50 students and incubation of 5 start-up businesses under under the AcadoPreneurship Programme </p> <hr>
				<p class="mt-2 text-justify">Sponsoring research bench work opportunities for two (2) PhD students at UK partner universities. </p> <hr>
				<p class="mt-2 text-justify">Organizing two dissemination workshops and Two <a href="<?php echo e(route ('symposium')); ?> "> symposiums. </a></p>  <hr>
				<p class="mt-2 text-justify">Establishment of CE Ecosystem at Federal University of Technology, Minna and its environs </p>
			</div>
			<div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
				<img src="<?php echo e(asset('web/images/project.png')); ?>" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>