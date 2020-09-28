<header>
    <div class="container-fluid">
        <div class="header d-lg-flex justify-content-between align-items-center py-0 px-sm-1 my-0 ">
            <!-- logo -->
            <div id="logo">
                <h1><a href="<?php echo e(route('welcome')); ?>"><img src="<?php echo e(asset('logo_ai4ce.jpeg')); ?>" height="90" width="auto"> </a></h1>
            </div>
            <!-- //logo -->
            <!-- nav -->
            <div class="nav_w3ls">
                <nav>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li><a href="<?php echo e(route('welcome')); ?>" class="active">Home</a></li>
                         <li><a href="#conference_highlights"> Highlights </a></li>
                        <li><a href="#call_paper">Call for Papers</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Paper Submission</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
</header>