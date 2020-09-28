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
			<li class="breadcrumb-item" aria-current="page">About AI4CE</li>
			<li class="breadcrumb-item"><a href="#aim_objectives" class="font-weight-bold">Aim & Objectives</a>
				<li class="breadcrumb-item"><a href="#expected_project" class="font-weight-bold">Expected Project Outcomes</a>
					<li class="breadcrumb-item"><a href="#organogram" class="font-weight-bold">AI4CE Organogram</a>
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
				<h6>About AI4CE</h6>
				<h3 class="mt-2 mb-3">Artificial Intelligence for Clean Energy (AI4CE)</h3>
				<p class="mt-2 text-justify">Artificial Intelligence for Clean Energy (AI4CE) is an initiative which aims at developing innovative approaches to clean energy generation using AI and at the same time rely on Information and Communication Technology (ICT) for integrating the clean energy to the existing grid system by turning academic ideas into businesses through AcadoPreneurship. 
				This initiative is supported by the Royal Academy of Engineering UK Grant under the Higher Education Partnerships in sub-Saharan Africa (HEP-SSA) programme with project ID HEPSSA1921\3\88</p>
			</div>
			<div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
				<img src="<?php echo e(asset('web/images/about.png')); ?>" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
<!-- //about -->

<!-- what we do section -->
<!-- <div class="bg py-5" id="">
    <div class="container py-xl-5 py-lg-3">
    	<h3>What We Do</h3>
        <div class="row py-4">

=			<ul class="accordion css-accordion mt-5">
				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item1" />
					<label for="item1" class="accordion-item-hd">LIWES Pilot Scheme <span
						 class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<p>The project would provide funding for the introduction of Lecturers Industrial Experience Scheme (LIWES) in order to enhance lecturers’ skill and at the same time provide data for its adoption or otherwise for its inclusion in national education agenda for the country. </p>
					</div>
				</li>
				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item2" />
					<label for="item2" class="accordion-item-hd">Increase in Employability Index of graduating students <span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<p>The number of graduates that would be gainfully employed within 6 months of graduation would increase due to having appropriate skills required in the field. A baseline will be made at the beginning of the project, based on the most recent graduating cohort. This will be monitored again at the end of the project and yearly up to 3 years after the end of the project.</p>
					</div>
				</li>
				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item3" />
					<label for="item3" class="accordion-item-hd">Reduction in Industry Training Cost
						<span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<p>The cost of training for industries will be reduced by at least 20% due to the better-skilled graduate engineers graduating from the University.</p>
					</div>
				</li>
				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item4" />
					<label for="item4" class="accordion-item-hd">Birth of 100 Start-Up Companies<span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<p>The inclusion of AcadoPreneurship in FUT Minna will lead to the birth of 100 start-up MSME over a period of 5 years. </p>
					</div>
				</li>

				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item5" />
					<label for="item5" class="accordion-item-hd">Increase in Number of Application for Patents<span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<p>Availability of state-of-the-art equipment purchased from the project will lead to more intensive research in CE with corresponding increase in number of patents emanating from the project.</p>
					</div>
				</li>

				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item6" />
					<label for="item6" class="accordion-item-hd">Within ten years from the start of the project<span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<p>Establishment of CE Ecosystem: In addition to the short-term impacts, the successful implementation of the project would lead to the establishment of a complete CE ecosystem, which will include: skilled engineers, MSME, Low cost and affordable CE production infrastructures etc. </p>
					</div>
				</li>

				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item7" />
					<label for="item7" class="accordion-item-hd">CE for Increase Rural Electrification in Nigeria<span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<p>The availability and establishment of complete CE ecosystem would increase.</p>
					</div>
				</li>
			</ul>
      	
        </div>
    </div>
</div> -->
<!-- //what we do section -->


<!-- stats -->
<section class="bottom-count bg-li py-5" id="stats">
	<a id="aim_objectives"></a>
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<div class="col-lg-5 left-img-w3ls">
				<img src="<?php echo e(asset('web/images/b2.png')); ?>" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">Aim & Objectives</h3>
				</div>
				<div class="row mt-5">
					<ul>
						<li>To develop online laboratory system for extending Clean Energy (CE) research capabilities in Hub-Spoke Universities (HSU) </li>
						<li>To second 5 academic to the industry under the Industry Immersion Programme (IIP), 5 industry experts to the HSU under the Academic Immersion Programme (AIP and 50 undergraduate students to industry for Student Industrial Work Experience Scheme (SIWES). 
						</li>
						<li>To jointly conduct applied training with industrial partners for 100 undergraduate students and 3 postgraduate students in addition to provision of entrepreneurial training to 50 students under the AcadoPreneurship Programme. 
						</li>
						<li>To sponsor research bench work opportunities for two (2) PhD students at UK partner universities.</li>
						<li>To organise two dissemination workshops at 2 universities and CE forum in the two (2) hub universities.</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!-- Expected Project Outcomes -->
<div class="about-inner py-5">
	<a id="expected_project"></a>
	<div class="container pb-xl-5 pb-lg-3">
		<div class="row py-xl-4">
			<h3 class="mt-2 mb-3 col-12 text-center py-4"><b>Expected Project Outcomes</b></h3>
			<div class="col-lg-5 about-right-faq pr-5">
				
				<p class="mt-2 text-justify">The development of innovative AI/CE based products and approaches capable of providing CE to over 2 million financially disadvantaged populace in Nigeria.</p><hr>
				<p class="mt-2 text-justify"> The development of online laboratory system for extending Clean Energy (CE) research capabilities in Hub-Spoke Universities (HSU).</p><hr>
				<p class="mt-2 text-justify"> The development of AI/CE curriculum and laboratory equipment for manpower development </p> <hr>
				<p class="mt-2 text-justify"> Capacity Development for Academic staff in both Hub and Spoke Universities through the introduction of Industrial Immersion Programme (IIP) and Academic Immersion Programme (AIP) and Students Industrial Work Experience Scheme (SIWES) opportunities to students in the field of AI/CE </p> <hr>
				<p class="mt-2 text-justify">Provision of entrepreneurial training to 50 students and incubation of 5 start-up businesses under under the AcadoPreneurship Programme </p> <hr>
				<p class="mt-2 text-justify">Sponsoring research bench work opportunities for two (2) PhD students at UK partner universities. </p> <hr>
				<p class="mt-2 text-justify">Organizing two dissemination workshops and Two <a href="<?php echo e(route ('symposium')); ?> "> symposiums. </a></p>  <hr>
				<p class="mt-2 text-justify">Establishment of CE Ecosystem at Federal University of Technology, Minna and its environs </p>
			</div>
			<div class="col-lg-7 welcome-right text-center mt-lg-12 mt-5">
				<img src="<?php echo e(asset('web/images/project.png')); ?>" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>

<!-- //stats -->

<!-- team -->
<section class="team py-5 bg-li" id="team">
	<a id="organogram"></a>
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold">AI4CE Organogram</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
        <div class="row ab-info second pt-lg-4">
            <img src="<?php echo e(asset('gallery/organogram.jpeg')); ?>" class="img-fluid" style="display: block; margin: auto;">
        </div>
</section>
<!-- //team -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>