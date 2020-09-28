@extends('layouts.master')

@section('content')

<!-- main banner -->
<div class="main-top" id="home">
	<!-- header -->
	@include('includes.header-menu')
	<!-- //header -->

	<!-- banner -->
	<div class="banner_w3lspvt-2">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('welcome') }}" class="font-weight-bold">Home</a></li>
			<li class="breadcrumb-item" aria-current="page">Activities - Capacity Building</li>
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
				<img src="{{ asset('web/images/b2.png') }}" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">Capacity Building</h3>
				</div>
				<div class="row mt-5">
					<ul style="list-style-type: none;">
						<li>
							<h6 class="accordion-textm">LIWES, SIWES, CIM CE Skills Development</h6>
							This WP aimed at the development of appropriate Lecturers, students and workers skills, through practice- anchored capacity building such as: LIWES, SIWES, CIM and ESLM model.
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">LIWES and SIWES</h6>
							Visit to the industrial partners to identify the technical requirements for implementing LIWES. 50 (25 Students in Year 1, and 25 in Year 2 of the project) undergraduate students would also be sent to the industrial partners for 6-months industrial training on CE related activities and skills development.
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">CIM to FUT</h6>
							Industry employees will organize training sessions at FUT Minna and IBBUL. This is expected to provide opportunity for bridging the gap between teaching and industrial terminologies.
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">Two (2) high-level academics</h6>
							From FUT and 1 from LAUTECH would visit the teaching facilities at MMU. Detailed simulation and analysis of application of AI and ICT in hybrid micro-grids would be undertaken. Synchronization of approaches and design methodology to be adopted for remote laboratory access would be finalized. FUT and LAUTECH are expected to be work extensively on the design. 

						</li>

						<li>
							<h6 class="accordion-textm">Attend CE Workshop in UK</h6>
							The high-level academic would also attend CE workshop in UoH UK. This is expected to develop the capacity of the high-level academic for AI4CE project.
						</li>
						<hr>

						<li>
							<h6 class="accordion-textm">PhD Student Visit to the UK Partner Laboratory</h6>
							PhD students involve with CE research would visit UK Partners laboratory for conduct of certain parts of the research work that involve the equipment available at the UK Partner laboratories. 
						</li>

						<li>
							<h6 class="accordion-textm">Teaching and laboratory requirements</h6>
							CE’s teaching and laboratory equipment available at FUT Minna would be reviewed. Identification of new material and equipment needed for the successful implementation of AI4CE, would be among the expected outcomes.
						</li>
						<hr>

					</ul>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- //stats -->

@endsection