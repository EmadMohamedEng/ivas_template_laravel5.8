<?php $__env->startSection('page_title'); ?>
    Import Database Backup
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-md-12">
            <div class="box box-black">
                <div class="box-title">
                    <h3><i class="fa fa-table"></i>BackUps</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="" href="<?php echo e(url('export_DB')); ?>" data-original-title="Export current DB"><i class="fa fa-download"></i></a> 
                        </div>
                    </div>
                    <br><br>
					<div class="table-responsive">
					    <table class="table table-advance">
					        <thead>
					            <tr> 
					                <th>Backup database name</th>
					                <th class="visible-md visible-lg" style="width:130px"><?php echo app('translator')->getFromJson('messages.action'); ?></th>
					            </tr>
					        </thead>
					        <tbody>
                                <?php $__currentLoopData = $databases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $database): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($database); ?></td> 
                                        <td>
                                            <!-- <a class="btn btn-circle show-tooltip" title="Import This DB" href="<?php echo e(url('import_DB?path='.$database)); ?>"><i class="fa fa-upload"></i></a> -->
                                            <a class="btn btn-circle show-tooltip btn-danger" href="<?php echo e(url('delete_backup?path='.$database)); ?>" onclick="return confirm('Are you sure you want to delete this backup ?');" title="Delete This DB"><i class="fa fa-trash"></i></a>        
                                            <a class="btn btn-circle show-tooltip btn-success" target="_blank" href="<?php echo e(url('download_backup?path='.$database)); ?>"  title="Download This Backup"><i class="fa fa-save"></i></a>
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
     

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('script'); ?> 
    <script> 
        $('#setting').addClass('active');
        $('#setting-import-DB').addClass('active');
    </script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev/public_html/ivas_template_laravel5.8/resources/views/dashboard/list_backups.blade.php ENDPATH**/ ?>