<?php $__env->startSection('page_title'); ?>
    Migrate Manager
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-table"></i> Migrate Manager</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover fill-head">
                            <thead>
                                <tr>
                                    <th>Table</th>
                                    <th>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" onchange="check_all()"/>
                                            create Migrate files
                                        </label>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php echo Form::open(["url"=>"admin/migrate_tables","class"=>"form-horizontal"]); ?>

                                <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($value); ?>

                                    </td>
                                    <td>
                                        <input class="migrate_class" type="checkbox" name="tables[]" value="<?php echo e($value); ?>" />
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="btn-group">
                                    <input type="submit" class="btn btn-primary btn-success" value="Migrate Tables">
                                </div>
                                <br><br>
                            <?php echo Form::close(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        var checked = false ;
        function check_all()
        {
            checked = !checked ;
            $('.migrate_class').prop('checked',checked);
        }
    </script>
    <script>
        $('#setting').addClass('active');
        $('#setting-migrate').addClass('active');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7.3\htdocs\ivas_template_laravel5.8\resources\views/dashboard/migrate_manager.blade.php ENDPATH**/ ?>