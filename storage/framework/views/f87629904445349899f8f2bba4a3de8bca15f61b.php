<?php $__env->startSection('page_title'); ?>
    <?php echo app('translator')->getFromJson('messages.role'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i><?php echo app('translator')->getFromJson('messages.create-role'); ?></h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="<?php echo e(url('roles')); ?>" method="post">
                    	<?php echo e(csrf_field()); ?>

                    	<div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label"><?php echo app('translator')->getFromJson('messages.roles.role-name'); ?> *</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="name" placeholder="<?php echo app('translator')->getFromJson('messages.roles.role-name'); ?>" class="form-control input-lg" required>
                            </div>
                        </div>
                        
                        <div class="form-group" id="priority-type">
                            <label class="col-sm-3 col-lg-2 control-label">Priority *</label>
                            <div class="col-sm-9 col-md-10 controls">
                                <select class="form-control chosen" id="role_priority" name="role_priority" required>
                                    <option value>Select Priority</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <span class="help-inline">1 is the lowest</span>
                            <br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                <input type="submit" class="btn btn-primary" value="<?php echo app('translator')->getFromJson('messages.save'); ?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('#role').addClass('active');
        $('#role-create').addClass('active');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/roles/create.blade.php ENDPATH**/ ?>