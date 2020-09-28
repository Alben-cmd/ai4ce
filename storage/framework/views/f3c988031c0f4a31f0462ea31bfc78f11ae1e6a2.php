<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>AI4CE</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Startup Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="<?php echo e(asset('web/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/screen.css')); ?>">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('web/css/style.css')); ?>" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="<?php echo e(asset('web/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
     rel="stylesheet">
    <!-- //Web-Fonts -->

    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>
    
    <div>
       <!-- main banner -->
<div class="main-top" id="home">
  <?php echo $__env->make('includes.conference_1st', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- banner -->
  <div class="banner_w3lspvt-2">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('welcome')); ?>" class="font-weight-bold">Home</a></li>
      <li class="breadcrumb-item" aria-current="page">Conference</li>
    </ol>
  </div>
  <!-- //banner -->
</div>
<!-- //main banner -->

<!-- Welcome Note -->
<div class="about-inner py-0">
  <div class="container pb-xl-5 pb-lg-3">
    <div class="row py-xl-4">
      <div class="col-lg-5 about-right-faq pr-5">
        <h3 class="mt-2 mb-3" id='conference_highlights'>Welcome Note</h3>
        <p class="mt-2 text-justify">It is our honour and pleasure to welcome you to the first edition of the Artificial Intelligence for Clean Energy Conference.  <br>

          The Advance Engineering Innovation Research Group (AEIRG) of Federal University of technology Minna, Nigeria under the project titled: <b>“Artificial Intelligence for Clean Energy (AI4CE) Development” </b>invite contributions from researchers, academics and other stakeholders on the above conference theme. <br>

          The goal of the conference is to bring together critical stakeholders from energy and Information & Communication Technology from the academia and industry to cross-fertilize innovative ideas and to share results of their researches and experiences.

         <hr>

        <b>Lanre Olatomiwa, Ph.D, David Michael, Ph.D (Organizing Chairs)</b></p><hr>
        
      </div>
      <div class="col-lg-7 welcome-right text-center mt-lg-10 mt-5">
        <img src="<?php echo e(asset('web/images/poster_1.jpg')); ?>" alt="" class="img-fluid" />
      </div>
    </div>
  </div>
</div>

<!-- Call for Papers -->
<div class="about-inner py-0">
  <div class="container pb-xl-5 pb-lg-3">
    <div class="row py-xl-4">
      <div class="col-lg-5 about-right-faq pr-5">
        <h3 class="mt-2 mb-3" id="call_paper">Call for Papers</h3>
        <p class="mt-2 text-justify">

          Authors are invited to submit full papers (5 max pages in length), through Easy chair  on or before October 19th, 2020. Submissions are welcomed as they apply to the theme of the Conference. Prior submission, please take note of the following: <br>

          <hr>

           <li style="list-style-type: square">Manuscripts must contain original ideas that have not been previously published or under review in any other conference, workshop or journal.</li> <br>

           <li style="list-style-type: square">Submissions are only allowed via the <a href="https://easychair.org">Easy chair platform</a> and only PDF file formats are accepted for the review process.</li> 

           <hr>
          
          
         A shortlist of presented papers will be invited to submit extended versions for additional publication in a Scopus indexed journal. Also accepted papers will be published in a proceedings to indexed by reputable site


          For further information, please click here <a href="#">Paper Submission</a> or contact the technical chair:<br>
          
          <li style="list-style-type: square">Name: Lanre Olatomiwa (Ph.D)  </li>
          
          <li style="list-style-type: square">E-mail: olatomiwa.l@futminna.edu.ng  </li>

          <li style="list-style-type: square">Tel: +2349061611760 </li>
          
        </p>


        
      </div>
      <div class="col-lg-7 welcome-right text-center mt-lg-5 mt-5">

        <h3 class="mt-0 mb-3"><b>Conference Scopes</b></h3>

        <img src="<?php echo e(asset('web/images/project.png')); ?>" alt="" class="img-fluid" />

        <button class="btn-success p-2 mt-4 button">Click to download paper template</button>

      </div>


    </div>
  </div>
</div>


<section>
  <div class="container">
    <h1 class="heading" style="font-size: 28px; text-transform: initial;"><b>Meet The Speakers</b></h1>
    <div class="card-wrapper">
      
      <div class="card">
        <img src="<?php echo e(asset('web/images/ocean2.jpg')); ?>" alt="card background" class="card-img">
        <img src="<?php echo e(asset('web/images/avatar2.png')); ?>" alt="Profile Image" class="profile-img">
        <h1>Olatunji Damilare E.</h1>
        <p class="job-title">
          Fullstack Developer
        </p>

        <p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt repudiandae deserunt ipsa ex magnam aut labore deleniti velit pariatur dolorem adipisci autem, error praesentium officia, sint aliquid, explicabo animi officiis.</p>
      </div>

      <div class="card">
        <img src="<?php echo e(asset('web/images/ocean2.jpg')); ?>" alt="card background" class="card-img">
        <img src="<?php echo e(asset('web/images/avatar2.png')); ?>" alt="Profile Image" class="profile-img">
        <h1>Olatunji Damilare E.</h1>
        <p class="job-title">
          Fullstack Developer
        </p>

        <p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt repudiandae deserunt ipsa ex magnam aut labore deleniti velit pariatur dolorem adipisci autem, error praesentium officia, sint aliquid, explicabo animi officiis.</p>
      </div>

      <div class="card">
        <img src="<?php echo e(asset('web/images/ocean2.jpg')); ?>" alt="card background" class="card-img">
        <img src="<?php echo e(asset('web/images/avatar2.png')); ?>" alt="Profile Image" class="profile-img">
        <h1>Olatunji Damilare E.</h1>
        <p class="job-title">
          Fullstack Developer
        </p>

        <p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt repudiandae deserunt ipsa ex magnam aut labore deleniti velit pariatur dolorem adipisci autem, error praesentium officia, sint aliquid, explicabo animi officiis.</p>
      </div>


      <div class="card">
        <img src="<?php echo e(asset('web/images/ocean2.jpg')); ?>" alt="card background" class="card-img">
        <img src="<?php echo e(asset('web/images/avatar2.png')); ?>" alt="Profile Image" class="profile-img">
        <h1>Olatunji Damilare E.</h1>
        <p class="job-title">
          Fullstack Developer
        </p>

        <p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt repudiandae deserunt ipsa ex magnam aut labore deleniti velit pariatur dolorem adipisci autem, error praesentium officia, sint aliquid, explicabo animi officiis.</p>
      </div>


    </div>
  </div>
</section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span><b>Contact Us</b></span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
             <img src="<?php echo e(asset('web/images/location.png')); ?>" alt="" class="img-fluid" style="width: 5px height: 5px" />
              <h3>Our Address</h3>
              <p>AI4CE Secretariat, <br>Federal University of Technology Minna, Niger State</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <img src="<?php echo e(asset('web/images/email.png')); ?>" alt="" class="img-fluid" style="width: 5px height: 5px" />
              <h3>Email us</h3>
              <p>ai4ce@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <img src="<?php echo e(asset('web/images/call.png')); ?>" alt="" class="img-fluid" style="width: 5px height: 5px" />
              <h3>Call us</h3>
              <p>+234-8103xxxx</p>
            </div>
          </div>

        </div>

        <div class="section-title">
          <h3><span><b>Conference Organizing Committee</b></span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>


        <div class="row" data-aos="fade-up" data-aos-delay="100">
          
       
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <img src="<?php echo e(asset('web/images/user-icon.jpg')); ?>" alt="" class="img-fluid" style="width: 5px height: 5px" />
              <h3>Name:</h3><hr>
              <p><b>Lanre Olatomiwa (Ph.D)</b></p><hr>
              <p><b>David Michael (Ph.D)</b></p><hr>
              <p>Folorunso Taliha (Ph.D)</p><hr>
              <p>Ibrahim Abdullah (Ph.D)</p><hr>
              <p>A.O. Oke (Ph.D)</p><hr>
              <p>Sadiq Ahmed(Engr.)</p><hr>
              <p>Ayodeji Sheed</p><hr>
              <p>I.D. Matthew</p><hr>
              <p>D. E. Olatunji</p><hr>
            </div>
          </div>

           <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <img src="<?php echo e(asset('web/images/status-icon.png')); ?>" alt="" class="img-fluid" style="width: 5px height: 5px" />
              <h3>Status:</h3><hr>
              <p><b>Chair</b></p><hr>
              <p><b>Co-Chair</b></p><hr>
              <p>Member</p><hr>
              <p>Member</p><hr>
              <p>Member</p><hr>
              <p>Member</p><hr>
              <p>Member</p><hr>
              <p>Secretary</p><hr>
              <p>Member</p><hr>
            </div>
          </div>


          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <img src="<?php echo e(asset('web/images/email.png')); ?>" alt="" class="img-fluid" style="width: 5px height: 5px" />
              <h3>Email Address:</h3><hr>
              <p>olatomiwa.i@futminna.edu.ng</p><hr>
              <p>mikeforheaven@futminna.edu.ng</p><hr>
              <p>inspiredtalhah@gmail.com</p><hr>
              <p>ibrojoyol@ibbu.edu.ng</p><hr>
              <p>#</p><hr>
              <p>ahmad.abubakar@futminna.edu.ng</p><hr>
              <p>adetoroayo@gmail.com</p><hr>
              <p>mattewifetolad@gmail.com</p><hr>
              <p>dammy4did@gmail.com</p><hr>

            </div>
          </div>


          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <img src="<?php echo e(asset('web/images/call.png')); ?>" alt="" class="img-fluid" style="width: 5px height: 5px" />
              <h3>Phone Contact:</h3><hr>
              <p>+2349061611760</p><hr>
              <p>+2348033469642</p><hr>
              <p>+2347034226984</p><hr>
              <p>+2348035991532</p><hr>
              <p>+2348030729018</p><hr>
              <p>+2347068043665</p><hr>
              <p>+2348067329530</p><hr>
              <p>+2348033789973</p><hr>
              <p>+2348103966057</p><hr>

            </div>

        </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    </div>

    <!-- footer -->
    <footer class="bg-li py-5">
       <div class="row"> 
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/sponsor.png')); ?>" alt="" height ="100" style="margin-left: 1px;" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/futminna.png')); ?>" alt="" height="100" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/huddersfield.png')); ?>" alt="" height ="100" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/ibbul.jpeg')); ?>" alt="" height ="100" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/lautech.png')); ?>" alt="" height ="100" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/techu.png')); ?>" alt="" width="200" height ="100" align="left" />
          </div>
        </div>
        <br>
        <div class="row"> 
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/manchester.png')); ?>" alt="" width="200" height ="100" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/susej.jpeg')); ?>" alt="" height ="100"  />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/basic.png')); ?>" alt="" height="100" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/buypower.png')); ?>" alt="" height ="100" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/eclipsepower.jpg')); ?>" alt="" height ="100" />
          </div>
          <div class="col-md-2">
            <img src="<?php echo e(asset('partners/lautech.png')); ?>" alt="" height ="100" />
          </div>
          
        </div>
        
    </footer>
    <!-- //footer -->
    <!-- copyright bottom -->
    <div class="copy-bottom bg-li py-4 border-top">
        <div class="container-fluid">
            <div class="d-md-flex px-md-3 position-relative text-center">
                <!-- footer social icons -->
                <div class="social-icons-footer mb-md-0 mb-3">
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.facebook.com/ai4ce/">
                                <span class="fa fa-facebook"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //footer social icons -->
                <!-- copyright -->
                <div class="copy_right mx-md-auto mb-md-0 mb-3">
                    <p class="text-bl let">© <?php echo e(date('Y')); ?> <b>AI4CE</b>. All rights reserved
                    </p>
                </div>
                <!-- //copyright -->
                <!-- move top icon -->
                <a href="#home" class="move-top text-center">
                    <span class="fa fa-level-up" aria-hidden="true"></span>
                </a>
                <!-- //move top icon -->
            </div>
        </div>
    </div>
    <!-- //copyright bottom -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/video-player.js')); ?>"></script>
</body>

</html>

<?php $__env->startSection('content'); ?>



<?php $__env->stopSection(); ?>