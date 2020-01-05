<?php $__env->startSection('content'); ?>

<style>
    .main h6 {
        text-align: center;
        color: #f3e5b8;
        margin-bottom: 15%;
    }
</style>

<!-- main content -->
<div class="main">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6">
                <div class="video_content">
                    <a href="<?php echo e(url('view_content/'.$value->id)); ?>">
                        <div class="over"></div>
                        <img src="<?php echo e($value->path); ?>" alt="<?php echo e($value->title); ?>">
                    </a>
                </div>
                <h6><?php echo e($value->title); ?></h6>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
</div>
<!-- end main content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/front/images_service.blade.php ENDPATH**/ ?>