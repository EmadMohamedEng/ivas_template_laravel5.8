<?php $__env->startSection('content'); ?>
<style>
    .main h2  {
        text-align: center;
        color: #f3e5b8;
        margin-bottom: 10%;
    }   
</style>
<!-- main content -->
<div class="main">
    <div class="container">
        <h2>مواقيت الصلاة</h2>       
        <table class="table table-dark table-hover">
            <thead>
                <tr>

                    <th><?php echo e($hjrri_date->day.' - '.$hjrri_date->month .' - '.$hjrri_date->year); ?></th>
                    <th><?php echo e(date('d/m/Y')); ?></th>
                </tr>
                <tr>
                    <th>الصلاة</th>
                    <th>الوقت</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $prayer_times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key); ?></td>
                    <td><?php echo e($value); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/front/salah_time.blade.php ENDPATH**/ ?>