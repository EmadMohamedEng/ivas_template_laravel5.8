<?php $__env->startSection('page_title'); ?>
 <?php if(isset($category)): ?> <?php echo e($category->title); ?> <?php else: ?> Content <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-black">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Content Table</h3>
                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                                <a class="btn btn-circle show-tooltip" title="" href="<?php echo e(url('content/create')); ?>" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
                                <?php
                                $table_name = "contents";
                                // pass table name to delete all function
                                // if the current route exists in delete all table flags it will appear in view
                                // else it'll not appear
                                ?>
                                <?php echo $__env->make('partial.delete_all', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        <br><br>
                        <div class="table-responsive">
                            <table id="dtcontent" class="table table-striped dt-responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="width:18px"><input type="checkbox" onclick="select_all('contents')"></th>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Category</th>
                                        <th>Content Type</th>
                                        <th>patch number</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                
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

    $('#contents').addClass('active');
    $('#contents_index').addClass('active');

</script>

<script>
    window.onload = function() {
        $('#dtcontent').DataTable({
            "processing": true,
            "serverSide": true,
            //"search": {"regex": true},
            "ajax": {
            type: "GET",
            "url": "<?php echo url('content/allData'); ?>",
            "data":"<?php echo e(csrf_token()); ?>"
            },
            columns: [
            {data: 'index', searchable: false, orderable: false},
            {data: 'id'},
            {data: 'title'},
            {data: 'content'},
            {data: 'Category'},
            {data: 'content_type'},
            {data: 'patch number'},
            {data: 'action', searchable: false}
            ]
            , "pageLength": 5
        });
    };
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/content/index.blade.php ENDPATH**/ ?>