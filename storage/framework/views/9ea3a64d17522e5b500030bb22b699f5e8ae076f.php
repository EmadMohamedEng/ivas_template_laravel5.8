<?php $__env->startSection('page_title'); ?>
    Resize image
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Resizing Images</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="iframe" class="embed-responsive-item" src="<?php echo e(url('JIC/index')); ?>"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('script'); ?>
    <script>
        $('#images').addClass('active');
        $('#upload_resize_v2').addClass('active');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7.3\htdocs\ivas_template_laravel5.8\resources\views/dashboard/upload_resize_v2.blade.php ENDPATH**/ ?>