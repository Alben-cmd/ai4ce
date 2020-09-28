<header>
    <div class="container-fluid">
        <div class="header d-lg-flex justify-content-between align-items-center py-0 px-sm-3">
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

                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">About AI4CE<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="<?php echo e(route('about')); ?>"> About AI4CE <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="<?php echo route('about').'#aim_objectives'; ?>" class="drop-text">Aim & Objectives</a></li>
                                <li><a href="<?php echo route('about').'#expected_project'; ?>" class="drop-text">Expected Project Outcomes</a></li>
                                <li><a href="<?php echo route('about').'#aim_objectives'; ?>" class="drop-text">Acado-prenuership</a></li>
                                <li><a href="<?php echo route('about').'#organogram'; ?>" class="drop-text">AI4CE Organogram</a></li>
                            </ul>
                        </li>

                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">The Projects<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#"> The Projects <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="<?php echo e(route('research')); ?>" class="drop-text">Research Activities</a></li>
                                <li><a href="<?php echo e(route('capacityBuilding')); ?>" class="drop-text">Capacity Building</a></li>
                                <li><a href="<?php echo e(route('acado')); ?>" class="drop-text">Acado-prenuership</a></li>
                                <li><a href="<?php echo e(route('curriculum')); ?>" class="drop-text">Curriculum Development</a></li>
                            </ul>
                        </li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">Achievements<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Achievements<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="<?php echo e(route('symposium')); ?>" class="drop-text">Symposium</a></li>
                                <li><a href="<?php echo e(route('immersion')); ?>" class="drop-text">Academic Immersion</a></li>
                                <li><a href="<?php echo e(route('openGallery')); ?>" class="drop-text">Gallery</a></li>
                                <li><a href="<?php echo e(route('pitching')); ?> " class="drop-text">Product Pitching</a></li>
                                
                            </ul>
                        </li>

                        <li><a href="https://lms.ai4ce.com.ng/" target="_blank">LearNergy LMS</a></li>                     

                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">More Info<span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">More Info<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="#" class="drop-text">Opportunities</a></li>
                                <li><a href="<?php echo e(route('contact')); ?>" class="drop-text"> Contact AI4CE</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="<?php echo e(route('conference_1st')); ?>" class="btn btn-outline-danger my-0">Conference</a></li> -->
                        <li><a href="https://lms.ai4ce.com.ng/" class="drop-text" style="color: red"> LearNergy</a></li>
                        <li><a href="https://lms.ai4ce.com.ng/" class="btn btn-outline-danger my-0">LearNergy LMS</a></li>


                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
</header>