<?php $__env->startSection('page_title'); ?>
 Post
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-black">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Post Table</h3>
                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                                <a class="btn btn-circle show-tooltip" title="" href="<?php echo e(url('post/create')); ?>" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
                                <?php
                                $table_name = "posts";
                                // pass table name to delete all function
                                // if the current route exists in delete all table flags it will appear in view
                                // else it'll not appear
                                ?>
                                <?php echo $__env->make('partial.delete_all', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        <br><br>
                        <div class="table-responsive">
                            <table id="dtposts" class="table table-striped dt-responsive" cellspacing="0" width="100%">

                                <thead>
                                    <tr>
                                        <th style="width:18px"><input type="checkbox" onclick="select_all('posts')"></th>
                                        <th>content</th>
                                        <th>published date</th>
                                        <th>Status</th>
                                        <th>url</th>
                                        <th>user</th>
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


$('#post').addClass('active');
$('#post_index').addClass('active');

</script>

<script>
    window.onload = function() {
        $('#dtposts').DataTable({
            "processing": true,
            "serverSide": true,
            //"search": {"regex": true},
            "ajax": {
            type: "GET",
            "url": "<?php echo url('post/allData?post_id='); ?><?php echo e(isset($post)? $post->id : ''); ?>",
            "data":"<?php echo e(csrf_token()); ?>"
            },
            columns: [
            {data: 'index', searchable: false, orderable: false},
            {data: 'content'},
            {data: 'published_date'},
            {data: 'Status'},
            {data: 'url'},
            {data: 'user'},
            {data: 'action', searchable: false}
            ]
            , "pageLength": 5
        });
    };
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/post/index.blade.php ENDPATH**/ ?>