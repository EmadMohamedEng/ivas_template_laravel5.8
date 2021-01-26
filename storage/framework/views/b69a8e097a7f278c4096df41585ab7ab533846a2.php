<?php $__env->startSection('page_title'); ?>
    Delete All Manager
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-table"></i>Delete All Flags</h3>
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
                                    <th>Controller</th> 
                                    <th>Route</th>
                                    <th>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" onchange="check_all()"/>
                                            Add Delete All Flag
                                        </label>
                                    </th> 
                                </tr>
                            </thead>
                            <tbody>
                            <?php echo Form::open(["url"=>"delete_all","class"=>"form-horizontal"]); ?> 
                                <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($route->controller_name); ?> 
                                    </td>
                                    <td>
                                        <?php echo e($route->function_name); ?>

                                    </td> 
                                    <td>
                                        <input class="delete_all_class" type="checkbox" name="delete_alls[<?php echo e($route->id); ?>]" 
                                            <?php $__currentLoopData = $delete_alls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                <?php if($route->controller_name == $item->route_ref->controller_name && $route->route == $item->route_ref->route): ?> 
                                                    checked 
                                                <?php endif; ?> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> />
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                <div class="btn-group">
                                    <input type="submit" class="btn btn-primary btn-success" value="Save Changes">
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
            $('.delete_all_class').prop('checked',checked);
        }
    </script>
    <script>
        $('#delete-all').addClass('active');
        $('#delete-all-index').addClass('active');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/delete_all_flags/index.blade.php ENDPATH**/ ?>