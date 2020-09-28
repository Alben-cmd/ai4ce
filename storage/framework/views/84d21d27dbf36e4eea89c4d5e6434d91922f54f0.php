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
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- footer -->
    <footer class="bg-li py-5">
        <img src="<?php echo e(asset('partners/sponsor.png')); ?>" alt="" width="800" height="100" style="margin-left:0 auto; padding-left: 600px;" />
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