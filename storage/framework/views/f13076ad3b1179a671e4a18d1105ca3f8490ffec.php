<?php $__env->startSection('page_title'); ?>
    <?php echo app('translator')->getFromJson('messages.users.users'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i><?php echo app('translator')->getFromJson('messages.users.edit_user'); ?></h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="<?php echo e(url('users/'.$user->id.'/update')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label"><?php echo app('translator')->getFromJson('messages.users.user_name'); ?> *</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                
                                <input type="text" name="name" placeholder="<?php echo app('translator')->getFromJson('messages.users.user_name'); ?>" value="<?php echo e($user->name); ?>" class="form-control input-lg" required>
                                <span class="help-inline"><?php echo app('translator')->getFromJson('messages.users.add_user'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label"><?php echo app('translator')->getFromJson('messages.users.email'); ?> *</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                
                                <input type="email" name="email" placeholder="Email" value="<?php echo e($user->email); ?>" class="form-control input-lg" required>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label"><?php echo app('translator')->getFromJson('messages.users.password'); ?> </label>
                            <div class="col-sm-9 col-lg-10 controls">
                                
                                <input type="password" name="password" placeholder="<?php echo app('translator')->getFromJson('messages.users.password'); ?>" class="form-control input-lg" >
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label"><?php echo app('translator')->getFromJson('messages.users.phone'); ?> (optional)</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="phone" placeholder="<?php echo app('translator')->getFromJson('messages.users.phone'); ?>" value="<?php echo e($user->phone); ?>" class="form-control input-lg" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label"><?php echo app('translator')->getFromJson('messages.users.role'); ?> *</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <select class="form-control chosen-rtl" data-placeholder="Choose a Role" name="role" tabindex="1">
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->name); ?>" <?php if($user->roles()->first()->name==$role->name): ?> selected="selected" <?php endif; ?>><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
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
        $('#user').addClass('active');
        $('#user-index').addClass('active');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\ivas_template_laravel5.8\resources\views/users/edit.blade.php ENDPATH**/ ?>