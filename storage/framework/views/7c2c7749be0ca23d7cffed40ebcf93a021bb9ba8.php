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
			<li class="breadcrumb-item" aria-current="page">Activities - Curriculum</li>
		</ol>
	</div>
	<!-- //banner -->
</div>
<!-- //main banner -->

<!-- stats -->
<section class="bottom-count bg-li py-5" id="stats">
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<!-- <div class="col-lg-5 left-img-w3ls">
				<img src="<?php echo e(asset('web/images/b2.png')); ?>" alt="" class="img-fluid" />
			</div> -->
			<div class="col-lg-12 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">Curriculum Development</h3>
				</div>
				<div class="row mt-5">
					<ul style="list-style-type: none;">
						<li>
							<h6 class="accordion-textm">CE curriculum review and development</h6>
							Existing curriculum for Bachelor of Engineering with emphasis on courses related to CE would be reviewed. A six- step curriculum review strategy would be adopted for curriculum development. This would allow for achievement of AI4CE goals on teaching, learning, entrepreneurship and research in CE.
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">Problem Identification and CE Needs Assessment Study-Academia</h6>
							CE needs assessment problems would be analysed. Priorities would be set for interventions in the curriculum. Information collected will serve as a baseline for monitoring and evaluation at a later stage. The outcomes from the Nigeria curriculum would be bench-marked against that of UK. Online AI/CE Laboratory system design formulation and preparation of concept note.
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">Targeted CE Needs Assessment Study-Industry</h6>
							Baseline study regarding the industry needs that would be addressed by the curriculum would be collected via the use of questionnaires and visit to the industrial partners. Development of online laboratory system for extending CE research capabilities in Hub-Spoke Universities and design of application of AI and ICT in hybrid micro-grids.
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">CE Curriculum Development and Sensitisation Programme</h6>
							Upon completion and approval of the newly developed curriculum, workshop would be held at FUT Minna and Experts from the MMU and UoH would be invited to facilitate the event and share experience. Development of application of AI and ICT in hybrid micro-grids.

						</li>

						<hr>

					</ul>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- //stats -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>