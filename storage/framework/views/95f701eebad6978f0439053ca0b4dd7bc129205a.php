<?php $__env->startSection('page_title'); ?>
provider
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-black">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> provider Table</h3>
                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                                <a class="btn btn-circle show-tooltip" title="" href="<?php echo e(url('provider/create')); ?>"
                                    data-original-title="Add new record"><i class="fa fa-plus"></i></a>
                                <?php
                                $table_name = "providers";
                                // pass table name to delete all function
                                // if the current route exists in delete all table flags it will appear in view
                                // else it'll not appear
                                ?>
                            </div>
                        </div>
                        <br><br>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped dt-responsive" cellspacing="0" width="100%">

                                <thead>
                                    <tr>
                                        <th style="width:18px"><input type="checkbox" onclick="select_all('providers')">
                                        </th>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><input class="select_all_template" type="checkbox" name="selected_rows[]"
                                                value="<?php echo e($value->id); ?>" class="roles" onclick="collect_selected(this)">
                                        </td>
                                        <td><?php echo e($value->id); ?></td>
                                        <td>
                                            <?php echo e($value->title); ?>

                                        </td>
                                        <td>
                                            <img class=" img-circle" width="100px" height="100px"
                                                src="<?php echo e($value->image); ?>" />
                                        </td>
                                        <td class="visible-md visible-lg">
                                            <div class="btn-group">
                                            <a class="btn btn-sm btn-success"
                                                href="<?php echo e(url("category/create?provider_id=".$value->id."&title=".$value->title)); ?>" title="Add Category"><i
                                                    class="fa fa-plus"></i>
                                                </a>
                                                <a class="btn btn-sm show-tooltip"
                                                    href='<?php echo e(url("provider/$value->id/edit")); ?>' title="Edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <form action="<?php echo e(url('provider/'.$value->id.'/delete')); ?>"
                                                    method="GET" style="display: initial;">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        style="height: 28px;"><i class="fa fa-trash"></i></button>
                                                </form>
                                                <a class="btn btn-sm show-tooltip show-tooltip"
                                                href="<?php echo e(url("provider/$value->id")); ?>" title="category"><i
                                                    class="fa fa-step-forward"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
$('#provider').addClass('active');
$('#provider_index').addClass('active');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7.3\htdocs\ivas_template_laravel5.8\resources\views/provider/index.blade.php ENDPATH**/ ?>