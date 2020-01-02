<!DOCTYPE html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <!-- IE compatibility meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for phons -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- links -->
    <link rel="stylesheet" href="<?php echo e(url('assets/front/')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/front/')); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/front/')); ?>/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/front/')); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/front/')); ?>/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/front/')); ?>/css/audioplayer.css">
    <link rel="stylesheet" href="<?php echo e(url('assets/front/')); ?>/css/main-style.css">

    <!-- title -->
    <title>islamic WebApp</title>
    <style>
    .active{
        background: #b63b4d;
        color: #FFF;
    }
    </style>
</head>

<body>

    <!-- navbar -->
    <header>
        <div class="container-fluid">
            <div class="row">

                <!-- hamburger -->
                <div class="col-4">
                    <input type="checkbox" id="menu-toggle">
                    <label class="hamburger-wrapper" for="menu-toggle">
                        <span class="hamburger"></span>
                    </label>
                    <nav>
                        <div class="spacer"></div>
                        <!-- accordion -->
                        <ul id="accordion" class="accordion list-unstyled">
                            
                            <!---------->
                            <?php $__currentLoopData = get_providers(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li >
                                <div class="link"><?php echo e('الشيخ '.$val->title); ?><i class="fa fa-chevron-down">
                            </i>
                                </div>
                                <ul class="submenu list-unstyled">
                                    <?php $services = provider_service($val->id);?>
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('list_contents/'.$value->id)); ?>" class=""><?php echo e($value->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                    </nav>
                </div>

                <div class="col-4 h_title">
                    <div class="page_title">
                        <img src="<?php echo e(url('assets/front/')); ?>/img/44.jpg" alt="islamic" onclick="gotohome()">
                    </div>
                </div>
                <div class="col-4 h_arrow">
                    <a class="arrow back" href="#"><i class="fas fa-angle-left fa-lg"></i></a>
                </div>

            </div>
        </div>
    </header>
    <!-- end navbar -->


    <script>
        function gotohome(){
    window.location.href='<?php echo e(url("/home")); ?>' ;
} 
    </script><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/front/header.blade.php ENDPATH**/ ?>