<?php $__env->startSection('content'); ?>

<!-- main banner -->
<div class="main-top" id="home">
    <!-- header -->
    <?php echo $__env->make('includes.header-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- //header -->

    <!-- banner -->
    <div class="banner_w3lspvt position-relative">
        <div class="container">
            <div class="d-md-flex">
                <div class="row">
                <div class="w3ls_banner_txt  col-md-6">                    
                    <h3 class="w3ls_pvt-title">Artificial Intelligence<br> <span>for Clean Energy</span></h3>
                    <p class="text-sty-banner">Artificial Intelligence for Clean Energy (AI4CE) is an initiative which aims at developing innovative approaches to clean energy generation using AI and at the same time rely on Information and Communication Technology (ICT)...</p>
                    <a href="<?php echo e(route('about')); ?>" class="btn button-style mt-md-5 mt-4">Read More</a>
                </div>
                <div class="banner-img col-md-5" >
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row ab-info second pt-lg-3">
                        <video width="650" height="400" controls autoplay muted loop style="float: right; margin-right: -70px; margin-top: 120px;" >
                            <source src="<?php echo e(asset('gallery/fut_video.MP4')); ?>" type="video/mp4" id="vid">
                            Your browser does not support the video tag.
                        </video>

                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- animations effects -->
        <div class="icon-effects-w3l">
            <img src="<?php echo e(asset('web/images/shape1.png')); ?>" alt="" class="img-fluid shape-wthree shape-w3-one">
            <img src="<?php echo e(asset('web/images/shape2.png')); ?>" alt="" class="img-fluid shape-wthree shape-w3-two">
            <img src="<?php echo e(asset('web/images/shape3.png')); ?>" alt="" class="img-fluid shape-wthree shape-w3-three">
            <img src="<?php echo e(asset('web/images/shape5.png')); ?>" alt="" class="img-fluid shape-wthree shape-w3-four">
            <img src="<?php echo e(asset('web/images/shape4.png')); ?>" alt="" class="img-fluid shape-wthree shape-w3-five">
            <img src="<?php echo e(asset('web/images/shape6.png')); ?>" alt="" class="img-fluid shape-wthree shape-w3-six">
        </div>
        <!-- //animations effects -->
    </div>
    <!-- //banner -->
</div>
<!-- //main banner -->

<!-- team -->
<section class="team py-5" id="team">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold">Our Academic Partners</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
        <div class="row ab-info second pt-lg-4">
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/futminna.png')); ?>" alt="futminna image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://futminna.edu.ng">
                            <h6 class="text-team-w3">Federal University of Technology Minna</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/huddersfield.png')); ?>" alt="huddersfield image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https://www.hud.ac.uk/">
                            <h6 class="text-team-w3">University of Huddersfield</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/ibbul.jpeg')); ?>" alt="ibbul image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://ibbu.edu.ng/">
                            <h6 class="text-team-w3">Ibrahim Badamasi Babangida University Lapai</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>

        <div class="row ab-info second pt-lg-4">
            

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/lautech.png')); ?>" alt="lautech image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://www.lautech.edu.ng/">
                            <h6 class="text-team-w3">Ladoke Akintola University of Technology Ogbomosho</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/manchester.png')); ?>" alt="manchester image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://www2.mmu.ac.uk/">
                            <h6 class="text-team-w3">Manchester Metropolitan University</h6>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/techu.png')); ?>" alt="techu image" height="150" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://tech-u.edu.ng/">
                            <h6 class="text-team-w3">First Technical University</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3 class="tittle text-center font-weight-bold">Our Industrial Partners</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
        <div class="row ab-info second pt-lg-4">
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/susej.jpeg')); ?>" alt="susej image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://susejgroup.org/">
                            <h6 class="text-team-w3">SUSEJ Nigeria Limited</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/basic.png')); ?>" alt="basic image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https://basicworks.com.ng/">
                            <h6 class="text-team-w3">Basic Electrical Electronics Works Limited</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 Tumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/buypower.png')); ?>" alt="buypower image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://susejgroup.org/">
                            <h6 class="text-team-w3">Buy Power</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row ab-info second pt-lg-4">    
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/eclipsepower.jpg')); ?>" alt="eclipsepower image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://eclipsepower.ng/">
                            <h6 class="text-team-w3">Eclipse Power</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="<?php echo e(asset('partners/valuehandlers.png')); ?>" alt="Valuehandlers image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https:#">
                            <h6 class="text-team-w3">Valuehandlers International LTD </h6>
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- //team -->



<script>
    document.getElementById('vid').play();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>