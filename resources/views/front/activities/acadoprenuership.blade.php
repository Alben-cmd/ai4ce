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
			<!-- <div class="col-lg-5 left-img-w3ls">
				<img src="{{ asset('web/images/b2.png') }}" alt="" class="img-fluid" />
			</div> -->
			<div class="col-lg-12 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
				<div class="bott-w3ls mr-xl-5">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">Acadoprenuership</h3>
				</div>
				<div class="row mt-5">
					<ul style="list-style-type: none;">
						<li>
							<h6 class="accordion-textm">Our Plan</h6>
							<ul style="list-style-type: none;">
								<li>- Fifty (50) innovative academic ideas would be selected for business incubation.</li>
								<li>- Two (2) additional events would be organized in line with Acadopreneurship principle.</li>
								<li>- A 7-day boot camp will be held for pitching for presenting innovative ideas to prospective investors as contained in Acadopreneurship manual </li>
							</ul>
							  
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